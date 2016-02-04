<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/admin/header'); ?>
</head>
<body class="skin-blue">
<?php $this->load->view('layouts/admin/nav'); ?>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <?php $this->load->view('layouts/admin/menu'); ?>
    <aside class="right-side">
        <section class="content">
            <div class="row">
                <?php $this->load->view('pages/home'); ?>
            </div>
        </section>
    </aside>
</div>
<?php $this->load->view('layouts/admin/footer'); ?>
</body>
</html>