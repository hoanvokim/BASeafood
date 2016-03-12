<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/4/16
 * Time: 12:46 AM
 */ ?>

<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="caption text-center text-dark" data-stellar-ratio="0.7">
            <div id="owl-intro-text" class="owl-carousel">

                <?php foreach ($sliders as $slider) { ?>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>/webresources/images/sliders/<?php echo $slider->img_src; ?>" class="slider-item"/>
                        <p><?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                echo $slider->en_content;
                            }
                            else {
                                echo $slider->vi_content;
                            } ?></p>
                        <div class="extra-space-l"></div>
                        <a class="btn btn-blank" href="<?php echo $slider->url; ?>" target="_blank"
                           role="button"><?php echo $this->lang->line('VIEW_MORE'); ?></a>
                    </div>
                <?php }
                ?>

            </div>
        </div> <!-- /.caption -->
    </div> <!-- /.container -->
</section>

