<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/4/16
 * Time: 12:46 AM
 */ ?>

<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5">

        <div class="caption text-center text-dark" data-stellar-ratio="0.7">
            <div id="owl-intro-text" class="owl-carousel slider-define">

                <?php foreach ($sliders as $slider) { ?>
                    <div class="item">
                        <img src="<?php echo $slider->img_src; ?>" class="slider-item"/>
                        <div class="extra-space-l"></div>
                        <?php if ($slider->url != NULL) { ?>
                            <a class="btn btn-blank" href="<?php echo $slider->url; ?>" target="_blank"
                               role="button"><?php echo $this->lang->line('VIEW_MORE'); ?></a>
                        <?php } ?>
                    </div>
                <?php }
                ?>

            </div>
        </div> <!-- /.caption -->

</section>

