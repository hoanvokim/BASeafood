<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/28/16
 * Time: 11:10 PM
 */
?>

<section id="result">
    <div class="container">
        <div class="row">
            <div class="page-header text-center">
                <h2 class="title wow fadeInDown" data-wow-delay="0.4s"><?php echo $this->lang->line('SEARCH_RESULT'); ?>
                </h2>
                <div class="devider wow fadeInDown" data-wow-delay="0.6s"></div>
            </div>
        </div><!--/ Title row end -->

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#product_result"><?php echo $this->lang->line('MENU_PRODUCT'); ?></a></li>
            <li><a data-toggle="tab" href="#news_result"><?php echo $this->lang->line('MENU_NEWS'); ?></a></li>
        </ul>

        <div class="tab-content">
            <div id="product_result" class="tab-pane fade in active">

                <div class="row wow fadeInDown" data-wow-delay="1s">
                    <?php foreach ($products as $product) { ?>
                        <div class="col-sm-12 col-md-12  padding-bottom">
                            <div class="single-blog single-column">
                                <div class="col-sm-12 col-md-6">
                                    <div class="post-thumb">
                                        <a href="#"><img
                                                src="<?php echo base_url(); ?>webresources/images/products/<?php echo $product['url']; ?>"
                                                class="img-responsive" alt=""></a>
                                        <div class="post-overlay">
                            <span class="uppercase"><a href="#">14 <br>
                                    <small>Feb</small>
                                </a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="post-content overflow">
                                        <h2 class="post-title bold"><a href="blogdetails.html">
                                                <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                                    $limited_word = word_limiter($product['en_name'], 4);
                                                    echo $limited_word;
                                                } else {
                                                    $limited_word = word_limiter($product['vi_name'], 4);
                                                    echo $limited_word;
                                                } ?>

                                            </a></h2>
                                        <h3 class="post-author"><a href="#">Posted by admin</a></h3>
                                        <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                            echo "Name: " . $product['en_name'];
                                            echo "<br/>";
                                            echo "Size: " . $product['size'];
                                            echo "<br/>";
                                            echo "Packing: " . $product['packing'];
                                            echo "<br/>";
                                        } else {
                                            echo "Tên: " . $product['vi_name'];
                                            echo "<br/>";
                                            echo "Cỡ: " . $product['size'];
                                            echo "<br/>";
                                            echo "Đóng gói: " . $product['packing'];
                                            echo "<br/>";
                                        } ?>
                                        <br/>
                                        <button type="button"
                                                class="btn btn-sm btn-success"><?php echo $this->lang->line('MENU_PRODUCT'); ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
            <div id="news_result" class="tab-pane fade">

                <div class="row wow fadeInDown" data-wow-delay="2s">
                    <?php foreach($news as $new){ ?>
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay=".1s">
                            <div class="media recent-post">
                                <div class="post-img-wrapper">
                                    <div class="post-img-overlay">
                                        <img src="<?php
                                        if (strpos($new['url_attached_file'], 'pdf') !== false) {
                                            echo base_url().'webresources/images/files/pdf.png';
                                        } else if (strpos($new['url_attached_file'], 'jpg') !== false) {
                                            echo $new['url_attached_file'];
                                        } else {
                                            echo base_url().'webresources/images/files/news.png';
                                        }
                                        ?>" alt="blog"/>
                                        <?php if (!$this->utilities->IsNullOrEmptyString($new['url_attached_file'])) { ?>
                                            <a href="<?php echo $new['url_attached_file'] ?>">
                                                <i class="fa fa-download news__download"></i>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div><!-- end image wrapper -->
                                <div class="media-body post-body">
                                    <h3><a class="news__link"
                                           href="<?php echo base_url(); ?>/news-details/view/<?php echo $new['id'] ?>">
                                            <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                                echo $new['en_title'];
                                            } else {
                                                echo $new['vi_title'];
                                            } ?>
                                        </a></h3>
                                    <p class="post-meta">
                                        <span class="post-meta-author">By <a href="#">Admin</a></span>
                                        <span class="date">On <?php echo $new['created_date'] ?></span>
                                    </p>
                                    <div class="post-excerpt">
                                        <p> <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                                echo $new['en_content'];
                                            } else {
                                                echo $new['vi_content'];
                                            } ?></p>
                                    </div>
                                </div><!--/ end media body -->
                            </div><!--/ end media -->
                        </div><!--/ end col-sm-4 -->
                    <?php } ?>
                </div>

            </div>
        </div>





    </div> <!--end of container-->
</section>
<!--/#blog-->