<!DOCTYPE html>
<!-- Template by quackit.com -->
<html>
<head>
    <?php $this->load->view('pages/usermanual/header'); ?>
</head>

<body>

<main>
    <div class="innertube">
        <h1>-- Hướng Dẫn Sử Dụng --</h1>
        <h4> Category là một nhóm các sản phẩm, bạn sẽ tìm thấy nó trong trang Product/Sản phẩm <br/>
            Ví dụ như bạn muốn tạo ra dòng sản phẩm mới là Cá Khô Đặc Biệt và thêm các sản phẩm vào trong như: Cá Khô
            Nhật Đặc Biệt....
        </h4>
        <h1>-- Vị Trí ở Trang Chính --</h1>
        <img class="usermanual--half" src="<?php echo base_url(); ?>/webresources/images/usermanual/category1.png"
             alt="logo">
        <br/>
        <h1>-- Vị Trí ở Trang Quản Trị --</h1>
        <img class="usermanual--quater" src="<?php echo base_url(); ?>/webresources/images/usermanual/category2.png"
             alt="logo">
        <hr/>
        <img class="usermanual" src="<?php echo base_url(); ?>/webresources/images/usermanual/category.png"
             alt="logo">
        <h4>[1] Hiển thị số lượng tag trong 1 trang, (chỉ tính trong trang quản trị)</h4>
        <h4>[2] Tìm kiếm tên Category trong trang quản trị (bao gồm tên tiếng anh và tiếng việt)</h4>
        <h4>[3] "Add Child" vào trang thêm 1 Category con</h4>
        <h4>[4] "Edit" cập nhật nội dung trong tag</h4>
        <h4>[5] "Delete" xoá tag</h4>
        <h4>[6] Hiện trị số lượng tag đang có trong trang web</h4>
        <h4>[7] Di chuyển tới trang tiếp theo, hay quay về trang trước.</h4>
        <h4>[8] "Add new" thêm mới 1 tag</h4>
    </div>
</main>

<?php $this->load->view('pages/usermanual/menu'); ?>
</body>
</html>