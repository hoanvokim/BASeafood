<section id="blog-details" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 centered">
                <div style="text-align: center;">
                    <div class="portfolio-items">
                        <?php if (count($offices) > 0) { ?>
                            <?php foreach ($offices as $office) { ?>
                                <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                                    <div class="portfolio-wrapper">
                                        <div class="portfolio-single">
                                            <div class="portfolio-thumb">
                                                <img src="<?php echo base_url() . $office['url_image']; ?>"
                                                     class="img-responsive">
                                            </div>
                                            <div class="portfolio-view">
                                                <ul class="nav nav-pills">
                                                    <li><a href="<?php echo base_url() . $office['url_image']; ?>"
                                                           data-lightbox="example-set"><i
                                                                class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="portfolio-info ">
                                                <h2><?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                                        echo $office['en_name'];
                                                    } else {
                                                        echo $office['vi_name'];
                                                    } ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } else {
                            ?>
                            <h4 id="result-product" class="fa text-center fa-close red result-product-red">
                                <?php echo $this->lang->line('NO_PHOTOS') ?>
                            </h4>
                            <?php

                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
