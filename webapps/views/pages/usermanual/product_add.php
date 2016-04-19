<!DOCTYPE html>
<!-- Template by quackit.com -->
<html>
<head>
    <?php $this->load->view('pages/usermanual/header'); ?>
</head>

<body>

<main>
    <div class="innertube">
        <h1>Cập nhật hay Thêm Sản Phẩm mới</h1>
        <h2>Bước 1</h2>
        <img class="usermanual" src="<?php echo base_url(); ?>/webresources/images/usermanual/addproduct1.png" alt="logo" >
        <h4>[1] Chọn vào mục "Product Management"</h4>
        <h4>[2] Đây là mục Category, nơi bạn muốn thêm một sản phẩm vào mục nào</h4>
        <h4>[3] Nhấn vào nút "Add Product" để thêm 1 sản phẩm tại mục "Category" tương ứng.</h4>
        <hr/>
        <h2>Bước 2</h2>
        <img class="usermanual--half" src="<?php echo base_url(); ?>/webresources/images/usermanual/addproduct2.png" alt="logo" >
        <h4>[1] Đây là mục "Category" hiện tại</h4>
        <h4>[2] Nhập tên tiếng anh của sản phẩm</h4>
        <h4>[3] Chọn hình ảnh của sản phẩm - hình ảnh size: 600*400px</h4>
        <h4>[4] Nhập tên Việt nam</h4>
        <h4>[5] Nhập size cho sản phẩm</h4>
        <h4>[6] Nhập cách đóng gói sản phẩm</h4>
        <h4>[7] Nhập "Tag" để tìm kiếm sản phẩm ở trang chủ.</h4>
        <h4>[8] Nút "Create" là lưu sản phẩm</h4>
        <h4>[9] Huỷ thông tin vừa nhập</h4>
        <hr/>
        <h1>Xoá Sản Phẩm</h1>
        <h2>Bước 1</h2>
        <img class="usermanual" src="<?php echo base_url(); ?>/webresources/images/usermanual/removeProduct1.png" alt="logo">
        <h4>[1] Cho phép cập nhật sản phẩm [Edit]</h4>
        <h4>[2] Xoá sản phẩm tương ứng</h4>
        <hr/>
        <h2>Bước 2</h2>
        <img class="usermanual--quater" src="<?php echo base_url(); ?>/webresources/images/usermanual/removeProduct2.png" alt="logo">
        <h4>Hiển thị tên sản phẩm mà bạn chọn để xoá</h4>
        <h4>[1] Đồng ý xoá sản phẩm</h4>
        <h4>[2] Quay về và không xoá</h4>

    </div>
</main>

<?php $this->load->view('pages/usermanual/menu'); ?>
</body>
</html>