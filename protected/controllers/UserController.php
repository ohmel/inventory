<?php

class UserController extends RestController
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public function fetchUsers()
    {
        $usersArray = array();
        $users = LcsUsers::model()->findAll();
        $index = 0;
        foreach ($users as $user) {
            $gamesArray[$index] = $user->attributes;
            unset($gamesArray[$index]['user_password']);
            $index++;
        }
        return $gamesArray;

    }

    public function addUser($userData)
    {
        try {
            $user = new LcsUsers();
            $user->user_fullname = $userData['user_fullname'];
            $user->user_name = $userData['user_name'];
            $user->user_password = md5($userData['user_password']);
            $user->user_type = $userData['user_type'];
            $user->user_status = 1;
            if(!$user->save()){
                throw new CHttpException(500, "User is not registered");
            }
            $userData = $user->attributes;
            unset($userData['user_password']);
            return $userData;
        } catch (Exception $e) {
            throw new CHttpException(500, $e->getMessage());
        }
    }

    public function restEvents()
    {
        $this->onRest('req.get.fetchUsers.render', function () {
            echo $this->restJsonEncode($this->fetchUsers());
        });
        $this->onRest('req.post.addUser.render', function ($data) {
            $userData = $data;
            echo $this->restJsonEncode($this->addUser($userData));
        });
    }
}
