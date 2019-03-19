<?php
session_start();
//общие настройки
header('Content-Type: text/html; charset=UTF8');

//отображения ошибок
ini_set('display_errors',1);
error_reporting(E_ALL);

//Определяем переменную для переключателя
$user = isset($_SESSION['user']) ? $_SESSION['user'] : false;

$err = array();

//Устанавливаем ключ защиты
define('KEY', true);

//соединение с бд
require('config/DataBase.php');
$db = DataBase::getInstance();
DataBase::createTable($db);

if($user === false){
    include 'auth/handler_form.php';
    include 'auth/auth_form.php';
}
else if($user === true) {
    //Выход из авторизации
    if(isset($_GET['exit']) == true){
        //Уничтожаем сессию
        session_destroy();

        //Делаем редирект
        header('Location:/');
        exit;
    }
    // файл личного кабинетa
    include('account/index.php');
}