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
                        <h1 class="title">General Information</h1>
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
                                <a href="#"><img src="<?php echo base_url(); ?>webresources/images/blog/7.jpg"
                                                 class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#">14 <br>
                                            <small>Feb</small>
                                        </a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                                <h2 class="post-title bold">Details information</h2>
                                <p>
                                    <i class="fa fa-barcode"></i> Company code: 3502297423 <br/>
                                    <i class="fa fa-user"></i> Company name: BASEAFOOD 1 COMPANY LIMITED <br/>
                                    <i class="fa fa-user"></i> Company shortname: BASEAFOOD 1 CO.,LTD <br/>
                                    <i class="fa fa-road"></i> Address: 321, Trần Xuân Độ street, Phuoc trung ward, Ba Ria
                                    city, BR-VT province <br/>
                                    <i class="fa fa-phone"></i> Phone: 064.3825246 <br/>
                                    <i class="fa fa-fax"></i> Fax: 064.3825545 <br/>
                                    <i class="fa fa-google"></i> Email: tuongf34@gmail.com <br/>
                                </p>
                                <?php foreach ($aboutInformation as $aboutInfo) { ?>
                                    <h2 class="post-title bold">
                                        <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                            echo $aboutInfo->en_title;
                                        }
                                        else {
                                            echo $aboutInfo->vi_title;
                                        } ?>
                                    </h2>
                                    <p>
                                        <?php if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
                                            echo $aboutInfo->en_content;
                                        }
                                        else {
                                            echo $aboutInfo->vi_content;
                                        } ?>
                                    </p>
                                <?php } ?>
                                <div class="post-bottom overflow">
                                    <ul class="nav navbar-nav post-nav">
                                        <li><a href="#"><i class="fa fa-tag"></i>General</a></li>
                                        <li><a href="#"><i class="fa fa-user"></i>32 Watched</a></li>
                                    </ul>
                                </div>
                                <div class="blog-share">
                                    <span class='st_facebook_hcount'></span>
                                    <span class='st_twitter_hcount'></span>
                                    <span class='st_linkedin_hcount'></span>
                                    <span class='st_pinterest_hcount'></span>
                                    <span class='st_email_hcount'></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-5">
                <div class="sidebar blog-sidebar">
                    <div class="sidebar-item tag-cloud">
                        <h3>Tag Cloud</h3>
                        <ul class="nav nav-pills">
                            <li><a href="#">news</a></li>
                            <li><a href="#">finance</a></li>
                            <li><a href="#">policy</a></li>
                            <li><a href="#">product</a></li>
                            <li><a href="#">photo</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-item popular">
                        <h3>Latest Photos</h3>
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

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1200ms" data-wow-delay="200ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="200ms">
                        <img src="<?php echo base_url(); ?>webresources/images/home/icon1.png" alt="">
                    </div>
                    <h2>SIÊU THỊ ĐẶC SẢN VŨNG TÀU</h2>
                    <p>
                        460 Trương Công Định, F.8, TP.Vũng Tàu
                        <br/>
                        SĐT: 064 2 240 231
                    </p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1200ms" data-wow-delay="400ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="400ms">
                        <img src="<?php echo base_url(); ?>webresources/images/home/icon2.png" alt="">
                    </div>
                    <h2>SIÊU THỊ HẢI SẢN BÀ RỊA (gần Bến xe Bà Rịa)</h2>
                    <p>
                        Trung Tâm Thương Mại Bà Rịa, TX Bà Rịa
                        <br/>
                        SĐT: 064 3 717 469
                    </p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1200ms" data-wow-delay="600ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                        <img src="<?php echo base_url(); ?>webresources/images/home/icon3.png" alt="">
                    </div>
                    <h2>SIÊU THỊ THỰC PHẨM </h2>
                    <p>
                        169 Thuỳ Vân , F.8, Thành Phố Vũng Tàu
                        <br/>
                        SĐT: 064 3 585 095
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1200ms" data-wow-delay="200ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="200ms">
                        <img src="<?php echo base_url(); ?>webresources/images/services/1.png" alt="">
                    </div>
                    <h2>SIÊU THỊ GOOD MART</h2>
                    <p>
                        10 Xô Viết Nghệ Tĩnh, Phường Thắng Tam, TP.Vũng Tàu
                        <br/>
                        SĐT: 064 3 853 329
                    </p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1200ms" data-wow-delay="400ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="400ms">
                        <img src="<?php echo base_url(); ?>webresources/images/services/2.png" alt="">
                    </div>
                    <h2>CỬA HÀNG ĐẶC SẢN BIỂN</h2>
                    <p>
                        08 Thuỳ Vân, Phường Thắng Tam, TP.Vũng Tàu
                        <br/>
                        SĐT: 064 3 523 833
                    </p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1200ms" data-wow-delay="600ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                        <img src="<?php echo base_url(); ?>webresources/images/services/3.png" alt="">
                    </div>
                    <h2>CỬA HÀNG ĐẶC SẢN BIỂN MEDICOAST</h2>
                    <p>
                        165 Thuỳ Vân, Phường Thắng Tam, Tp.Vũng Tàu
                        <br/>
                        SĐT: 064 3 521 616
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1200ms" data-wow-delay="200ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="200ms">
                        <img src="<?php echo base_url(); ?>webresources/images/services/1.png" alt="">
                    </div>
                    <h2>CỬA HÀNG ĐẶC SẢN BIỂN - HTX HẢI ÂU</h2>
                    <p>
                        107 Thùy Vân, Phường 2, Vũng Tàu
                    </p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1200ms" data-wow-delay="400ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="400ms">
                        <img src="<?php echo base_url(); ?>webresources/images/services/2.png" alt="">
                    </div>
                    <h2>CỬA HÀNG ĐẶC SẢN BIỂN - BẾN TÀU CÁNH NGẦM</h2>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1200ms" data-wow-delay="600ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                        <img src="<?php echo base_url(); ?>webresources/images/services/3.png" alt="">
                    </div>
                    <h2>ĐỘI XE BÁN HÀNG LƯU ĐỘNG</h2>
                    <p>
                        SĐT: 064 3 585 088
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1200ms" data-wow-delay="200ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="200ms">
                        <img src="<?php echo base_url(); ?>webresources/images/services/1.png" alt="">
                    </div>
                    <h2>CỬA HÀNG ĐẶC SẢN BIỂN (đối diện chợ Long Hải)</h2>
                    <p>
                        Thị Trấn Long Hải, Huyện Long Điền, Tỉnh Bà Rịa Vũng Tàu
                        <br/>
                        SĐT: 0643.661647
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#services-->
