<!DOCTYPE html>
<!-- Template by quackit.com -->
<html>
<head>
    <?php $this->load->view('pages/usermanual/header'); ?>
</head>

<body>

<main>
    <div class="innertube">
        <h1>Thêm Nhóm sản phẩm con mới [Category]</h1>
        <h2>Bước 1</h2>
        <img class="usermanual--half" src="<?php echo base_url(); ?>/webresources/images/usermanual/addchild.png" alt="logo" >
        <h4>[1] Tên tiếng anh của Category cha (bạn sẽ phải nhập Category con của nó)</h4>
        <h4>[2] Nhập tên tiếng anh của Category</h4>
        <h4>[3] Nhập tên tiếng việt của Category</h4>
        <h4>[4] Nút "Update" là cập nhật hay thêm mới một Category vừa thao tác.</h4>
        <h4>[5] Nút "Cancel" là huỷ thông tin vừa nhập</h4>
        <hr/>
    </div>
</main>

<?php $this->load->view('pages/usermanual/menu'); ?>
</body>
</html>