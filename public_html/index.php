<?php
include('config/DataBase.php');
include('config/Dao.php');

$db = DataBase::getInstance();
DataBase::checkTables($db);
$dao = new Dao($db);
$page = $dao->getPage();
?>
<!DOCTYPE>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<? echo $dao->getMetaDescriptionByPageId($page['id']) ?>">
    <meta name="keywords" content="<? echo $dao->getMetaKeywordsByPageId($page['id']) ?>">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alice|Neucha" rel="stylesheet">
    <link href="styles/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="styles/index.css" type="text/css" rel="stylesheet">
    <link href="styles/header.css" type="text/css" rel="stylesheet">
    <link href="styles/slider.css" type="text/css" rel="stylesheet">
    <link href="styles/features.css" type="text/css" rel="stylesheet">
    <link href="styles/description.css" type="text/css" rel="stylesheet">
    <link href="styles/videos.css" type="text/css" rel="stylesheet">
    <link href="styles/mainLinks.css" type="text/css" rel="stylesheet">
    <link href="styles/footer.css" type="text/css" rel="stylesheet">
    <link href="styles/images.css" type="text/css" rel="stylesheet">
    <link href="styles/float_button.css" type="text/css" rel="stylesheet">
    <link href="styles/media.css" type="text/css" rel="stylesheet">
<!--    <script src="js/script.js"></script>-->

</head>

<body>

    <?
//    require('components/float_button.php');
    require('components/header.php');
    require('components/slider.php');
    require('components/features.php');
    require('components/images_block.php');
    require('components/description.php');
    require('components/videos.php');
    require('components/mainLinks.php');
    require('components/footer.php');
    ?>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/popper.js"></script>

</body>
</html>