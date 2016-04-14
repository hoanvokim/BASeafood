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
        </div><!--/ Content row end -->
    </div><!--/ Container end -->
</section>
