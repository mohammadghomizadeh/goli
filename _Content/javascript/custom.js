//Top:
jQuery(document).ready(function ($) {
    jQuery('#to_top').click(function () {
        jQuery('body,html').animate({ scrollTop: 0 }, 800);

    });
});
//For Menu Lavalamp:

jQuery(document).ready(function ($) {
    animatedcollapse.addDiv('search', 'fade=1,speed=200,group=mobile,hide=1')
    animatedcollapse.init()
});

//Mega_menu

$(document).ready(function () {
    $(window).scroll(function () {
        var sw = $(window).scrollTop();
        if (sw >= 302) {
            $(".DnnModule-1089").css("width", "100%").css("position", "fixed").css("top", "49px").css("z-index", "9");
        }
        else {
            $(".DnnModule-1089").css("position", "relative").css("top", "0").css("border-bottom", "none");;
        }
    });
    $('.footer-links h3').click(function (e) {
        e.preventDefault();
        if ($(this).hasClass("open-ft")) {
            $(this).next().css({ "opacity": "0", "max-height": "0" });
            $(this).removeClass("open-ft");
            $(this).find("button").css({ "transform": "rotateZ(0deg)", "-webkit-transform": "rotateZ(0deg)" });
        }
        else {
            $(this).addClass("open-ft");
            $(this).next().css({ "opacity": "1", "max-height": "700px" });
            $(this).find("button").css({ "transform": "rotateZ(45deg)", "-webkit-transform": "rotateZ(45deg)" });
        }
    });
});



$(window).load(function () {

    /* Toggle User Properties Menu
	-------------------------------------------*/
    $('.userName a').click(function (e) {
        $(this).toggleClass('active');
        $('.userMenu').fadeToggle('fast');
        e.stopPropagation();
    });
    $(document.body).click(function () {
        $('.userMenu').hide();
        $('.userName a').removeClass("active");
    });
    $('#dnn_pnav li').mouseenter(function () {
        $('.userMenu').hide();
        $('.userName a').removeClass("active");
    });
    $('.userMenu').click(function (e) {
        e.stopPropagation();
    });

    //roll_menu
    jQuery('#roll_nav').clingify({
        breakpoint: 0,  // in pixels
        extraClass: '',
        throttle: 100,  // in milliseconds
        distanceUp: 250,
        // Callback functions:
        detached: $.noop,
        locked: $.noop,
        resized: $.noop
    });



    /* Set CSS3 Animations via class: http://daneden.me/animate/ 
	---------------------------------------------*/
    $("#dnn_pnav li").hover(
		function () { $("ul", this).removeClass().addClass('fadeInDown'); },
		function () { $("ul", this).removeClass().addClass('fadeOutUp'); }
	);
    $("#dnn_pnav li ul li").hover(
		function () { $("ul", this).removeClass().addClass('fadeInLeft'); },
		function () { $("ul", this).removeClass().addClass('fadeOutRight'); }
	);
});

//Google Map
jQuery(document).ready(function ($) {
    if (document.getElementById('gmap')) {
        jQuery('#gmap').gMap({
            address: 'Bear city, ny ',
            maptype: 'hybrid',
            zoom: 8,
            scrollwheel: true,
            scaleControl: true,
            navigationControl: true,
            markers: [
				{ address: 'Bear city, ny ', html: 'marker 1' },
				{ address: ' 579 Allen Road Basking Ridge, NJ 07920 ', html: 'marker 1' },
				{ address: ' Mount Arlington, NJ 07856', html: 'marker 1' }
            ]
        });
    }
});

if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement("style");
    msViewportStyle.appendChild(
      document.createTextNode(
        "@-ms-viewport{width:auto!important}"
      )
    );
    document.getElementsByTagName("head")[0].
      appendChild(msViewportStyle);
}



(function ($, window, undefined) {

    var nua = navigator.userAgent;
    var is_android = ((nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1) && !(nua.indexOf('Chrome') > -1));

    function browserSize() {
        wh = $(window).height();
        ww = $(window).width();
        dh = $(document).height();
        ar = ww / wh;
    };

    function init() {
        browserSize();
        if (is_android) {
            $('html').addClass('android-browser');
        } else {
            $('html').addClass('no-android-browser');
        }
        $('html').addClass('loaded');
        eventHandlersOnce();
    };

    function eventHandlersOnce() {
        $('.switchOpen').on('click', function (e) {
            $(this).addClass('SwitchClose');
            var hh = $('header').height(),
                ch = $('.navigation_mobile').height(),
                max = Math.max(wh, ch, hh);
            $('.navigation_mobile').css({ 'minHeight': wh });

            if ($('html').hasClass('navigation_is-visible')) {
                $('#dnn_wrapper').css({ 'height': '' });
                $(this).removeClass('SwitchClose');
            } else {
                $('#dnn_wrapper').css({ 'height': max });
            }
            $('html').toggleClass('navigation_is-visible');


            $('.navigation_mobile').resize(function () {
                if ($('html').hasClass('navigation_is-visible')) {
                    $('#dnn_wrapper').css({ 'height': $('.navigation_mobile').height() });
                }
                else {
                    $('#dnn_wrapper').css({ 'height': ' ' });
                }

            });


        });
    };

    $(function () {
        init()
    });

})(jQuery, window);



$(document).ready(function () {
    // News
    var $slidera = $(".news-slider-tmp .slider"),
    diffa = 0,
    curSlidea = 0,
    numOfSlidesa = $(".news-slider-tmp .slide").length - 1,
    animatinga = false,
    animTimea = 500,
    autoSlideTimeouta,
    autoSlideDelaya = 10000,
    $paginationa = $(".news-slider-tmp .slider-pagi");

    $(".slider-container .slider .slide:nth-child(1)").addClass("slide-0").addClass("active");
    $(".slider-container .slider .slide:nth-child(2)").addClass("slide-1");
    $(".slider-container .slider .slide:nth-child(3)").addClass("slide-2");
    $(".slider-container .slider .slide:nth-child(4)").addClass("slide-3");
    $(".slider-container .slider .slide:nth-child(5)").addClass("slide-4");

    function createBulletsa() {
        for (var i = 0; i < numOfSlidesa + 1; i++) {
            var $li = $("<li class='slider-pagi__elem'></li>");
            $li.addClass("slider-pagi__elem-" + i).data("pagea", i);
            if (!i) $li.addClass("active");
            $paginationa.append($li);
        }
    };

    createBulletsa();

    function manageControlsa() {
        $(".news-slider-tmp .slider-control").removeClass("inactive");
        if (!curSlidea) $(".news-slider-tmp .slider-control.right").addClass("inactive");
        if (curSlidea === numOfSlidesa) $(".news-slider-tmp .slider-control.left").addClass("inactive");
    };

    function autoSlidea() {
        autoSlideTimeouta = setTimeout(function () {
            curSlidea++;
            if (curSlidea > numOfSlidesa) curSlidea = 0;
            changeSlidesa();
        }, autoSlideDelaya);
    };

    autoSlidea();

    function changeSlidesa(instant) {
        if (!instant) {
            animatinga = true;
            manageControlsa();
            $slidera.addClass("animating");
            $slidera.css("top");
            $(".news-slider-tmp .slide").removeClass("active");
            $(".news-slider-tmp .slide-" + curSlidea).addClass("active");
            setTimeout(function () {
                $slidera.removeClass("animating");
                animatinga = false;
            }, animTimea);
        }
        window.clearTimeout(autoSlideTimeouta);
        $(".news-slider-tmp .slider-pagi__elem").removeClass("active");
        $(".news-slider-tmp .slider-pagi__elem-" + curSlidea).addClass("active");
        $slidera.css("transform", "translate3d(" + curSlidea * 100 + "%,0,0)");
        diffa = 0;
        autoSlidea();
    }

    function navigateRighta() {
        if (animatinga) return;
        if (curSlidea > 0) curSlidea--;
        changeSlidesa();
    }

    function navigateLefta() {
        if (animatinga) return;
        if (curSlidea < numOfSlidesa) curSlidea++;
        changeSlidesa();
    }

    $(document).on("mousedown touchstart", ".news-slider-tmp .slider", function (e) {
        if (animatinga) return;
        window.clearTimeout(autoSlideTimeouta);
        var startXa = e.pageX || e.originalEvent.touches[0].pageX,
            winWa = $(window).width();
        diffa = 0;

        $(document).on("mousemove touchmove", function (e) {
            var xa = e.pageX || e.originalEvent.touches[0].pageX;
            diffa = (startXa - xa) / winWa * 70;
            if ((!curSlidea && diffa < 0) || (curSlidea === numOfSlidesa && diffa > 0)) diffa /= 2;
            $slidera.css("transform", "translate3d(" + (curSlidea * 100 - diffa) + "%,0,0)");
        });
    });

    $(document).on("mouseup touchend", function (e) {
        $(document).off("mousemove touchmove");
        if (animatinga) return;
        if (!diffa) {
            changeSlidesa(true);
            return;
        }
        if (diffa > -8 && diffa < 8) {
            changeSlidesa();
            return;
        }
        if (diffa <= -8) {
            navigateLefta();
        }
        if (diffa >= 8) {
            navigateRighta();
        }
    });

    $(document).on("click", ".news-slider-tmp .slider-control", function () {
        if ($(this).hasClass("left")) {
            navigateLefta();
        } else {
            navigateRighta();
        }
    });

    $(document).on("click", ".news-slider-tmp .slider-pagi__elem", function () {
        curSlidea = $(this).data("pagea");
        changeSlidesa();
    });
});

$(document).ready(function () {
    $("#dnn_dnnSEARCH_txtSearch").attr("placeholder", "از اینجا جستجو کنید...");
    $('#footer1 #to_top').click(function () {
        $('html,body').animate({ scrollTop: 0 }, 500);
    });
    $(window).scroll(function () {
        var st = $(window).scrollTop();
        if (st >= 200) {
            $('#footer1 #to_top').stop(true, false).animate({ 'right': '40px' }, 100);
        }
        else {
            $('#footer1 #to_top').stop(true, false).animate({ 'right': '-50px' }, 100);
        }
    });
});