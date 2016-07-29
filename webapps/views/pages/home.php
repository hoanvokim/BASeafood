<!DOCTYPE html>
<html lang="en">
<head>
    <!--Begin include CSS files-->
    <?php $this->load->view('layouts/base/header'); ?>
</head>
<body>
<!--Begin load menu-->
<?php $this->load->view('layouts/base/menu'); ?>

<!--Start content-->

<div class="container-home">
    <div class="row">
        <div class="col-sm-12 col-md-12 title-bg text-center"/>
        <img class="wow fadeIn animated"
             src="<?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                 echo base_url() . "webresources/images/title-bg-en.png";
             } else {
                 echo base_url() . "webresources/images/title-bg-vi.png";
             } ?>"
             style="width: 50%;visibility: visible; animation-name: fadeIn;">
    </div>
</div>

<div class="row" style="margin-top: 60px;">
    <div class="col-sm-9 col-md-9">
        <?php $this->load->view('components/webapp/sliders'); ?>
    </div>
    <div class="col-sm-2 col-md-2">
        <?php $this->load->view('components/webapp/partners'); ?>
    </div>
    <div class="col-sm-1 col-md-1">
    </div>
</div>

<section id="about" class="module blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="row">
                    <div class="col-sm-4 text-right">
                        <i class="wow fadeInRight animated" style="visibility: visible; animation-name: fadeIn;"><img
                                src="<?php echo base_url(); ?>webresources/images/healthy-life.png"
                                style="width: 200px;"> </i>
                    </div>
                    <div class="col-sm-7 col-sm-offset-1">
                        <i class="wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                            <h2 class="h4" style="color: #fff;"><?php echo $this->lang->line('HOW-TO'); ?></h2>
                            <p class="color-secondary" style="color: #fff;">
                                <?php echo $this->lang->line('HOW-TO-1'); ?>
                            </p>
                        </i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="sub">
    <div class="wrapper">
        <ul id="subscribe-post">
            <li><h4>  <?php echo $this->lang->line('INDEX-SLOGAN'); ?></h4>
                <p class="blkfont20"></p></li>
            <li>
                <a href="mailto:tuongf34@gmail.com?subject=I would like to receive more updates on Baseafood."
                   class="input-submit">  <?php echo $this->lang->line('INDEX-SLOGAN-BTN'); ?></a>
            </li>
        </ul>
    </div>
</div>

<div class="contact-us text-center" style="margin-top: 40px;">
    <div class="col-sm-12 text-center">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <span class="uppercase" style="font-size: 25px; font-weight: 300; color: #0b598d">
                    <?php echo $this->lang->line('PERSONAL_CONTACT'); ?>
                </span>
                <span class="line"></span>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4 no-padding">
                <div class="contact-information">
                    <a href="mailto:tuongf34@gmail.com"><img
                            src="<?php echo base_url(); ?>/webresources/images/tuong.jpg"
                            class="img-responsive inline" alt="" style="padding: 25px; max-width: 300px;"></a>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 no-padding">
                <div class="contact-information">
                    <a href="mailto:phuongf34@gmail.com"><img
                            src="<?php echo base_url(); ?>/webresources/images/phuong.jpg"
                            class="img-responsive inline" alt="" style="padding: 25px; max-width: 300px;"></a>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 no-padding">
                <div class="contact-information">
                    <a href="mailto:huyenf34@gmail.com"> <img
                            src="<?php echo base_url(); ?>/webresources/images/huyen.jpg"
                            class="img-responsive inline" alt="" style="padding: 25px; max-width: 300px;"></a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!--End content-->

<!--Begin include JS files-->
<?php $this->load->view('layouts/base/footer_home'); ?>
<?php $this->load->view('layouts/base/footer_js'); ?>
</body>
</html>