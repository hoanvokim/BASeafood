<script src="webresources/js/jquery-1.8.3.min.js" type="text/javascript">
</script>
<script src="webresources/js/bootstrap.min.js" type="text/javascript">
</script>
<script src="webresources/js/hover-dropdown.js" type="text/javascript">
</script>
<script defer src="webresources/js/jquery.flexslider.js" type="text/javascript">
</script>
<script src="webresources/assets/bxslider/jquery.bxslider.js" type="text/javascript">
</script>

<script  src="webresources/js/jquery.parallax-1.1.3.js" type="text/javascript">
</script>
<script src="webresources/js/wow.min.js" type="text/javascript">
</script>
<script src="webresources/assets/owlcarousel/owl.carousel.js" type="text/javascript">
</script>

<script src="webresources/js/jquery.easing.min.js" type="text/javascript">
</script>
<script src="webresources/js/link-hover.js" type="text/javascript">
</script>
<script src="webresources/js/superfish.js" type="text/javascript">
</script>
<script  src="webresources/js/parallax-slider/jquery.cslider.js" type="text/javascript">
</script>
<script type="text/javascript">
    $(function () {

        $('#da-slider').cslider({
            autoplay: true,
            bgincrement: 100
        });

    });
</script>


<!--common script for all pages-->
<script src="webresources/js/common-scripts.js" type="text/javascript">
</script>

<script type="text/javascript">
    jQuery(document).ready(function () {


        $('.bxslider1').bxSlider({
            minSlides: 5,
            maxSlides: 6,
            slideWidth: 360,
            slideMargin: 2,
            moveSlides: 1,
            responsive: true,
            nextSelector: '#slider-next',
            prevSelector: '#slider-prev',
            nextText: 'Onward →',
            prevText: '← Go back'
        });

    });


</script>


<script>
    $('a.info').tooltip();

    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

    $(document).ready(function () {

        $("#owl-demo").owlCarousel({

            items: 4

        });

    });

    jQuery(document).ready(function () {
        jQuery('ul.superfish').superfish();
    });

    new WOW().init();


</script>