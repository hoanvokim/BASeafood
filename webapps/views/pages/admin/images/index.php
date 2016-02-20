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
                            <i class="ion ion-clipboard"></i>

                            <h3 class="box-title">Images List</h3>
                        </div>
                        <div class="box-body table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($images as $image): ?>
                                    <tr>
                                        <td><img src="<?php echo $image['url']; ?>" class="img-responsive img-thumbnail" style="width: 200px;height: 200px;"/></td>
                                        <td><?php echo $image['name'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url() . "upload-manager/delete/" . $image['id']; ?>"
                                               class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="box-footer clearfix no-border">
                            <?php echo anchor('upload-image', '<i class="fa fa-plus"></i>Add new', 'class="btn btn-default pull-right"') ?>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </aside>
</div>
<?php $this->load->view('layouts/admin/footer'); ?>
<script>

</script>
</body>
</html>