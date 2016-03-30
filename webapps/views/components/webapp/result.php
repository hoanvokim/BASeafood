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
        <hr/>
        <div class="row wow fadeInDown" data-wow-delay="2s">
            <?php foreach ($news as $new) { ?>
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
</section>
<!--/#blog-->