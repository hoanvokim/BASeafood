<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/4/16
 * Time: 12:48 AM
 */
?>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title"><?php echo $this->lang->line('GENERAL_INFORMATION'); ?></h1>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<section id="blog-details" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-7">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="single-blog blog-details two-column">
                            <div class="post-thumb">
                                <a href="#"><img src="<?php echo base_url(); ?>webresources/images/photos/introduce.jpg"
                                                 class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#"><?php echo $today = date("j"); ?> <br><small><?php echo $today = date("M"); ?></small>
                                        </a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <div class="list-group">
                                    <h2 class="list-group-item post-title bold text-uppercase list-group-item__header"><?php echo $this->lang->line('INFORMATION'); ?></h2>
                                    <a class="list-group-item"><i class="fa fa-barcode fa-fw"></i>&nbsp; <?php echo $this->lang->line('COMPANY_CODE'); ?>: 3502297423</a>
                                    <a class="list-group-item"><i class="fa fa-user fa-fw"></i>&nbsp; <?php echo $this->lang->line('COMPANY_NAME'); ?>: BASEAFOOD 1 COMPANY LIMITED</a>
                                    <a class="list-group-item"><i class="fa fa-user fa-fw"></i>&nbsp; <?php echo $this->lang->line('COMPANY_SHORTNAME'); ?>: BASEAFOOD 1 CO.,LTD</a>
                                    <a class="list-group-item"><i class="fa fa-road fa-fw"></i>&nbsp; <?php echo $this->lang->line('ADDRESS'); ?>: 321, Trần Xuân Độ street, Phuoc trung ward, Ba Ria
                                                                                               city, BR-VT province</a>
                                    <a class="list-group-item"><i class="fa fa-phone fa-fw"></i>&nbsp; <?php echo $this->lang->line('PHONE'); ?>: 064.3825246</a>
                                    <a class="list-group-item"><i class="fa fa-fax fa-fw"></i>&nbsp; <?php echo $this->lang->line('FAX'); ?>: 064.3825545</a>
                                    <a class="list-group-item"><i class="fa fa-google fa-fw"></i>&nbsp; <?php echo $this->lang->line('EMAIL'); ?>: tuongf34@gmail.com</a>

                                    <?php foreach ($aboutInformation as $aboutInfo) { ?>
                                        <h2 class="list-group-item post-title bold text-uppercase list-group-item__header">
                                            <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                                echo $aboutInfo->en_title;
                                            }
                                            else {
                                                echo $aboutInfo->vi_title;
                                            } ?>
                                        </h2>
                                        <div class="list-group-item">
                                            <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                                echo $aboutInfo->en_content;
                                            }
                                            else {
                                                echo $aboutInfo->vi_content;
                                            } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="post-bottom overflow">
                                    <ul class="nav navbar-nav post-nav">
                                        <li><a href="#"><i class="fa fa-tag"></i>General</a></li>
                                        <li><a href="#"><i class="fa fa-tag"></i>Introduce</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div class="sidebar-item popular">
                        <h3><?php echo $this->lang->line('LATEST_PHOTOS'); ?></h3>
                        <ul class="gallery">
                            <li><a href="#"><img
                                        src="<?php echo base_url(); ?>webresources/images/portfolio/popular1.jpg"
                                        alt=""></a></li>
                            <li><a href="#"><img
                                        src="<?php echo base_url(); ?>webresources/images/portfolio/popular2.jpg"
                                        alt=""></a></li>
                            <li><a href="#"><img
                                        src="<?php echo base_url(); ?>webresources/images/portfolio/popular3.jpg"
                                        alt=""></a></li>
                            <li><a href="#"><img
                                        src="<?php echo base_url(); ?>webresources/images/portfolio/popular4.jpg"
                                        alt=""></a></li>
                            <li><a href="#"><img
                                        src="<?php echo base_url(); ?>webresources/images/portfolio/popular5.jpg"
                                        alt=""></a></li>
                            <li><a href="#"><img
                                        src="<?php echo base_url(); ?>webresources/images/portfolio/popular1.jpg"
                                        alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function searchByTags(obj){
        var tag = $(obj).text();
        var url = "<?php echo base_url(); ?>webapp/search_controller/find/" + tag;
        $(location).attr('href',url);
    }
</script>