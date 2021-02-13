<?php
require_once 'personClass.php'


class SimpleUser extends Person{
    public function __construct($username, $password, $age, $role){
        parent::__construct($username, $password, $age, $role);
    }

    public function setSession(){
        $_SESSION['role'] = 0;
    }
}
