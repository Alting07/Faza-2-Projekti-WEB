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
else{
    header("Location:../login.php");
}

class LoginLogic{
    private $username = "";
    private $password = "";
    function __constructor($formData){
        $this->username=$formData['username'];
        $this->password=$formData['password'];
    }
    public function verify(){
        if($this->verifyEmpty($this->username, $this->password)){
            header("Location:../login.php");
        }
        else if($this->verifyLogin($this->username, $this->password)){
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
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null) return false;
        else if (password_verify($password, $user['password'])) {
                return true;
        }
        return false;
    }
}


class RegisterLogic{
    private $username = "";
    private $password = "";
    private $userLastName = "";
    function __constructor($formData){
        $this->username=$formData['register-username'];
        $this->password=$formData['register-password'];
        $this->userLastName=$formData['register-lastname'];
    }

    public function registerUser(){
        $user = new SimpleUser($this->username, $this->password, 20 ,0,$this->userLastName);
        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../index.php");

    }
}

