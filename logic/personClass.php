<?php

abstract class Person{
    private $id;
    private $username;
    private $password;
    private $age;
    private $role;

    public function __construct($id,$username, $password, $age, $role){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->age = $age;
        $this->role = $role;
    }

    abstract function setSession();


}
