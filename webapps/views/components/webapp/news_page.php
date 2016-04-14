<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/4/16
 * Time: 12:48 AM
 */
?>
<section id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="page-header text-center">
                <h1 class="title wow fadeInDown" data-wow-delay="0.4s"><?php echo $this->lang->line('NEWS'); ?> <img
                        src="<?php echo base_url(); ?>/webresources/images/home/news.png"></h1>
                <div class="devider wow fadeInDown" data-wow-delay="0.6s"></div>
            </div>
        </div><!--/ Title row end -->
        <div class="row">

            <div class="col-md-9 col-sm-7">
                <?php $this->load->view('components/webapp/news'); ?>
            </div>
            <div class="col-md-3 col-sm-5">
                <div class="sidebar blog-sidebar">
                    <div class="sidebar-item tag-cloud">
                        <h3><?php echo $this->lang->line('TAG_CLOUD'); ?></h3>
                        <?php if(count($tags) > 0){ ?>
                            <ul class="nav nav-pills">
                                <?php foreach($tags as $tag){ ?>
                                    <li><a href="#" onclick="searchByTags(this)"><?php echo $tag['name']; ?></a></li>
                                <?php } ?>

                            </ul>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div><!--/ Content row end -->
    </div><!--/ Container end -->
</section>

<script>
    function searchByTags(obj){
        var tag = $(obj).text();
        var url = "<?php echo base_url(); ?>webapp/search_controller/find/" + tag;
        $(location).attr('href',url);
    }
</script>