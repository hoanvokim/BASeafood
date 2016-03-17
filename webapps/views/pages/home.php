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
<?php $this->load->view('components/webapp/sliders'); ?>
<?php $this->load->view('components/webapp/features'); ?>
<?php $this->load->view('components/webapp/news'); ?>
<?php $this->load->view('components/webapp/clients'); ?>
<?php $this->load->view('components/webapp/partners'); ?>
<!--End content-->

<!--Begin include JS files-->
<?php $this->load->view('layouts/base/footer'); ?>
<?php $this->load->view('layouts/base/footer_js'); ?>
</body>
</html>