<?php
include('account/dao/LinksDao.php');
$dao = new LinksDao($db);
?>
<script src="account/ajax/links_queries.js"></script>
<div class="contentBlock">
    <input type="file" multiple="multiple" accept=".txt,image/*">
    <a href="#" class="upload_files button">Загрузить файлы</a>
    <div class="ajax-reply"></div>
</div>