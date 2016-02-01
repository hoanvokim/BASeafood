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
                            <i class="ion ion-clipboard"></i>

                            <h3 class="box-title">Category List</h3>
                        </div>
                        <div class="box-body table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
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
                                        <td><a href="category-manager/edit/<?php echo $category_item['id'] ?>"><i class="fa fa-edit"></i></a> |
                                            <a href="category-manager/delete/<?php echo $category_item['id'] ?>"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                            <?php echo $this->pagination->create_links();?>
                        </div>

                        <div class="box-footer clearfix no-border">
                            <a href="create-category" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</a>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </aside>

</div>
<?php $this->load->view('layouts/admin/footer_js'); ?>
</body>
</html>