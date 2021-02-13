<?php

abstract class Person
{
    private $id;
    private $username;
    private $password;
    private $role;

    function __construct($id, $username, $password, $role)
    {
        $this->$id = $id;
        $this->$username = $username;
        $this->$password = $password;
        $this->$role = $role;
    }

    abstract protected function setSession();
    abstract protected function setCookie();

    protected function getUsername()
    {
        return $this->username;
    }

    
    class Admin extends Person
    {
        public function __construct($username, $password, $age, $role)
        {
            parent::__construct($username, $password, $age, $role); //equivalent to super in java
        }


        public function setSession()
        {
            $_SESSION["role"] = 1;
            $_SESSION['roleName'] = "Administrator";
        }

        public function setCookie()
        {
            setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
        }
    }

    class SimpleUser extends Person
{
    public function __construct($username, $password, $age, $role)
    {
        parent::__construct($username, $password, $age, $role);
    }

    public function setSession()
    {
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }
}

}
