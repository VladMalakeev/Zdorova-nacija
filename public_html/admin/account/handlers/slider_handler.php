<?php
include('../dao/SliderDao.php');
require('../../config/DataBase.php');
$db = DataBase::getInstance();
$sliderDao = new SliderDao($db);

if(isset($_POST)){
    $page_id =1;
    $file = $_FILES['img'];
    $name = $file['name'];
    $errorArray = array();
    $errors = 0;
    $path = 'http://'.$_SERVER['HTTP_HOST'].'/saved/main/slides';
    if(!is_dir($path)) {
        if (!mkdir($path, 0777)) {
            $errorArray[] = 'Не удалось создать директорию пользователя';
            $errors++;
        }
    }
    if( $file['size']>0) {
        //переместим ее в папку на сервере
        if (!move_uploaded_file($file['tmp_name'], '../../saved/main/slides/'.$name)) {
            $errorArray[] = 'Не удалось переместить фото в директорию';
            $errors++;
        }
    }
    $fulPath = $path.$name;

   echo $sliderDao->setSlide($fulPath,'','',$page_id);
}

if(isset($_POST['get_all_slides'])){
    $page_id = $_POST['page_id'];
    echo json_encode($sliderDao->getAllSlides($page_id));
}