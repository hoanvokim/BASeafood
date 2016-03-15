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
                        <?php echo form_open_multipart('upload-image-submit'); ?>
                        <div class="box-body">
                            <div class="text-red text-center">
                                <?php echo $error; ?>
                            </div>
                            <div class="form-group">
                                <label for="en_name">English name</label>
                                <input type="text" id="en_name" name="en_name" class="form-control"
                                       placeholder="Name" value="<?php echo $gallery['en_name']; ?>" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="vi_name">Vietnamese name</label>
                                <input type="text" id="vi_name" name="vi_name" class="form-control"
                                       placeholder="Name" value="<?php echo $gallery['vi_name']; ?>" autofocus>
                            </div>
                            <div class="form-group">
                                <img src="<?php echo $gallery['url_image']; ?>" class="img-responsive img-thumbnail" style="width: 200px;height: 200px;"/>
                            </div>
                            <div class="form-group">
                                <label for="upload_file">File upload</label>
                                <input type='file' name='userfile' size='20'/>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Upload</button>
                            <a href="<?php echo site_url('gallery-manager'); ?>" type="submit" class="btn">Cancel</a>
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