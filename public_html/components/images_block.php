<h2 class="caption">Школа для Вас, якщо Ви чи ваші близькі:</h2>
<div id="images_block">
    <?php
    foreach ($dao->getImagesById($page['id']) as $image) {
        ?>
            <img class="image" src="<? echo $image['image']?>">
            <div class="image_text"><? echo $image['text'] ?></div>
        <?php
    }
    ?>
</div>