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

                            <h3 class="box-title">Sliders</h3>
                            <div style="margin: 10px;">
                                <?php echo anchor('create-sliders', '<i class="fa fa-plus"></i> Add new', 'class="btn btn-default pull-right"') ?>
                            </div>
                        </div>
                        <div class="box-body table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Vi Content</th>
                                    <th>En Content</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($sliders as $slider): ?>
                                    <tr>
                                        <td><img src="<?php echo $slider->img_src; ?>"
                                                 class="img-responsive img-thumbnail"
                                                 style="width: 150px;height: 150px;"/></td>
                                        <td><?php echo $slider->vi_content ?></td>
                                        <td><?php echo $slider->en_content ?></td>
                                        <td>
                                            <a href="<?php echo base_url() . "sliders-manager/update/" . $slider->id; ?>"
                                               class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="<?php echo base_url() . "sliders-manager/delete/" . $slider->id; ?>"
                                               class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="box-footer clearfix no-border">
                            <?php echo anchor('create-sliders', '<i class="fa fa-plus"></i> Add new', 'class="btn btn-default pull-right"') ?>
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