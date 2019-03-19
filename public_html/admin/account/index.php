<?php
include('account/dao/PageDao.php');
    $pageDao = new PageDao($db);
    $page = $pageDao->getPage();
?>

<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title>Админ панель</title>
    <link href="styles/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="./styles/index_admin.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" href="/image/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="account/jodit/build/jodit.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./account/ajax/index_script.js"></script>
    <script src="/account/jodit/build/jodit.min.js"></script>
</head>

<body>

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="main-tab" data-toggle="tab" href="#main" role="tab" aria-controls="main" aria-selected="true">Параметри сторінки</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="slider-tab" data-toggle="tab" href="#slider" role="tab" aria-controls="slider" aria-selected="false">Карусель</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="features-tab" data-toggle="tab" href="#features" role="tab" aria-controls="features" aria-selected="false">Можливості</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="true">Відео</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="links-tab" data-toggle="tab" href="#links" role="tab" aria-controls="links" aria-selected="true">Посилання</a>
    </li>
</ul>

<div id="successMessage" class="alert alert-success" role="alert">
    Данные отредактированы
</div>

<div id="errorMessage" class="alert alert-danger" role="alert">
    Ошибка редактирования
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="main" role="tabpanel" aria-labelledby="main-tab">
        <? include('./account/components/page_settings.php') ?>
    </div>

    <div class="tab-pane fade" id="slider" role="tabpanel" aria-labelledby="slider-tab">
        <? include('./account/components/slider_settings.php') ?>
    </div>

    <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="features-tab">
        <? include('./account/components/features_settings.php') ?>
    </div>

    <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
        <? include('./account/components/video_settings.php') ?>
    </div>

    <div class="tab-pane fade" id="links" role="tabpanel" aria-labelledby="links-tab">
        <? include('./account/components/links_settings.php') ?>
    </div>
</div>

<script src="js/bootstrap.js"></script>
<script src="js/popper.js"></script>
<script src="js/script.js"></script>
</body>
</html>