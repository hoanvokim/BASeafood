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
<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title"><?php echo $title ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
if (strcasecmp($title, "Photos") == 0 || strcasecmp($title, "Photos offices") == 0) {
    $this->load->view('components/webapp/photos_offices');
}
if (strcasecmp($title, "Photos") == 0 || strcasecmp($title, "Photos factories") == 0) {
    $this->load->view('components/webapp/photos_factory');
}
?>
<!--End content-->

<!--Begin include JS files-->
<?php $this->load->view('layouts/base/footer'); ?>
<?php $this->load->view('layouts/base/footer_js'); ?>
</body>
</html>
