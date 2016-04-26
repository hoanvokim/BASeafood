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
            <h3><strong><?php echo $this->lang->line('CHART'); ?></strong></h3>
        </div>
        <div style="text-align: left; padding-bottom: 40px;">
            <p><?php echo $this->lang->line('CHART_SALES'); ?></p>
        </div>
        <hr/>
        <div style="text-align: left; padding-bottom: 40px;">
            <p><?php echo $this->lang->line('PIECHART'); ?></p>
        </div>
        <div style="text-align: center;" class="wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-md-5 col-xs-12" style="padding-top: 150px;">
                <ul data-pie-id="svg2" data-options='{"donut":"true"}'>
                    <li data-value="70"><h5>JAPAN - <strong>(70%)</strong></h5></li>
                    <li data-value="10"><h5>EU - <strong>(10%)</strong></h5></li>
                    <li data-value="10"><h5>RUSSIA, UKRAINA, BELARUS - <strong>(10%)</strong></h5></li>
                    <li data-value="10"><h5>OTHER (MIDDLE EAST, KOREA, CHINA...) - <strong>(10%)</strong></h5></li>
                </ul>
            </div>
            <div class="col-md-7 col-xs-12">
                <div id="svg2" style="width: 400px; text-align: center;"></div>
            </div>

        </div>
</section>