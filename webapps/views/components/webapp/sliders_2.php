<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5">
    <div id="why_choose" class="carousel slide" data-ride="carousel" data-interval="9999999">
        <ol class="carousel-indicators">
            <?php $counter = 0;
            foreach ($features as $feature) { ?>
                <li data-target="#why_choose"
                    data-slide-to="<?php echo $counter; ?>" <?php if ($counter == 0) echo 'class="active"'; ?>></li>
                <?php $counter++;
            } ?>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner text-center">
            <?php $counter = 0;
            foreach ($features as $feature) { ?>
                <div class="item  <?php if ($counter == 0) echo 'active'; ?>">
                    <div class="single_why">
                        <i class="<?php echo $feature->title_icon; ?>"></i>
                        <h3><?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                echo $feature->en_name;
                            } else {
                                echo $feature->vi_name;
                            } ?></h3>
                        <span></span>
                        <p><?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                echo $feature->en_content;
                            } else {
                                echo $feature->vi_content;
                            } ?></p>
                    </div>
                </div>
                <?php $counter++;
            } ?>

        </div><!-- END CAROUSEL INNER -->
    </div>
</section>