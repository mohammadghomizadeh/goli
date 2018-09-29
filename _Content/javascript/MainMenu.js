$(document).ready(function () {
    $("#top_menu ul.dropdown li a").append('<h2 class="arrow_down"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="300.000000pt" height="175.000000pt" viewBox="0 0 300.000000 175.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,175.000000) scale(0.100000,-0.100000)" fill="#cb2027" stroke="none"><path d="M164 1730 c-94 -37 -164 -136 -164 -232 0 -83 45 -148 235 -341 94 -94 377 -383 630 -640 288 -294 474 -476 500 -490 57 -29 155 -29 213 1 24 13 215 185 425 385 891 843 944 895 968 943 45 95 18 219 -65 292 -45 39 -133 66 -190 58 -84 -13 -109 -35 -596 -501 -47 -44 -166 -157 -265 -250 -99 -93 -224 -212 -278 -264 l-97 -96 -128 130 c-70 72 -314 321 -542 554 -309 316 -426 429 -458 443 -64 29 -128 32 -188 8z"></path></g></svg></h2>');
    $("#top_menu > div > ul > li a").attr("href", "#");
    $("header #top_menu > div > ul > li").click(function (e) {
        e.preventDefault();
        var index = $(this).index() + 1;
        if (index == 4) {
            window.location.href = 'http://arita.irtoya.com/نمایندگی-ها/لیست-نمایندگی-ها';
            return;
        }
        if ($(this).hasClass("active-menu")) {
            $(this).removeClass("active-menu");
            $("#top_menu > div > ul > li").css("background", "#fff none repeat scroll 0 0");
            $("#top_menu > div > ul > li h2").removeClass("arrow_up").addClass("arrow_down");
            $(".sliding_page_items").removeClass("fly-out");
            $(".SubMenu-total .SubMenu").removeClass("open");
            return;
        }
        else {
            $("#top_menu > div > ul > li").removeClass("active-menu");
            $(this).addClass("active-menu");
            $("#top_menu > div > ul > li").css("background", "#fff none repeat scroll 0 0");
            $(this).css("background", "#f5f5f5 none repeat scroll 0 0");
            $("#top_menu > div > ul > li h2").removeClass("arrow_up").addClass("arrow_down");
            $(this).find("h2").removeClass("arrow_down").addClass("arrow_up");
            $(".SubMenu-total .SubMenu").removeClass("open");
            $(".sliding_page_items").addClass("fly-out");
            $(".SubMenu-total .SubMenu:nth-child(" + index + ")").addClass("open");
            return;
        }
    });

    // Mobile Menu
    $(".mobile-click button").click(function () {
        if ($(this).hasClass("active-menu-mobile")) {
            $(this).removeClass("active-menu-mobile");
            $(".main-area , #footer1").css("display", "block");
            $(".submenu-mobile-content .content_mid").removeClass("open-mobile");
            setTimeout(function () { $(".tcom-vehicles-mobile-category").removeClass("category-open"); }, 500);
            return;
        }
        else {
            $(this).addClass("active-menu-mobile");
            $(".main-area , #footer1").css("display", "none");
            $(".submenu-mobile-content .content_mid").addClass("open-mobile");
            setTimeout(function () { $(".tcom-vehicles-mobile-category:nth-child(1)").addClass("category-open"); }, 1500);
            return;
        }
    });
    $(".tcom-vehicles-mobile-category-toggle").click(function () {
        if ($(this).parent(".tcom-vehicles-mobile-category").hasClass("category-open")) {
            $(this).parent(".tcom-vehicles-mobile-category").removeClass("category-open");
            return;
        }
        else {
            $(".tcom-vehicles-mobile-category").removeClass("category-open");
            $(this).parent(".tcom-vehicles-mobile-category").addClass("category-open");
            return;
        }
    });

});

// Car Menu Desctop

$(document).ready(function () {
    $('.menu_slider_right_arrow').css("display", "none");
    $(".sliding_page_content").css("transform", "translate3d(0px, 0px, 0px)");
    $('.toyota_top_menu_links:nth-child(1)').addClass("is_active");
    $(".sliding_page_items:nth-child(1)").addClass("active-slide");
    //var matrix = $('.sliding_page_content').css('transform');
    //var values = matrix.match(/-?[\d\.]+/g);
    var windowWidth = $(window).width();
    var gallery_items_width_cn = Math.round(windowWidth);
    var tx_gallery_slider_slides = 0;
    var tx_total = 0;
    var ms_height = $(".sliding_page_items").height();
    var ms_height_final = (ms_height / 2);
    var windowWidth_slider = $(window).width();
    //$('.sliding_page_items').css("width", windowWidth);
    //$('.sliding_page_content').css("width", 4 * windowWidth);
    //$('.menu_slider_left_arrow,.menu_slider_right_arrow').css("top", ms_height_final);

    $(window).resize(function () {
        windowWidth = $(window).width();
        gallery_items_width_cn = Math.round(windowWidth);
        ms_height = $(".sliding_page_items").height();
        ms_height_final = (ms_height / 2);
        windowWidth_slider = $(window).width();
        ms_height = $(".sliding_page_total").height();
        ms_height_final = (ms_height / 2);

        $('.sliding_page_items').css("width", windowWidth);
        $('.sliding_page_content').css("width", 4 * windowWidth);
        $('.menu_slider_left_arrow,.menu_slider_right_arrow').css("top", ms_height_final);

        if ($(".sliding_page_items:nth-child(1)").hasClass("active-slide")) {
            tx_total = 0;
        }
        if ($(".sliding_page_items:nth-child(2)").hasClass("active-slide")) {
            tx_total = 0 + gallery_items_width_cn;
        }
        if ($(".sliding_page_items:nth-child(3)").hasClass("active-slide")) {
            tx_total = 0 + 2 * gallery_items_width_cn;
        }
        if ($(".sliding_page_items:nth-child(4)").hasClass("active-slide")) {
            tx_total = 0 + 3 * gallery_items_width_cn;
        }
        $('.sliding_page_content').css("transform", "translate3d(" + tx_total + "px, 0px, 0px)");
    });

    setInterval(function () {
        var ms_height = $(".sliding_page_items").height();
        var ms_height_final = (ms_height / 2);
        $('.sliding_page_items').css("width", windowWidth);
        $('.sliding_page_content').css("width", 4 * windowWidth);
        var ms_height = $(".sliding_page_total").height();
        $('.menu_slider_left_arrow,.menu_slider_right_arrow').css("top", ms_height_final);
    }, 1);


    $('.toyota_top_menu_links:nth-child(1)').click(function () {
        $('.toyota_top_menu_links').removeClass("is_active");
        $(this).addClass("is_active");
        tx_total = 0;
        $('.sliding_page_content').css("transform", "translate3d(" + tx_total + "px, 0px, 0px)");
        $(".sliding_page_items").removeClass("active-slide");
        $(".sliding_page_items").removeClass("previous-slide");
        $(".sliding_page_items:nth-child(1)").addClass("active-slide");
        $('.menu_slider_right_arrow').css("display", "none");
        $('.menu_slider_left_arrow').css("display", "block");
    });
    $('.toyota_top_menu_links:nth-child(2)').click(function () {
        $('.toyota_top_menu_links').removeClass("is_active");
        $(this).addClass("is_active");
        tx_total = 0 + gallery_items_width_cn;
        $('.sliding_page_content').css("transform", "translate3d(" + tx_total + "px, 0px, 0px)");
        $(".sliding_page_items").removeClass("active-slide");
        $(".sliding_page_items").removeClass("previous-slide");
        $(".sliding_page_items:nth-child(1)").addClass("previous-slide");
        $(".sliding_page_items:nth-child(2)").addClass("active-slide");
        $('.menu_slider_right_arrow').css("display", "block");
        $('.menu_slider_left_arrow').css("display", "block");
    });
    $('.toyota_top_menu_links:nth-child(3)').click(function () {
        $('.toyota_top_menu_links:nth-child(1)').removeClass("is_active");
        $('.toyota_top_menu_links:nth-child(2)').removeClass("is_active");
        $('.toyota_top_menu_links:nth-child(4)').removeClass("is_active");
        $(this).addClass("is_active");
        tx_total = 0 + 2 * gallery_items_width_cn;
        $('.sliding_page_content').css("transform", "translate3d(" + tx_total + "px, 0px, 0px)");
        $(".sliding_page_items").removeClass("active-slide");
        $(".sliding_page_items").removeClass("previous-slide");
        $(".sliding_page_items:nth-child(2)").addClass("previous-slide");
        $(".sliding_page_items:nth-child(3)").addClass("active-slide");
        $('.menu_slider_right_arrow').css("display", "block");
        $('.menu_slider_left_arrow').css("display", "block");
    });
    $('.toyota_top_menu_links:nth-child(4)').click(function () {
        $('.toyota_top_menu_links:nth-child(1)').removeClass("is_active");
        $('.toyota_top_menu_links:nth-child(2)').removeClass("is_active");
        $('.toyota_top_menu_links:nth-child(3)').removeClass("is_active");
        $(this).addClass("is_active");
        tx_total = 0 + 3 * gallery_items_width_cn;
        $('.sliding_page_content').css("transform", "translate3d(" + tx_total + "px, 0px, 0px)");
        $(".sliding_page_items").removeClass("active-slide");
        $(".sliding_page_items").removeClass("previous-slide");
        $(".sliding_page_items:nth-child(3)").addClass("previous-slide");
        $(".sliding_page_items:nth-child(4)").addClass("active-slide");
        $('.menu_slider_right_arrow').css("display", "block");
        $('.menu_slider_left_arrow').css("display", "none");
    });
    $('.menu_slider_left_arrow').click(function () {
        tx_total = parseInt(tx_gallery_slider_slides) + gallery_items_width_cn + tx_total;
        $('.sliding_page_content').css("transform", "translate3d(" + tx_total + "px, 0px, 0px)");
        $("div.previous-slide").removeClass("previous-slide");
        $("div.active-slide").removeClass("active-slide").addClass("previous-slide");
        $("div.previous-slide").next().addClass("active-slide");
        if (!($(".subnavs-wrap-desktop .sliding_page_items:first-child").hasClass("active-slide"))) {
            $('.menu_slider_right_arrow').css("display", "block");
        }
        if ($(".subnavs-wrap-desktop .sliding_page_items:last-child").hasClass("active-slide")) {
            $('.menu_slider_left_arrow').css("display", "none");
        }
        if (tx_total == 0) {
            $('.toyota_top_menu_links').removeClass("is_active");
            $('.toyota_top_menu_links:nth-child(1)').addClass("is_active");
        }
        if (tx_total == 0 + gallery_items_width_cn) {
            $('.toyota_top_menu_links').removeClass("is_active");
            $('.toyota_top_menu_links:nth-child(2)').addClass("is_active");
        }
        if (tx_total == 0 + 2 * gallery_items_width_cn) {
            $('.toyota_top_menu_links').removeClass("is_active");
            $('.toyota_top_menu_links:nth-child(3)').addClass("is_active");
        }
        if (tx_total == 0 + 3 * gallery_items_width_cn) {
            $('.toyota_top_menu_links').removeClass("is_active");
            $('.toyota_top_menu_links:nth-child(4)').addClass("is_active");
        }
        return false;
    });
    $('.menu_slider_right_arrow').click(function () {
        tx_total = parseInt(tx_gallery_slider_slides) - gallery_items_width_cn + tx_total;
        $('.sliding_page_content').css("transform", "translate3d(" + tx_total + "px, 0px, 0px)");
        $("div.previous-slide").removeClass("previous-slide");
        $("div.active-slide").removeClass("active-slide").addClass("previous-slide");
        $("div.previous-slide").prev().addClass("active-slide");
        if (!($(".subnavs-wrap-desktop .sliding_page_items:last-child").hasClass("active-slide"))) {
            $('.menu_slider_left_arrow').css("display", "block");
        }
        if ($(".subnavs-wrap-desktop .sliding_page_items:first-child").hasClass("active-slide")) {
            $('.menu_slider_right_arrow').css("display", "none");
        }
        if (!($(".subnavs-wrap-desktop .sliding_page_items:first-child").hasClass("active-slide"))) {
            $('.menu_slider_right_arrow').css("display", "block");
        }
        if ($(".subnavs-wrap-desktop .sliding_page_items:last-child").hasClass("active-slide")) {
            $('.menu_slider_left_arrow').css("display", "none");
        }
        if (tx_total == 0) {
            $('.toyota_top_menu_links').removeClass("is_active");
            $('.toyota_top_menu_links:nth-child(1)').addClass("is_active");
        }
        if (tx_total == 0 + gallery_items_width_cn) {
            $('.toyota_top_menu_links').removeClass("is_active");
            $('.toyota_top_menu_links:nth-child(2)').addClass("is_active");
        }
        if (tx_total == 0 + 2 * gallery_items_width_cn) {
            $('.toyota_top_menu_links').removeClass("is_active");
            $('.toyota_top_menu_links:nth-child(3)').addClass("is_active");
        }
        if (tx_total == 0 + 3 * gallery_items_width_cn) {
            $('.toyota_top_menu_links').removeClass("is_active");
            $('.toyota_top_menu_links:nth-child(4)').addClass("is_active");
        }
        return false;
    });
});
