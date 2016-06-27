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
    <div style="width:24%;float:left;">
        <?php $this->load->view('components/webapp/feature_home'); ?>
    </div>
    <div style="width:55%;float:left;">
        <?php $this->load->view('components/webapp/sliders'); ?>
    </div>
    <div style="width:19%;float:right;margin-top:30px;">
        <?php $this->load->view('components/webapp/partners'); ?>
    </div>

    <div class="contact-us text-center" style="margin-top: 40px;">
        <div class="col-sm-12 text-center">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <img
                        src="<?php echo base_url() . 'webresources/images/contact-us.png'; ?>" style="height: 84px;"/>
                <span class="uppercase" style="font-size: 30px; font-weight: 100; color: #0b598d">
                    <?php echo $this->lang->line('PERSONAL_CONTACT'); ?>
                </span>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <a href="mailto:tuongf34@gmail.com"><img
                            src="<?php echo base_url(); ?>/webresources/images/tuong.jpg"
                            class="img-responsive inline" alt="" style="padding: 20px; max-width: 300px;"></a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="mailto:phuongf34@gmail.com"><img
                            src="<?php echo base_url(); ?>/webresources/images/phuong.jpg"
                            class="img-responsive inline" alt="" style="padding: 20px; max-width: 300px;"></a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="mailto:huyenf34@gmail.com"> <img
                            src="<?php echo base_url(); ?>/webresources/images/huyen.jpg"
                            class="img-responsive inline" alt="" style="padding: 20px; max-width: 300px;"></a>
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