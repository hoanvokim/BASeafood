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
<?php $this->load->view('components/home/features'); ?>
<?php $this->load->view('components/home/sliders'); ?>
<?php $this->load->view('components/home/news'); ?>
<?php $this->load->view('components/home/clients'); ?>
<?php $this->load->view('components/home/partners'); ?>
<!--End content-->

<!--Begin include JS files-->
<?php $this->load->view('layouts/base/footer'); ?>
<?php $this->load->view('layouts/base/footer_js'); ?>
</body>
</html>