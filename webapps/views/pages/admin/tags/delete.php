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
                <section class="col-lg-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Delete tags</h3>
                        </div>
                        <div class="box-body">
                            <p class="text-danger"> Would you like to delete the tags name: <?php echo $tags['name']; ?></p>
                        </div>

                        <div class="box-footer clearfix no-border">
                            <a href="<?php echo base_url() . "delete-tags-submit/" . $tags['id']; ?>" class=" btn btn-danger">
                                <i class="fa fa-trash-o"></i> Delete
                            </a>
                            <a href="<?php echo site_url('tags-manager'); ?>" type="submit" class="btn">Cancel</a>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </aside>
</div>
<?php $this->load->view('layouts/admin/footer'); ?>
</body>
</html>