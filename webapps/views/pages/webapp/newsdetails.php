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

<!--Begin include JS files-->
<?php $this->load->view('layouts/base/footer'); ?>
<?php $this->load->view('layouts/base/footer_js'); ?>
</body>
</html>
