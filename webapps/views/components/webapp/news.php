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
            <div class="page-header text-center">
                <h1 class="title wow fadeInDown" data-wow-delay="0.4s"><?php echo $this->lang->line('NEWS'); ?> <img
                        src="<?php echo base_url(); ?>/webresources/images/home/news.png"></h1>
                <div class="devider wow fadeInDown" data-wow-delay="0.6s"></div>
            </div>
        </div><!--/ Title row end -->
        <div class="row">

            <div class="col-md-9 col-sm-7">
                <?php foreach ($news as $new) { ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInDown" data-wow-delay=".3s">
                        <div class="single-blog single-column">
                            <div class="post-thumb">
                                <a href="<?php echo $new->url_attached_file ?>"> <img src="<?php
                                    if (strpos($new->url_attached_file, 'pdf') !== false) {
                                        echo base_url() . 'webresources/images/files/pdf.png';
                                    } else if (strpos($new->url_attached_file, 'jpg') !== false) {
                                        echo $new->url_attached_file;
                                    } else {
                                        echo base_url() . 'webresources/images/files/news.png';
                                    }
                                    ?>" alt="blog"/></a>

                                <?php if (!$this->utilities->IsNullOrEmptyString($new->url_attached_file)) { ?>
                                    <a href="<?php echo $new->url_attached_file ?>">
                                        <i class="fa fa-download news__download"></i>
                                    </a>
                                <?php } ?>
                            </div>
                        </div><!-- end image wrapper -->
                        <div class="post-content overflow">
                            <h2 class="post-title bold"><a
                                    href="<?php echo base_url(); ?>news-details/view/<?php echo $new->id ?>">
                                    <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                        echo $new->en_title;
                                    } else {
                                        echo $new->vi_title;
                                    } ?>
                                </a></h2>
                            <h3 class="post-author"><a href="#">Posted by admin</a></h3>
                            <p class="post-meta">
                                <span class="post-meta-author">By <a href="#">Admin</a></span>
                                <span class="date">On <?php echo $new->created_date ?></span>
                            </p>
                            <p> <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                    echo $new->en_content;
                                } else {
                                    echo $new->vi_content;
                                } ?>
                            </p>
                            <a href="<?php echo base_url(); ?>news-details/view/<?php echo $new->id ?>"
                               class="read-more">View More</a>
                            <div class="post-bottom overflow">
                                </ul>
                            </div>
                        </div><!--/ end media body -->
                    </div><!--/ end media -->
                <?php } ?>
            </div>
            <div class="col-md-3 col-sm-5">
                <div class="sidebar blog-sidebar">
                    <div class="sidebar-item tag-cloud">
                        <h3>Tag Cloud</h3>
                        <ul class="nav nav-pills">
                            <li><a href="#">news</a></li>
                            <li><a href="#">finance</a></li>
                            <li><a href="#">policy</a></li>
                            <li><a href="#">product</a></li>
                            <li><a href="#">photo</a></li>
                        </ul>
                    </div>

                    <div class="sidebar-item popular">
                        <h3>Suggest products</h3>
                        <ul class="gallery">
                            <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="images/portfolio/popular2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="images/portfolio/popular3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="images/portfolio/popular4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="images/portfolio/popular5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/ Content row end -->
    </div><!--/ Container end -->
</section>
