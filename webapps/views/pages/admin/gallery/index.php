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
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab">OFFICES</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    <div class="box-body table-responsive">
                                        <table id="example1" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($offices as $image): ?>
                                                <tr>
                                                    <td><img src="<?php echo $image['url_image']; ?>" class="img-responsive img-thumbnail" style="width: 200px;height: 200px;"/></td>
                                                    <td><?php echo $image['en_name'] ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() . "gallery-manager/update/" . $image['id']; ?>"
                                                           class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                                        <a href="<?php echo base_url() . "gallery-manager/delete/" . $image['id']; ?>"
                                                           class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                            </tbody>
                                            <tfoot><?php echo anchor('create-gallery/offices', '<i class="fa fa-plus"></i> Add new', 'class="btn btn-default pull-right"') ?></tfoot>
                                        </table>
                                    </div>
                                </div><!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </div><!-- nav-tabs-custom -->


                    </div>
                </section>
            </div>
        </section>
    </aside>
</div>
<?php $this->load->view('layouts/admin/footer'); ?>
</body>
</html>