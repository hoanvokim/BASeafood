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
                        <?php echo form_open_multipart('update-product-submit'); ?>
                        <div class="box-body">
                            <div class="text-red text-center">
                                <?php echo validation_errors(); ?>
                            </div>
                            <div class="text-red text-center">
                                <?php echo $error; ?>
                            </div>
                            <div class="form-group">
                                <label class="text-blue"><?php echo 'Category: ' . $category['en_name']; ?></label>
                                <input type="hidden" id="hide" name="cid" value="<?php echo $category['id']; ?>">
                                <input type="hidden" id="hide" name="pid" value="<?php echo $product['id']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="vi_name">Product name</label>
                                <input type="text" id="vi_name" name="vi_name" class="form-control"
                                       value="<?php echo $product['vi_name']; ?>" placeholder="Product name" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="userfile">Image</label>
                                <input type='file' name='userfile' size='20' id="upload_file"/>
                            </div>
                            <div class="form-group">
                                <label for="en_name">Latin name</label>
                                <input type="text" id="en_name" name="en_name" class="form-control"
                                       value="<?php echo $product['en_name']; ?>" placeholder="Latin name">
                            </div>
                            <div class="form-group">
                                <label for="size">Size </label>
                                <input type="text" id="size" name="size" class="form-control"
                                       value="<?php echo $product['size']; ?>" placeholder="Size, for example: 4-6     pc/kg   200-250 gr/pc">
                            </div>
                            <div class="form-group">
                                <label for="packing">Packing</label>
                                <input type="text" id="packing" name="packing" class="form-control"
                                       value="<?php echo $product['packing']; ?>" placeholder="Packing, for example: IQF, 1kg/PE x 10/CTN">
                            </div>
                            <?php if ($tags != null): ?>
                                <div class="form-group">
                                    <label for="packing">Tags</label>
                                    <select class="form-control select2" multiple="multiple" id="tags_dropdown" name="tags[]">
                                        <option></option>
                                        <?php foreach ($tags as $tag): ?>
                                            <option value="<?php echo $tag['id'] ?>"><?php echo $tag['name'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="<?php echo site_url('product-manager'); ?>" type="submit" class="btn">Cancel</a>
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