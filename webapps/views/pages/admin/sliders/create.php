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
                        <?php echo form_open_multipart('create-sliders-submit'); ?>
                        <div class="box-body">
                            <div class="text-red text-center">
                                <?php echo validation_errors(); ?>
                            </div>
                            <div class="text-red text-center">
                                <?php echo $error; ?>
                            </div>
                            <div class="form-group">
                                <label for="vi_title">Url</label>
                                <input type="text" id="url" name="url" class="form-control"
                                       placeholder="Url" value="<?= set_value('url') ?>" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="userfile">Image</label>
                                <input type='file' name='userfile' size='20' id="upload_file"/>
                            </div>
                            <div class="form-group">
                                <label for="en_content">English content</label>
                                <textarea id="news_en_content_editor" name="en_content" class="form-control" value="<?= set_value('en_content') ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="vi_content">Vietnamese content</label>
                                <textarea id="news_vi_content_editor" name="vi_content" class="form-control" value="<?= set_value('vi_content') ?>"></textarea>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">create</button>
                            <a href="<?php echo site_url('sliders-manager'); ?>" type="submit" class="btn">Cancel</a>
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