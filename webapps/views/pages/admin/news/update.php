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
                <section class="col-lg-6">
                    <div class="box box-primary">
                        <?php echo form_open_multipart('update-news-submit'); ?>
                        <div class="box-body">
                            <input type="hidden" id="hide" name="nid" value="<?php echo $news['id']; ?>">
                            <div class="text-red text-center">
                                <?php echo validation_errors(); ?>
                            </div>
                            <div class="text-red text-center">
                                <?php echo $error; ?>
                            </div>
                            <div class="form-group">
                                <label for="en_title">English Title</label>
                                <input type="text" id="en_title" name="en_title" class="form-control"
                                       value="<?php echo $news['en_title']; ?>" placeholder="Title" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="vi_title">Vietnamese Title</label>
                                <input type="text" id="vi_title" name="vi_title" class="form-control"
                                       value="<?php echo $news['vi_title']; ?>" placeholder="Title" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="userfile">Image</label>
                                <input type='file' name='userfile' size='20' id="upload_file"/>
                            </div>
                            <div class="form-group">
                                <label for="en_content">English content</label>
                                <textarea id="en_content" name="en_content" class="form-control"><?php echo htmlspecialchars($news['en_content']); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="vi_content">Vietnamese content</label>
                                <textarea id="vi_content" name="vi_content" class="form-control"><?php echo htmlspecialchars($news['vi_content']); ?></textarea>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="<?php echo site_url('news-manager'); ?>" type="submit" class="btn">Cancel</a>
                        </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </aside>

</div>
<?php $this->load->view('layouts/admin/footer'); ?>
</body>
</html>