<h2 class="caption">На Школі Здоров'я Ви:</h2>
<div id="features">
    <?php
    foreach ($dao->getFeaturesByPageId($page['id']) as $feature){
        ?>
    <div class="feature_element">
        <div class="feature_photo">
            <img src="<? echo $feature['feature_image'] ?>">
        </div>
        <div class="feature_text">
            <p>
                <? echo $feature['feature_text'] ?>
            </p>
        </div>
    </div>
    <?
    }
    ?>
</div>