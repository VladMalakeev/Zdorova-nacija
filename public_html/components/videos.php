<h2 class="caption">Про школу:</h2>
<div id="video">
    <?php
    foreach ($dao->getVideosByPageId($page['id']) as $video){
        ?>
    <iframe src="<? echo $video['link'] ?>"></iframe>
    <?
    }
    ?>
</div>