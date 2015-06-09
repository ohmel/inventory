<?php

/**
 * FrAuthModel is used to lookup temporary authentication tokens and process new
 * authentication requests from client.
 * This class can be easily replaced by custom class to allow different authentication model.
 * 
 * @copyright 2014 FreshRealm
 * @author Ondrej Nebesky <ondrej@freshrealm.co>
 * @author John Grogg <grogg@freshrealm.co>
 * @version 0.9
 * @package FreshRest
 */
class FrAuthModel {

    /**
     *
     * @var FrApiBaseModule 
     */
    private $module;

    /**
     * Model that is loaded based on authentication token. Could be a user or organization model.
     * @var CActiveRecord
     */
    protected $model;

    /**
     * Once token is authenticated this flag is set to true
     * @var boolean
     */
    protected $_isAuthenticated = false;

    /**
     * Client IP address
     * @var string
     */
    public $ipAddress;

    /**
     * Temporary token obtained from client or new token generated by server
     * @var string 
     */
    public $token;

    /**
     * Database table name that is connected to authentication table
     * @var string 
     */
    public $connectedType;

    /**
     * Database primary key value of connected_type table
     * @var string 
     */
    public $connectedId;

    /**
     * FrAuthModel needs to know the module instance.
     * @param FrApiModule $module
     */
    public function __construct($module, $authData) {
        $this->module = $module;
        $this->ipAddress = $authData['ipAddress'];
        //$this->connectedType = $module->myAuthenticatedModelClass
    }

    /**
     * Is this temporary token still valid? Returns false if token is not found or
     * new token is needed forcing client to reauthenticate.
     * 
     * @param string $token
     * @return boolean
     */
    public function isAuthenticated($token) {
        if ($this->_isAuthenticated) {
            return true;
        }

        // empty key cannot be authenticated
        if (strlen($token) == 0) {
            return false;
        }

        if ($this->lookupCachedToken($token)) {
            return true;
        }

        // lookup auth token in database
        $command = Yii::app()->db->createCommand("SELECT * FROM {$this->module->authTableName} WHERE token=:token");

        $record = $command->queryRow(true, array(
            ':token' => $token
        ));

        if ($record == null) {
            return false;
        }

        $this->setIsAuthenticated($record);
        if (isset(Yii::app()->cache)) {
            Yii::app()->cache->set("api-auth-token-" . $this->token, $record, $this->module->authCacheDuration);
        }
        return true;
    }

    /**
     * Use cache to store token and connected entity record (database columns of fr_api_device table)
     * @param type $token
     * @return boolean
     */
    private function lookupCachedToken($token) {
        if (!isset(Yii::app()->cache)) {
            return false;
        }
        $record = Yii::app()->cache->get("api-auth-token-" . $token);
        if ($record === false) {
            return false;
        }

        $this->setIsAuthenticated($record);
        return true;
    }

    /**
     * Process data loaded from database and update attributes of this class. Client
     * is authenticated at this point
     * @param array $record
     */
    private function setIsAuthenticated($record) {
        $this->ipAddress = $record['ip_address'];
        $this->token = $record['token'];
        $this->connetectedType = $record['connected_type'];
        $this->connectedId = $record['connected_id'];
        $this->_isAuthenticated = true;
    }

    /**
     * Verify secret api key to the record stored in client table. Name of this column
     * can be configured in api module using myAutheticatedModelPasswordField attribute.
     * @param string $key
     * @return boolean
     */
    public function authenticate($key) {
        // authentication is not set or key is empty cannot result into valid authentication
        if (strlen($this->module->myAuthenticatedModelClass) == 0 || strlen($key) == 0) {
            return false;
        }
        $modelClass = $this->module->myAuthenticatedModelClass;
        $model = $modelClass::model()->findByAttributes(array(
            $this->module->myAuthenticatedModelPasswordField => $key
        ));
        if ($model == null) {
            return false;
        }

        // store model and create temporary token for it
        $this->model = $model;
        $this->isAuthenticated = true;

        $this->createApiDeviceRecord();
        return true;
    }

    /**
     * Create temporary auth token in database and cache. Delete old authentication
     * records for this client with current ip address.
     * @return type
     */
    private function createApiDeviceRecord() {
        if ($this->model == null) {
            return;
        }

        $pkAttribute = $this->model->tableSchema->primaryKey;

        // generate data for new temp auth token
        $newRecord = array(
            'ip_address' => $this->module->getIpAddress(),
            'token' => self::generateRandomToken(),
            'connected_type' => $this->model->tableName(),
            'connected_id' => $this->model->$pkAttribute,
            'update_time' => date('Y-m-d H:i:s'),
        );

        // delete auth record for the current entity
        $deleteCommand = Yii::app()->db->createCommand("DELETE FROM {$this->module->authTableName} WHERE connected_type=:type AND connected_id=:id AND ip_address=:ip");
        $deleteCommand->bindValues(array(
            ':type' => $newRecord['connected_type'],
            ':id' => $newRecord['connected_id'],
            ':ip' => $newRecord['ip_address']
        ));
        $deleteCommand->execute();

        // insert new one
        $insertCommand = Yii::app()->db->createCommand("INSERT INTO {$this->module->authTableName}(token, ip_address, update_time, connected_type, connected_id) VALUES(:token, :ip, :date, :type, :id)");
        $insertCommand->bindValues(array(
            ':token' => $newRecord['token'],
            ':date' => $newRecord['update_time'],
            ':type' => $newRecord['connected_type'],
            ':id' => $newRecord['connected_id'],
            ':ip' => $newRecord['ip_address']
        ));
        if ($insertCommand->execute()) {

            // update this model with new token
            $this->setIsAuthenticated($newRecord);
            if (isset(Yii::app()->cache)) {
                Yii::app()->cache->set("api-auth-token-" . $this->token, $newRecord, $this->module->authCacheDuration);
            }
        }
    }

    /**
     * Load authenticated Active Record model. Use cache to speed things up.
     * @return CActiveRecord
     */
    public function getModel() {

        if (!$this->_isAuthenticated) {
            return false;
        }
        if ($this->model != null) {
            return $this->model;
        }
        if ($this->connectedId != null) {
            $class = $this->module->myAuthenticatedModelClass;
            $this->model = $class::model()->cache($this->module->authCacheDuration)->findByPk($this->connectedId);
        }
        return $this->model;
    }

    /**
     * Generate random string composed from lower case, upper case, and numbers
     */
    static function generateRandomToken($length = 24) {

        $chars = "abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXZ0123456789";
        srand((double) microtime() * 1000000);
        $i = 0;
        $pass = '';

        while ($i <= $length) {
            $num = mt_rand() % strlen($chars);
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }

        return $pass;
    }

}
