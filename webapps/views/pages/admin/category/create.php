<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/admin/header'); ?>
</head>
<body class="skin-blue">
<?php $this->load->view('layouts/admin/top_header'); ?>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <?php $this->load->view('layouts/admin/menu_sidebar'); ?>
    <aside class="right-side">
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <section class="col-lg-6">
                    <div class="box box-primary">
                        <div class="box-header">
                            <?php echo validation_errors(); ?>
                        </div>
                        <?php  echo form_open('create-category-submit'); ?>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Category name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Category name" autofocus>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">create</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </aside>

</div>
<?php $this->load->view('layouts/admin/footer_js'); ?>
</body>
</html>