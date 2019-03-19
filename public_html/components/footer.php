<div id="footer">
    <div id="fb">
    <?php
    foreach ($dao->getSocialLinksByPageId($page['id']) as $link) {
        ?>
            <div class="single_link">
                <img src="<? echo $link['image'] ?>">
                <a href="<? echo $link['link'] ?> "target="_blank"><? echo $link['name'] ?></a>
            </div>
        <?php
    }
    ?>
    </div>
    <h5 id="footer_text" align="center">&copy ZDOROVA NACIJA <?php echo date('Y') ?></h5>
</div>