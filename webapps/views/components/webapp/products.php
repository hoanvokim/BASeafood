<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/5/16
 * Time: 8:48 PM
 */
?>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12" style="padding: 20px 30px 20px 30px;">
                        <h1 class="title">
                            <?php echo $this->lang->line('MENU_PRODUCT'); ?>
                            <p>
                                <?php if (strcasecmp($title, "Products") != 0) {
                                    if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                        echo $category["en_name"];
                                    }
                                    else if (strcasecmp($_SESSION["activeLanguage"], "vi") == 0) {
                                        echo $category["vi_name"];
                                    }
                                } ?>
                            </p>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->

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
                                        data-original="<?php echo base_url(); ?>webresources/images/products/<?php echo $product->url; ?>"
                                        src="<?php echo base_url(); ?>webresources/images/products/thumb/<?php echo $product->url; ?>"
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
