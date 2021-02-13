<?php
class VariablesExample
{
    private static $loginAdminUser = array("id" => "1", "username" => "admin", "password" => "admin123", 'role' => '1');
    private static $loginSimpleUser = array("id" => "2", "username" => "test", "password" => "test123", 'role' => '0');
    private static $loginSimpleUser1 = array("id" => "3", "username" => "testing", "password" => "test123", 'role' => '0');
    private static $loginSimpleUser2 = array("id" => "4", "username" => "tested", "password" => "test123", 'role' => '0');
    private static $loginSimpleUser3 = array("id" => "5", "username" => "user", "password" => "user123', 'role' => '0');
    private static $loginSimpleUser4 = array("id" => "6", "username" => "newuser", "password" => "user123", 'role' => '0');

    private static $users;
    public static function getUsers()
    {
        self::$users = array(self::$loginAdminUser, self::$loginSimpleUser, self::$loginSimpleUser1, self::$loginSimpleUser2, self::$loginSimpleUser3, self::$loginSimpleUser4);
        return self::$users;
    }
    
}
