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
                <section class="col-lg-6">
                    <div class="box box-primary">
                        <div class="box-header">
                            <?php echo validation_errors(); ?>
                        </div>
                        <?php echo form_open('create-category-submit'); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Category name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Category name" autofocus>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">create</button>
                            <a href="<?php echo site_url('category-manager'); ?>" type="submit" class="btn pull-right">Cancel</a>
                        </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </aside>

</div>
<?php $this->load->view('layouts/admin/footer'); ?>
</body>
</html>