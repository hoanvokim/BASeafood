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

                            <h3 class="box-title">Category List</h3>
                        </div>
                        <div class="box-body table-responsive">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Parent</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($categories as $category_item): ?>
                                    <tr>
                                        <td><?php echo $category_item['id'] ?></td>
                                        <td><?php echo $category_item['name'] ?></td>
                                        <td><?php echo $category_item['fk_parent'] ?></td>
                                        <td>
                                            <?php echo anchor('category-manager/edit/' . $category_item['id'], '<i class="fa fa-edit"></i> Edit', 'class="btn btn-info"') ?>
                                            | <?php echo anchor('category-manager/delete/' . $category_item['id'], '<i class="fa fa-trash-o"></i> Delete', 'class="btn btn-danger"') ?>
                                            <a data-toggle="modal" href="#delete_category_confirm_dialog"> <i class="fa fa-trash-o"></i> Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="box-footer clearfix no-border">
                            <a data-toggle="modal" href="#create_category_dialog" class="btn btn-default pull-right"> <i class="fa fa-plus"></i> Add item</a>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </aside>
</div>
<?php $this->load->view('pages/admin/category/delete_confirm_dialog'); ?>
<?php $this->load->view('pages/admin/category/create_dialog'); ?>
<?php $this->load->view('layouts/admin/footer'); ?>
</body>
</html>