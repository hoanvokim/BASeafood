<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/17/16
 * Time: 6:39 AM
 */
?>
<div class="sidebar portfolio-sidebar">
    <div class="sidebar-item categories">
        <div class="column-block">
            <div class="columnblock-title">Categories</div>
            <div class="category_block">
                <?php echo $this->multi_menu->render(array(
                    'nav_tag_open' => '<ul class="box-category treeview-list treeview">',
                    'parentl1_tag_open' => '<li>',
                    'parentl1_anchor' => '<a href="%s" class="activSub">%s</a>',
                    'parent_tag_open' => '<li>',
                    'parent_anchor' => '<a href="%s" class="activSub">%s</a>',
                    'children_tag_open' => '<ul>'
                )); ?>
            </div>
        </div>
    </div>
</div>
