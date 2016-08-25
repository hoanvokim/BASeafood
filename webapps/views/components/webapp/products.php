<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/5/16
 * Time: 8:48 PM
 */
?>
<!-- Testimonials start -->
<section class="module bg-dark-60 pb-0" data-background="assets/images/section-25.jpg">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="module-title-bg font-serif text-center">Vegetarian Quotes</h2>
            </div>
        </div>
    </div>

    <div class="testimonials-slider pb-140">
        <ul class="slides">

            <!-- Slide 1 start -->
            <li>
                <div class="container">

                    <div class="row">

                        <div class="col-sm-12">
                            <div class="module-icon">
                                <span class="icon-quote"></span>
                            </div>
                        </div>

                    </div><!-- .row -->

                    <div class="row">

                        <div class="col-sm-8 col-sm-offset-2">
                            <blockquote class="testimonial-text">"If you don’t like seeing pictures of violence
                                                                 towards animals being posted, you need to help stop the violence, not the pictures."
                            </blockquote>
                        </div>

                    </div><!-- .row -->

                    <div class="row">

                        <div class="col-sm-4 col-sm-offset-4">
                            <div class="testimonial-author">
                                <div class="testimonial-caption">
                                    <div class="testimonial-title font-serif-i">Jonny Depp - <span
                                            class="testimonial-descr">The Animals</span></div>
                                </div>
                            </div>
                        </div>

                    </div><!-- .row -->

                </div><!-- .container -->
            </li>
            <!-- Slide 1 end -->

            <!-- Slide 2 start -->
            <li>
                <div class="container">

                    <div class="row">

                        <div class="col-sm-12">
                            <div class="module-icon">
                                <span class="icon-quote"></span>
                            </div>
                        </div>

                    </div><!-- .row -->

                    <div class="row">

                        <div class="col-sm-8 col-sm-offset-2">
                            <blockquote class="testimonial-text">"Some people think the plant-based, whole-foods
                                                                 diet is extreme. Half a million people a year will have their chests opened up and a
                                                                 vein taken from their leg and sewn onto their coronary artery. Some people would
                                                                 call that extreme."
                            </blockquote>
                        </div>

                    </div><!-- .row -->

                    <div class="row">

                        <div class="col-sm-4 col-sm-offset-4">
                            <div class="testimonial-author">
                                <div class="testimonial-caption">
                                    <div class="testimonial-title font-serif-i">Dr. Caldwell Esselstyn - <span
                                            class="testimonial-descr">Your Health</span></div>
                                </div>
                            </div>
                        </div>

                    </div><!-- .row -->

                </div><!-- .container -->
            </li>
            <!-- Slide 2 end -->

            <!-- Slide 3 start -->
            <li>
                <div class="container">

                    <div class="row">

                        <div class="col-sm-12">
                            <div class="module-icon">
                                <span class="icon-quote"></span>
                            </div>
                        </div>

                    </div><!-- .row -->

                    <div class="row">

                        <div class="col-sm-8 col-sm-offset-2">
                            <blockquote class="testimonial-text">"After all the information I gathered about the
                                                                 mistreatment of animals, I couldn't continue to eat meat. The more I was aware of,
                                                                 the harder and harder it was to do."
                            </blockquote>
                        </div>

                    </div><!-- .row -->

                    <div class="row">

                        <div class="col-sm-4 col-sm-offset-4">
                            <div class="testimonial-author">
                                <div class="testimonial-caption">
                                    <div class="testimonial-title font-serif-i">Liam Hemsworth
                                                                                - <span class="testimonial-descr">The Animals</span></div>
                                </div>
                            </div>
                        </div>

                    </div><!-- .row -->

                </div><!-- .container -->
            </li>
            <!-- Slide 3 end -->

        </ul>
    </div><!-- .testimonials-slider -->
</section>
<!-- Testimonials end -->

<section id="product">
    <div id="container">
        <div class="row">
            <!-- Content -->
            <div class="col-md-3 col-sm-4 padding-top padding-center">
                <?php $this->load->view('components/webapp/category_sidebar'); ?>
            </div>
            <div class="col-md-9 col-sm-8 padding-top">
                <?php if ($total > 1) { ?>
                    <h4 id="result-product" class="fa text-center fa-search result-product-blue">
                        <?php echo $this->lang->line('TOTAL_ROW') . $total . $this->lang->line('TOTAL_PRODUCTS'); ?>
                    </h4>
                <?php } ?>
                <?php if ($total == 1) { ?>
                    <h4 id="result-product" class="fa text-center fa-search result-product-blue">
                        <?php echo $this->lang->line('TOTAL_ROW') . $total . $this->lang->line('TOTAL_PRODUCT'); ?>
                    </h4>
                <?php } ?>
                <?php if ($total == 0) { ?>
                    <h4 id="result-product" class="fa text-center fa-close red result-product-red">
                        <?php echo $this->lang->line('NO_PRODUCTS'); ?>
                    </h4>
                <?php } ?>
                <div class="docs-galley">
                    <ul class="docs-pictures clearfix">
                        <?php if (!empty($products)) {
                            foreach ($products as $product) { ?>
                                <li>
                                    <img
                                        data-original="<?php echo base_url(); ?>assets/upload/images/products/<?php echo $product->url; ?>"
                                        src="<?php echo base_url(); ?>assets/upload/images/products/thumb/<?php echo $product->url; ?>"
                                        alt="
                                     <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                            echo "Name: " . $product->en_name;
                                            echo "<br/>";
                                            echo "Size: " . $product->size;
                                            echo "<br/>";
                                            echo "Packing: " . $product->packing;
                                            echo "<br/>";
                                        }
                                        else {
                                            echo "Tên: " . $product->vi_name;
                                            echo "<br/>";
                                            echo "Cỡ: " . $product->size;
                                            echo "<br/>";
                                            echo "Đóng gói: " . $product->packing;
                                            echo "<br/>";
                                        } ?>
                                     ">
                                <span>
                                    <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                        $limited_word = word_limiter($product->en_name, 4);
                                        echo $limited_word;
                                    }
                                    else {
                                        $limited_word = word_limiter($product->vi_name, 4);
                                        echo $limited_word;
                                    } ?></span>
                                </li>
                            <?php }
                        }
                        else { ?>

                        <?php } ?>
                    </ul>
                </div>
                <div class="product-pagination">
                    <?php echo $links; ?>
                </div>
            </div>
        </div>
    </div>
</section>
