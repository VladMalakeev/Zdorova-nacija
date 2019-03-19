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
    public static function checkTables($db){
        DataBase::createSlides($db);
        DataBase::createPages($db);
        DataBase::createFeatures($db);
        DataBase::createVideos($db);
        DataBase::createSocialLink($db);
        DataBase::createImages($db);
    }

    public function createPages($db){
        $sql = "CREATE TABLE IF NOT EXISTS pages(
         id int(11) AUTO_INCREMENT primary key,
         link varchar(255),
         header varchar(255),
         page_text text,
         description varchar(255),
         keywords varchar (255),
         is_main boolean)";

        return $db->exec($sql);
    }
    public function createSlides($db){
        $sql = "CREATE TABLE IF NOT EXISTS slides(
         id int(11) AUTO_INCREMENT primary key,
         slide_photo varchar (255),
         slide_header varchar (255),
         slide_text varchar (255),
         page_id int(11))";

        return $db->exec($sql);
    }

    public function createImages($db){
        $sql = "CREATE TABLE IF NOT EXISTS images(
         id int(11) AUTO_INCREMENT primary key,
         image varchar (255),
         page_id int(11))";

        return $db->exec($sql);
    }

    public function createFeatures($db){
        $sql = "CREATE TABLE IF NOT EXISTS features(
         id int(11) AUTO_INCREMENT primary key,
         feature_text varchar (255),
         feature_image varchar (255),
         page_id int(11))";

        return $db->exec($sql);
    }
    public function createVideos($db){
        $sql = "CREATE TABLE IF NOT EXISTS videos(
         id int(11) AUTO_INCREMENT primary key,
         link varchar (255),
         page_id int(11))";

        return $db->exec($sql);
    }
    public function createSocialLink($db){
        $sql = "CREATE TABLE IF NOT EXISTS social_link(
         id int(11) AUTO_INCREMENT primary key,
         name varchar (255),
         link varchar (255),
         image varchar (255),
         page_id int(11))";

        return $db->exec($sql);
    }
}