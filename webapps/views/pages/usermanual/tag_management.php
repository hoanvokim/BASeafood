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
        <h4>Tag là một từ, một cụm từ, bạn muốn gắn vào trong một bài viết hay một hình ảnh
            <br/>
            khi người dùng đánh đúng từ mà bạn gắn vào trong bài viết hay hình ảnh, họ sẽ tìm thấy bài viết bạn đã chọn.
        </h4>
        <h1>-- Vị Trí ở Trang Quản Trị --</h1>
        <img class="usermanual--supersmall" src="<?php echo base_url(); ?>/webresources/images/usermanual/tag.png" alt="logo"  s>
        <h4>Vị trí của Slider trong trang quản trị</h4>
        <img class="usermanual--half" src="<?php echo base_url(); ?>/webresources/images/usermanual/tag1.png" alt="logo" >
        <h4>[1] Hiển thị số lượng tag trong 1 trang, (chỉ tính trong trang quản trị)</h4>
        <h4>[2] Tìm kiếm tag trong trang quản trị</h4>
        <h4>[3] "Edit" cập nhật nội dung trong tag</h4>
        <h4>[4] "Delete" xoá tag</h4>
        <h4>[5] Hiện trị số lượng tag đang có trong trang web</h4>
        <h4>[6] Di chuyển tới trang tiếp theo, hay quay về trang trước.</h4>
        <h4>[7] "Add new" thêm mới 1 tag</h4>
    </div>
</main>

<?php $this->load->view('pages/usermanual/menu'); ?>
</body>
</html>