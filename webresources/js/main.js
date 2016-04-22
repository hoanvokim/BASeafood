jQuery(function ($) {
    'use strict';

    //Responsive Nav
    $('li.dropdown').find('.fa-angle-down').each(function () {
        $(this).on('click', function () {
            if ($(window).width() < 768) {
                $(this).parent().next().slideToggle();
            }
            return false;
        });
    });

    //Fit Vids
    if ($('#video-container').length) {
        $("#video-container").fitVids();
    }

    //Initiat WOW JS
    new WOW().init();

    // portfolio filter
    $(window).load(function () {

        $('.main-slider').addClass('animate-in');
        $('.preloader').remove();
        //End Preloader

        if ($('.masonery_area').length) {
            $('.masonery_area').masonry();//Masonry
        }

        var $portfolio_selectors = $('.portfolio-filter >li>a');

        if ($portfolio_selectors.length) {

            var $portfolio = $('.portfolio-items');
            $portfolio.isotope({
                itemSelector: '.portfolio-item',
                layoutMode: 'fitRows'
            });

            $portfolio_selectors.on('click', function () {
                $portfolio_selectors.removeClass('active');
                $(this).addClass('active');
                var selector = $(this).attr('data-filter');
                $portfolio.isotope({filter: selector});
                return false;
            });
        }

    });

    $('.timer').each(count);
    function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
    }

    // Search
    $('.fa-search').on('click', function () {
        $('.field-toggle').fadeToggle(200);
    });

    // Contact form
    var form = $('#main-contact-form');
    form.submit(function (event) {
        event.preventDefault();
        var form_status = $('<div class="form_status"></div>');
        $.ajax({
            url: $(this).attr('action'),
            beforeSend: function () {
                form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn());
            }
        }).done(function (data) {
            form_status.html('<p class="text-success">Thank you for contact us. As early as possible  we will contact you</p>').delay(3000).fadeOut();
        });
    });

    // Progress Bar
    $.each($('div.progress-bar'), function () {
        $(this).css('width', $(this).attr('data-transition') + '%');
    });

    if ($('#gmap').length) {
        var map;

        map = new GMaps({
            el: '#gmap',
            lat: 10.485857,
            lng: 107.174071,
            scrollwheel: false,
            zoom: 17,
            zoomControl: false,
            panControl: false,
            streetViewControl: false,
            mapTypeControl: false,
            overviewMapControl: false,
            clickable: false
        });

        map.addMarker({
            lat: 43.04446,
            lng: -76.130791,
            animation: google.maps.Animation.DROP,
            verticalAlign: 'bottom',
            horizontalAlign: 'center',
            backgroundColor: '#3e8bff',
        });
    }

// Intro text carousel
    $("#owl-intro-text").owlCarousel({
        singleItem: true,
        autoPlay: 6000,
        stopOnHover: true,
        navigation: false,
        navigationText: false,
        pagination: true
    })

// Partner carousel
    $("#owl-partners").owlCarousel({
        items: 5,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        autoPlay: 5000,
        stopOnHover: true,
        pagination: false
    })

// Testimonials carousel
    $("#owl-testimonial").owlCarousel({
        singleItem: true,
        pagination: true,
        autoHeight: true
    })

});

function autoResize(id) {
    var newheight;
    var newwidth;

    if (document.getElementById) {
        newheight = document.getElementById(id).contentWindow.document.body.scrollHeight;
        newwidth = document.getElementById(id).contentWindow.document.body.scrollWidth;
    }
    document.getElementById(id).height = (newheight) + "px";
    document.getElementById(id).width = (newwidth) + "px";
}

$(document).ready(function () {
    $("#languageToggle").change(function () {
        $("#languageForm").submit();
    });
});

function categorytreeview() {

    if ($('.box-category').hasClass('treeview') == true) {

        $(".box-category").treeview({

            animated: "slow",

            collapsed: false,

            unique: false

        });

        $('.box-category li').parent().removeClass('expandable');

        $('.box-category li').parent().addClass('collapsable');

        $('.box-category .box-category .collapsable li').css('display', 'block');

    }

}

$(document).ready(function () {
    categorytreeview();
});

var data = {
    labels: ["2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015"],
    datasets: [
        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [5000, 7500, 7980, 7800, 5700, 5200, 11800, 14100, 16100, 16300, 17000]
        }
    ]
};
var context = document.getElementById('skills').getContext('2d');
var myLineChart = new Chart(context).Line(data);
$(window).load(function () {
    Pizza.init();
})