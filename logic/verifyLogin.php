<?php
require 'variables.php';
// include_once 'adminClass.php';
// include_once 'simpleUserClass.php';
session_start();

if(isset($_POST['login-btn'])){
    $obj = new LoginLogic();
    $obj->verify();
}

class LoginLogic{
    private $formData;
    function __constructor($formData){
        $this->formData=$formData;
    }
    public function verify(){
        $username = $this->formData['username'];
        $password = $this->formData['password'];
        if(verifyEmpty($username, $password)){
            header("Location:login.php");
        }
        else if(verifyLogin($username, $password)){
            header("Location:login.php");
        }
        else{
            header("Location:index.php");
        }
    }

    

    private function verifyEmpty($username, $password){

        if(empty($username) || empty($password)){
            return true;
        } 
        return false;
    }

    private function verifyLogin($username, $password){
        $person = null;
        $users = VariableExample::getUsers();
        foreach($users as $user){
            if($user['username'] == $username && user['password'] == $password ){
                if($user['role']==1){
                    $person = new AdminUser($user["id"], $user["username"], $user["password"], $user["age"]);
                }
                else if($user['role']==1){
                    $person = new SimpleUser($user["id"], $user["username"], $user["password"], $user["age"]);
                }
            }
        }
        if($person != null){
            $person->setSession();
        }
        return $person;
    }
}



