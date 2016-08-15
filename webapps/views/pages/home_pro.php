<!DOCTYPE html>
<html lang="en">
<head>
    <!--Begin include CSS files-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="baseafood">
    <link rel="shortcut icon" href="<?php base_url() ?>webresources/images/ico/site-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <title>HomePage | BaSeafood</title>
    <link href="<?php echo base_url(); ?>webresources/css/home-pro.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>webresources/css/simple-slideshow-styles.css" rel="stylesheet">
    <!--Slider-->
    <link href="<?php echo base_url(); ?>webresources/css/owl-carousel/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>webresources/css/owl-carousel/css/owl.theme.css" rel="stylesheet">
</head>
<body>
<div id="main">
    <div id="language">
        <ul class="flags">
            <li><a href="http://www.pacificwestfoods.com.fr/index.php" target="_blank">
                    <div class="en"><span></span></div>
                </a><br>English
            </li>

            <li><a href="http://retail.pacificwest.com.au/" target="_blank">
                    <div class="vn"><span></span></div>
                </a><br>Vietnamese
            </li>
        </ul>
    </div>
    <div class="bss-slides" autofocus="autofocus">
        <figure>
            <img src="<?php echo base_url(); ?>assets/upload/images/sliders/1-crop.png" style="
    width: 771px;"/>
        </figure>

        <figure>
            <img src="<?php echo base_url(); ?>assets/upload/images/sliders/2-crop.png" style="
    width: 771px;"/>
        </figure>
        <figure>
            <img src="<?php echo base_url(); ?>assets/upload/images/sliders/3-crop.png" style="
    width: 771px;"/>
        </figure>
        <figure>
            <img src="<?php echo base_url(); ?>assets/upload/images/sliders/4-crop.png" style="
    width: 771px;"/>
        </figure>
        <figure>
            <img src="<?php echo base_url(); ?>assets/upload/images/sliders/5-crop.png" style="
    width: 771px;"/>
        </figure>
        <figure>
            <img src="<?php echo base_url(); ?>assets/upload/images/sliders/6-crop.png" style="
    width: 771px;"/>
        </figure>

    </div>

    <div id="partners-section">
        <!-- Begin page header-->
        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                    <h1 class="title">Our Certifications</h1>
                    <div class="devider"></div>
                    <p class="subtitle">Complete all standard to brings the good products to you.</p>
                </div>
            </div>
        </div>
        <!-- End page header-->
        <div class="container wow fadeInDown" data-wow-delay="0.4s">
            <div id="owl-partners" class="owl-carousel">
                <img src="<?php echo base_url(); ?>webresources/images/certificates/1.png" alt="img"
                     style="height: 70px;">
                <img src="<?php echo base_url(); ?>webresources/images/certificates/2.png" alt="img"
                     style="height: 70px;">
                <img src="<?php echo base_url(); ?>webresources/images/certificates/3.png" alt="img"
                     style="height: 70px;">
                <img src="<?php echo base_url(); ?>webresources/images/certificates/4.png" alt="img"
                     style="height: 70px;">
                <img src="<?php echo base_url(); ?>webresources/images/certificates/5.jpg" alt="img"
                     style="height: 70px;">
                <img src="<?php echo base_url(); ?>webresources/images/certificates/6.jpg" alt="img"
                     style="height: 70px;">
                <img src="<?php echo base_url(); ?>webresources/images/certificates/7.jpg" alt="img"
                     style="height: 70px;">
                <img src="<?php echo base_url(); ?>webresources/images/certificates/8.jpg" alt="img"
                     style="height: 70px;">
                <img src="<?php echo base_url(); ?>webresources/images/certificates/9.jpg" alt="img"
                     style="height: 70px;">
                <img src="<?php echo base_url(); ?>webresources/images/certificates/10.jpg" alt="img"
                     style="height: 70px;">
                <img src="<?php echo base_url(); ?>webresources/images/certificates/11.jpg" alt="img"
                     style="height: 70px;">
                <img src="<?php echo base_url(); ?>webresources/images/certificates/12.jpg" alt="img"
                     style="height: 70px;">
                <img src="<?php echo base_url(); ?>webresources/images/certificates/13.jpg" alt="img"
                     style="height: 70px;">
            </div>
        </div>
    </div>

</div>
<div id="footer">
<span class="fb">
<a href="https://www.facebook.com/baseafood1/" target="_blank"><img
        src="<?php echo base_url(); ?>webresources/images/fb-icon.png"></a> Follow us on facebook
</span>
<span class="copy">
Copyright © Baseafood1. All Rights Reserved
</span>
</div>
<!--Begin include JS files-->
<script type="text/javascript" src="<?php echo base_url(); ?>webresources/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>webresources/js/better-simple-slideshow.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>webresources/css/owl-carousel/js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $("#owl-partners").owlCarousel({
            items: 5,
            itemsDesktop: [800, 5],
            autoPlay: 2000,
            stopOnHover: true,
            pagination: false
        })
    });

    var opts = {
        //auto-advancing slides? accepts boolean (true/false) or object
        auto: {
            // speed to advance slides at. accepts number of milliseconds
            speed: 2000,
            // pause advancing on mouseover? accepts boolean
            pauseOnHover: true
        },
        fullScreen: false,
        // support swiping on touch devices? accepts boolean, requires hammer.js
        swipe: true
    };
    makeBSS('.bss-slides', opts);
</script>
</body>
</html>