<div aria-hidden="true" aria-labelledby="createCategoryDialog" role="dialog" tabindex="-1" id="createCategoryDialog" class="modal fade">
    <div class="modal-dialog">
        <?php  echo form_open('create-category-submit'); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Create category</h4>
            </div>
            <div class="modal-body">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="text-red text-center">
                            <?php echo validation_errors(); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">Category name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Category name" autofocus>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button type="submit" class="btn btn-primary">create</button>
            </div>
        </div>
        </form>
    </div>
</div>
