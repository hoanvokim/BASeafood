<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/4/16
 * Time: 12:43 AM
 */
?>
<section id="top-brand" class="top-brand">
    <div class="container">
        <div class="page-header text-center wow fadeinup" data-wow-delay="0.4s">
            <h1 class="title uppercase red-text"><?php echo $this->lang->line('BASEAFOOD'); ?></h1>
            <div class="devider"></div>
            <p class="subtitle"><?php echo $this->lang->line('FEATURES'); ?></p>
        </div>
        <div class="row">
            <div class="landing-tab clearfix">
                <ul class="nav nav-tabs nav-stacked col-md-4 col-sm-4">
                    <?php
                    $isInitial = false;
                    foreach ($features as $feature) { ?>
                        <li <?php if (!$isInitial) {
                            echo "class='active'";
                            $isInitial = true;
                        } ?>>
                            <a class="animated fadeIn" href="#tab_<?php echo $feature->id; ?>" data-toggle="tab">
                                <span class="tab-icon"><i class="<?php echo $feature->icon; ?>"></i></span>
                                <div class="tab-info">
                                    <h3><?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                            echo $feature->en_name;
                                        }
                                        else {
                                            echo $feature->vi_name;
                                        } ?></h3>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
                <div class="tab-content col-md-8 col-sm-8">
                    <?php $isInitial = false;
                    foreach ($features as $feature) { ?>
                        <div class="tab-pane animated fadeInRight <?php if (!$isInitial) {
                            echo "active";
                            $isInitial = true;
                        } ?>" id="tab_<?php echo $feature->id; ?>">
                            <h3>
                                <i class="<?php echo $feature->title_icon; ?>"></i> <span><?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                    echo $feature->en_title;
                                }
                                else {
                                    echo $feature->vi_title;
                                } ?></span></h3>
                            <p><?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                    echo $feature->en_content;
                                }
                                else {
                                    echo $feature->vi_content;
                                } ?></p>
                        </div>
                    <?php } ?>
                </div><!-- tab content -->
            </div><!-- Overview tab end -->
        </div><!--/ Content row end -->
    </div><!--/ Container end -->
</section>
