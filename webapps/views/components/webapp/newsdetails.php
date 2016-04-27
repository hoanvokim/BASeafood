<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 4/14/16
 * Time: 2:15 PM
 */
?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title"><?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                echo $new['en_title'];
                            }
                            else {
                                echo $new['vi_title'];
                            } ?></h1>

                        <h5 class="title post-author">published on <?php echo $new['created_date'] ?></h5>
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
                                <img src="<?php
                                if (strpos($new['url_attached_file'], 'pdf') !== false) {
                                    echo base_url() . 'webresources/images/files/pdf.png';
                                }
                                else if (strpos($new['url_attached_file'], 'jpg') !== false) {
                                    echo base_url() .$new['url_attached_file'];
                                }
                                else {
                                    echo base_url() . 'webresources/images/files/news.png';
                                }
                                ?>" alt="blog"/>
                            </div>
                            <div class="post-content overflow">
                                <p>
                                    <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                        echo $new['en_content'];
                                    }
                                    else {
                                        echo $new['vi_content'];
                                    } ?>
                                </p>
                            </div>
                            <a href="<?php echo base_url(); ?>newsandevents"><h4>Go Back</h4></a>
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

                </div>
            </div>
        </div>
    </div>
</section>
<!--/#blog-->
