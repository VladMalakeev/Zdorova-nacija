<?php
    include('account/dao/SliderDao.php');
    $dao = new SliderDao($db);
?>
<script src="account/ajax/slider_queries.js"></script>
<div class="contentBlock">
    <form enctype="multipart/form-data">
    <input type="file" id="load_image " onchange="addSlide(<? echo $page['id'] ?>, this)">
    </form>
    <div id="slides"></div>
    <script>getAllSlides(<? echo $page['id'] ?>)</script>
</div>