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
        <h4> Đăng tin lên web, cho phép bạn sử dụng hình ảnh, định dạng, và có thể đính kèm cả tập tin.
        </h4>
        <h1>-- Vị Trí ở Trang Chính --</h1>
        <img class="usermanual--half" src="<?php echo base_url(); ?>/webresources/images/usermanual/news0.png"
             alt="logo">
        <h4>News có mặt ở 2 trang là trang chính và trang news-event</h4>
        <h4>[1] Hình ảnh tiêu đề của bài viết</h4>
        <h4>[2] Tên tiêu đề của bài viết</h4>
        <h4>[3] Nội dung của bài viết</h4>
        <h4>[4] Xem chi tiết</h4>
        <br/>
        <h1>-- Vị Trí ở Trang Quản Trị --</h1>
        <img class="usermanual--quater" src="<?php echo base_url(); ?>/webresources/images/usermanual/news1.png"
             alt="logo">
        <hr/>
        <img class="usermanual" src="<?php echo base_url(); ?>/webresources/images/usermanual/news.png"
             alt="logo">
        <h4>[1] Hiển thị số lượng tag trong 1 trang, (chỉ tính trong trang quản trị)</h4>
        <h4>[2] Tìm kiếm tiêu đề của bài viết trong trang quản trị (bao gồm tên tiếng anh và tiếng việt)</h4>
        <h4>[3] "Edit" cập nhật nội dung trong bài viết</h4>
        <h4>[4] "Delete" xoá bài viết</h4>
        <h4>[5] Hiện trị số lượng bài viết đang có trong trang web</h4>
        <h4>[6] Di chuyển tới trang tiếp theo, hay quay về trang trước.</h4>
        <h4>[7] "Add new" thêm mới 1 bài viết mới</h4>
    </div>
</main>

<?php $this->load->view('pages/usermanual/menu'); ?>
</body>
</html>