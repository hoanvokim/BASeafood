<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/4/16
 * Time: 12:48 AM
 */
?>
<section id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h1 class="title">Our News <img src="<?php echo base_url(); ?>/webresources/images/home/news.png"></h1>
                <div class="devider"></div>
                <p class="subtitle">Update latest news from the company</p>
            </div>
        </div><!--/ Title row end -->
        <div class="row">
            <?php foreach ($news as $new) { ?>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay=".3s">
                    <div class="media recent-post">
                        <div class="post-img-wrapper">
                            <div class="post-img-overlay">
                                <img src="<?php echo base_url(); ?>webresources/images/<?php echo $new->url_image ?>" alt="blog"/>
                                <?php if (!$this->utilities->IsNullOrEmptyString($new->url_attached_file)) { ?>
                                    <a href="<?php echo $new->url_attached_file ?>">
                                        <i class="fa fa-download news__download"></i>
                                    </a>
                                <?php } ?>
                            </div>
                        </div><!-- end image wrapper -->
                        <div class="media-body post-body">
                            <h3><a class="news__link" href="<?php echo base_url(); ?>/news-details/view/<?php echo $new->id ?>">
                                    <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                        echo $new->en_title;
                                    }
                                    else {
                                        echo $new->vi_title;
                                    } ?>
                                </a></h3>
                            <p class="post-meta">
                                <span class="post-meta-author">By <a href="#">Admin</a></span>
                                <span class="date">On <?php echo $new->created_date ?></span>
                            </p>
                            <div class="post-excerpt">
                                <p> <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                        echo $new->en_content;
                                    }
                                    else {
                                        echo $new->vi_content;
                                    } ?></p>
                            </div>
                        </div><!--/ end media body -->
                    </div><!--/ end media -->
                </div><!--/ end col-sm-4 -->
            <?php } ?>

        </div><!--/ Content row end -->
    </div><!--/ Container end -->
</section>
