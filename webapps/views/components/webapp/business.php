<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/14/16
 * Time: 11:41 PM
 */
?>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title wow fadeInDown"><?php echo $this->lang->line('BUSINESS'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->
<section id="video">
    <div class="container">
        <div class="row">
            <div class="page-header text-center wow fadeInUp" data-wow-delay="0.2s">
                <h1 class="title"><?php echo $this->lang->line('FINANCIAL_REPORT'); ?></h1>
                <div class="devider"></div>
            </div>
        </div>
        <div style="text-align: center;">
            <canvas id="skills" width="800px;" height="400px;">
            </canvas>
        </div>
        <div style="text-align: center; padding-bottom: 40px;">
            <i><?php echo $this->lang->line('CHART'); ?></i>
        </div>
    </div>
</section>