
<div id="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="false">
        <ol class="carousel-indicators">
            <?php
            $i = 0;
            foreach ($dao->getSlidesByPageId($page['id']) as $slide) {
                ?>
                <li
                    data-target='#carouselExampleIndicators' data-slide-to='<?php echo $i ?>'
                    class='<?php if ($i == 0) echo 'active' ?>'>
                </li>
                <?php
                $i++;
            }
            ?>
        </ol>
        <div class="carousel-inner">
                <?php
                $i = 0;
                foreach ($dao->getSlidesByPageId($page['id']) as $slide) {
                    ?>
                    <div class="carousel-item <?php if ($i == 0) echo ' active' ?>">
                        <div class="d-block w-100 img_block" style="background: url('<?php echo $slide['slide_photo'] ?>');background-position: center;background-size: cover;" >
                            <div class="clour_block"></div>
                        </div>
                        <div class="carousel-caption d-md-block">
                            <h5><?php echo $slide['slide_header'] ?></h5>
                            <p><?php echo $slide['slide_text'] ?></p>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>