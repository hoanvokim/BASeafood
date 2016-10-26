<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/14/16
 * Time: 11:41 PM
 */
?>
<section id="video">
    <div class="container">
        <div class="row">
            <div class="page-header text-center wow fadeInUp" data-wow-delay="0.2s">
                <h1 class="title"><?php echo $this->lang->line('FINANCIAL_REPORT'); ?></h1>
                <div class="devider"></div>
            </div>
        </div>
        <div style="text-align: center; padding-bottom: 40px;" class="wow fadeInUp" data-wow-delay="0.5s">
            <div style="text-align: center; color: #e81a1a; font-weight: 800; font-size: 23px; font-style: italic" class="wow fadeInUp" data-wow-delay="0.3s">
                <p><?php echo $this->lang->line('BUSINESS-1'); ?></p>
            </div>
            <p><?php echo $this->lang->line('PIECHART'); ?></p>
            <!--            <ul data-pie-id="svg2" data-options='{"donut":"true"}'>-->
            <!--                <li data-value="70"><h5>JAPAN - <strong>(70%)</strong></h5></li>-->
            <!--                <li data-value="10"><h5>EU - <strong>(10%)</strong></h5></li>-->
            <!--                <li data-value="10"><h5>RUSSIA, UKRAINA, BELARUS - <strong>(10%)</strong></h5></li>-->
            <!--                <li data-value="10"><h5>OTHER (MIDDLE EAST, KOREA, CHINA...) - <strong>(10%)</strong></h5></li>-->
            <!--            </ul>-->
        </div>
        <div style="text-align: center;" class="wow fadeInUp" data-wow-delay="0.7s">
            <div class="col-md-5 col-xs-12" style="padding-top: 150px;">
                <ul data-pie-id="svg2" data-options='{"donut":"true"}'>
                    <li data-value="70"><h5>Japan - <strong>(70%)</strong></h5></li>
                    <li data-value="15"><h5>EU, Australia - <strong>(15%)</strong></h5></li>
                    <li data-value="5"><h5>Korea - <strong>(5%)</strong></h5></li>
                    <li data-value="10"><h5>Others (including: Middle East, China, Ukraine, Philipine,…) - <strong>(10%)</strong></h5></li>
                </ul>
            </div>
            <div class="col-md-7 col-xs-12">
                <div id="svg2" style="width: 400px; text-align: center;"></div>
            </div>
            <p class="wow fadeInUp" data-wow-delay="1s"><?php echo $this->lang->line('PIECHART-TEXT'); ?></p>
        </div>
        <div class="devider wow fadeInUp" data-wow-delay="1s"></div>
        <div class="wow fadeInUp" data-wow-delay="1.3s" style="text-align: center;">
            <p style="color: #e81a1a;padding-top: 40px; font-weight: 800; font-size: 23px; font-style: italic"><?php echo $this->lang->line('BUSINESS-2'); ?></p>
            <p><?php echo $this->lang->line('BUSINESS-2-TEXT'); ?></p>
        </div>
        <div style="text-align: center; padding-top: 50px;" class="wow fadeInUp" data-wow-delay="1.3s">
            <canvas id="skills" width="800px;" height="400px;">
            </canvas>
        </div>
        <div style="text-align: center; padding-bottom: 40px;" class="wow fadeInUp" data-wow-delay="1.3s">
            <h3><strong><?php echo $this->lang->line('CHART'); ?></strong></h3>
        </div>
        <div style="text-align: center; padding-bottom: 40px; color: red; font-weight: 800; font-size: 13px;" class="wow fadeInUp" data-wow-delay="1.3s">
            <p><?php echo $this->lang->line('CHART_SALES'); ?></p>
        </div>

</section>