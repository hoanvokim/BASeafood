<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12" style="padding: 20px 30px 20px 30px;">
                        <h1 class="title">
                            <?php echo $this->lang->line('MENU_PRODUCT'); ?>
                            <p>
                                <?php echo $subTitle; ?>
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
    <div class="container">

        <?php
        foreach ($tree_sub_menu as $sub_menu) {
            ?>

            <div class="row" style="margin-left:0;margin-right:0;">

                <div class="col-md-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 bg-<?php echo $sub_menu['color_num']; ?>  sub-menu"><a
                                style="display:block;"
                                href="<?php echo site_url('product/findByCategories/') . '/' . $sub_menu['id']; ?>">
                                <img src="<?php echo base_url() . 'webresources/images/' . $sub_menu['icon-col'] ?>"/>
                                 <span>
                                 <?php
                                 if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                     echo $sub_menu['en_name'];
                                 } else {
                                     echo $sub_menu['vi_name'];
                                 }
                                 ?></span></a></div>
                    </div>
                    <div class="row">
                        <?php
                        $n = count($sub_menu['sub_menu']);
                        if ($n > 0) {
                            $remain = 12 % $n;
                            $col_number = (12 - $remain) / $n;
                            $col_last_number = $remain + $col_number;
                            ?>
                            <?php for ($i = 0; $i < $n - 1; $i++) {
                                ?>
                                <div
                                    class="col-md-<?php echo $col_number ?> bg-<?php echo $sub_menu['sub_menu'][$i]['color_num']; ?> sub-menu">
                                    <a style="display:block;"
                                       href="<?php echo site_url('product/findByCategories/') . '/' . $sub_menu['sub_menu'][$i]['id']; ?>">
                                        <img src="<?php echo base_url() . 'webresources/images/' . $sub_menu['sub_menu'][$i]['icon-col']; ?>"/>
                                 <span>
                                      <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                          echo $sub_menu['sub_menu'][$i]['en_name'];
                                      } else {
                                          echo $sub_menu['sub_menu'][$i]['vi_name'];
                                      } ?>
                                  </span></a></div>
                            <?php } ?>

                            <div
                                class="col-md-<?php echo $col_last_number ?> bg-<?php echo $sub_menu['sub_menu'][$n - 1]['color_num']; ?> sub-menu">
                                <a style="display:block;"
                                   href="<?php echo site_url('product/findByCategories/') . '/' . $sub_menu['sub_menu'][$n - 1]['id']; ?>">
                                    <img
                                        src="<?php echo base_url() . 'webresources/images/' . $sub_menu['sub_menu'][$n - 1]['icon-col']; ?>"/>
                                 <span>
                                    <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                        echo $sub_menu['sub_menu'][$n - 1]['en_name'];
                                    } else {
                                        echo $sub_menu['sub_menu'][$n - 1]['vi_name'];
                                    } ?></span></a></div>
                        <?php } ?>
                    </div>
                </div>

            </div>

        <?php } ?>

        <!--<div class="row">

            <div class="col-md-9 col-xs-12" style="height: 130px; padding-right: 0px !important;">
                <div class="col-md-12 col-xs-12 bg-frozen" style="height: 100px;">
                    <span class="text-product">Frozen</span>
                </div>

                <div class="col-md-3 col-xs-12 bg-fish" style="height: 60px;">
                    <span class="text-product text-product--fish">Fish</span>
                </div>
                <div class="col-md-3 col-xs-12 bg-shellfish" style="height: 60px;">
                    <span class="text-product text-product--shellfish">Shellfish</span>
                </div>
                <div class="col-md-3 col-xs-12 bg-molluscs" style="height: 60px;">
                    <span class="text-product text-product--molluscs">Molluscs</span>
                </div>
                <div class="col-md-3 col-xs-12 bg-others" style="height: 60px;">
                    <span class="text-product  text-product--others">Others</span>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 bg-dry" style="height: 160px;">
                <span class="text-product text-product--dry">Dry</span>
            </div>
        </div> -->

        <div class="row">
            <div class="col-md-12 col-sm-12 padding-top">
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
                                        data-original="<?php echo base_url(); ?>assets/upload/images/products/<?php echo $product['url']; ?>"
                                        src="<?php echo base_url(); ?>assets/upload/images/products/thumb/<?php echo $product['url']; ?>"
                                        alt="
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
                                     ">

                                    <?php
                                    $color_cat_num = getColorFromTreeSubMenu($tree_sub_menu, $product['fk_category']);
                                    if ($color_cat_num > -1) {
                                        ?>
                                        <span class="badge-fish bg-<?php echo $color_cat_num; ?>">
                                                 <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                                     echo $product['cat_en_name'];
                                                 } else {
                                                     echo $product['cat_vi_name'];
                                                 }
                                                 ?>
                                            </span>
                                    <?php } ?>

                                    <span>
                                    &nbsp;
                                        <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                            $limited_word = word_limiter($product['en_name'], 10);
                                            echo $limited_word;
                                        } else {
                                            $limited_word = word_limiter($product['vi_name'], 10);
                                            echo $limited_word;
                                        } ?></span>
                                </li>
                            <?php }
                        } else { ?>

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
