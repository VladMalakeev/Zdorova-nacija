<?php
include('../dao/PageDao.php');
require('../../config/DataBase.php');
$db = DataBase::getInstance();
$pageDao = new PageDao($db);
if(isset($_POST['change_settings'])){
    $header = $_POST['header'];
    $page_text = $_POST['page_text'];
    $description = $_POST['description'];
    $keywords = $_POST['keywords'];
    $page_id = $_POST['page_id'];
    if($pageDao->updatePage($header,$page_text,$description,$keywords,$page_id)) {
        echo 'true';
    }else echo 'false';
}

if(isset($_POST['get_settings'])){
    $page_id = $_POST['page_id'];
    echo json_encode($pageDao->getPageById($page_id));
}