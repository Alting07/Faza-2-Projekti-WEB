<?php
require 'variables.php';
include_once 'adminClass.php';
include_once 'simpleUserClass.php';
include_once 'userMapper.php';

session_start();

if(isset($_POST['login-btn'])){
    $login = new LoginLogic($_POST);
    $login->verify();
}
else if(isset($_POST['register-btn'])){
    $register = new RegisterLogic($_POST);
    $register->registerUser();
}

class LoginLogic{
    private $username = "";
    private $password = "";
    function __constructor($formData){
        $this->username=$formData['username'];
        $this->password=$formData['password'];
    }
    public function verify(){
        if($this->verifyEmpty($username, $password)){
            header("Location:../login.php");
        }
        else if($this->verifyLogin($username, $password)){
            header("Location:../index.php");
        }
        else{
            header("Location:../login.php");
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
        $users = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0) return false;
        else if (password_verify($password, $user['userPassword'])) {
            if ($user['role'] == 1) {
                $obj = new Admin($user['id'], $user['username'], $user['password'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['id'], $user['username'], $user['password'], $user['role'], "");
                $obj->setSession();
            }
            return true;
        } else return false;
    }
}


class RegisterLogic{
    private $username = "";
    private $password = "";
    private $lastname = "";
    function __constructor($formData){
        $this->username=$formData['register-username'];
        $this->password=$formData['register-password'];
        $this->email=$formData['register-lastname'];
    }

    public function registerUser(){
        $user = new SimpleUser($this->username, $this->password, 20 ,0,$this->lastname);
        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../login.php");
    }
}

