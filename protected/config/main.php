<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'SchoolManagement System',
    // preloading 'log' component
    'preload' => array('log'),
    'aliases' => array(
        'controllers' => dirname(__FILE__) . '/../controllers',
        'components' => dirname(__FILE__) . '/../components',
        'RestfullYii' =>realpath(__DIR__ . '/../extensions/starship/RestfullYii'),
        'ext' => dirname(__FILE__) . '/../extensions',
    ),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'qwerty',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'class' => 'MyWebUser',
            'allowAutoLogin' => true,
        ),
        // uncomment the following to enable URLs in path-format
       //'urlManager' => array(
       //     'urlFormat' => 'path',
       //     'rules' => array(
       //         '<controller:\w+>/<id:\d+>' => '<controller>/view',
       //         '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
       //         '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
       //     ),
       // ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => require(
            dirname(__FILE__) . '/../extensions/starship/RestfullYii/config/routes.php'
            ),
        ),
        'db' => array(
            'connectionString' => 'mysql:' . dirname(__FILE__) . '/../data/schema.mysql.sql',
        ),
        // uncomment the following to use a MySQL database
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=lcs_db',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        'authManager' => array(
            'class' => 'CDbAuthManager',
            'connectionID' => 'db',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);
