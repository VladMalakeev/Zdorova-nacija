<?php

class DataBase
{
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            $host = 'localhost';
            $db = 'wm84698_lubomir';
            $user = 'wm84698_lubomir';
            $pass = 'EGyQqu@i';
            $charset = 'utf8';
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $db = new PDO($dsn, $user, $pass);
            $db->query("SET NAMES utf8");
            self::$instance = $db;
        }
        return self::$instance;
    }

    public static function createTable($db){
        $sql = "CREATE TABLE IF NOT EXISTS admins(
         id int(11) AUTO_INCREMENT primary key,
         login varchar (255),
         password varchar (255),
         salt varchar (255))";

        return $db->exec($sql);
    }
}