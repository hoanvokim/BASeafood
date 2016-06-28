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
        <div class="col-sm-4 col-md-4">
            <?php $this->load->view('components/webapp/sliders_2'); ?>
        </div>
        <div class="col-sm-6 col-md-6">
            <?php $this->load->view('components/webapp/sliders'); ?>
        </div>
        <div class="col-sm-2 col-md-2">
            <?php $this->load->view('components/webapp/partners'); ?>
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
                                class="img-responsive inline" alt="" style="padding: 20px; max-width: 300px;"></a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 no-padding">
                    <div class="contact-information">
                        <a href="mailto:phuongf34@gmail.com"><img
                                src="<?php echo base_url(); ?>/webresources/images/phuong.jpg"
                                class="img-responsive inline" alt="" style="padding: 20px; max-width: 300px;"></a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 no-padding">
                    <div class="contact-information">
                        <a href="mailto:huyenf34@gmail.com"> <img
                                src="<?php echo base_url(); ?>/webresources/images/huyen.jpg"
                                class="img-responsive inline" alt="" style="padding: 20px; max-width: 300px;"></a>
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