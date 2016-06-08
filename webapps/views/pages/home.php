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
</div>

<!--End content-->

<!--Begin include JS files-->
<?php $this->load->view('layouts/base/footer_home'); ?>
<?php $this->load->view('layouts/base/footer_js'); ?>
</body>
</html>