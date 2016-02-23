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

                            <h3 class="box-title">Products group by category</h3>
                        </div>
                        <div class="box-body table-responsive">
                            <table id="example1"  class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Products</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($categories as $category): ?>
                                    <tr>
                                        <td><?php echo $category['name'] ?></td>
                                        <td>
                                            <table id="example2" class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>En-Name</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($category['products'] as $product): ?>
                                                    <tr>
                                                        <td><img src="<?php echo $product['url']; ?>"
                                                                 class="img-responsive img-thumbnail"
                                                                 style="width: 150px;height: 150px;"/></td>
                                                        <td><?php echo $product['name'] ?></td>
                                                        <td><?php echo $product['en_name'] ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url() . "product-manager/update/" . $product['id']; ?>"
                                                               class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                                            <a href="<?php echo base_url() . "product-manager/delete/" . $product['id']; ?>"
                                                               class="btn btn-danger"><i class="fa fa-trash-o"></i>
                                                                Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url() . "create-product/" . $category['id']; ?>"
                                               class="btn btn-default"><i class="fa fa-plus"></i> Add product</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>

                        </div>

                        <div class="box-footer clearfix no-border">
                            <?php echo anchor('create-category', '<i class="fa fa-plus"></i>Add new category', 'class="btn btn-default pull-right"') ?>
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