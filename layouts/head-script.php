<?php include('adminpanel/config/db.php');  ?>
<!DOCTYPE html>
<html  lang="fa-IR">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head id="Head">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <title>
	شرکت ایرتویا(نمایندگی رسمی تویوتای ژاپن در ایران)
</title>
<meta id="MetaDescription" name="DESCRIPTION" content="شرکت ا می د." />
<meta id="MetaKeywords" name="KEYWORDS" content="ایرتویا,i,limited,gs250,iiتی,لیفتراک,نماینده " />
<meta id="MetaRobots" name="ROBOTS" content="INDEX, FOLLOW" />
    <link href="_Content/stylesheet/css.css" type="text/css" rel="stylesheet"/>
<link href="_Content/stylesheet/app.css" type="text/css" rel="stylesheet"/>
<link href="_Content/stylesheet/default.css" type="text/css" rel="stylesheet"/>
<link href="_Content/stylesheet/portal.css" type="text/css" rel="stylesheet"/>
<link href="_Content/stylesheet/module.css" type="text/css" rel="stylesheet"/>
<link href="_Content/stylesheet/Template.css" type="text/css" rel="stylesheet"/>
    <link href="_Content/stylesheet/TemplateS.css" type="text/css" rel="stylesheet"/>
    <link href="_Content/stylesheet/Start.css" type="text/css" rel="stylesheet"/>
    <link href="_Content/stylesheet/Start.css" type="text/css" rel="stylesheet"/>
    <style type="text/css">#TWLiveTabsWrapper601 .ui-tabs {display: block !important;}</style>
    <link href="_Content/stylesheet/Style.css" type="text/css" rel="stylesheet"/>
    <link href="_Content/stylesheet/Setting.rtl.css" type="text/css" rel="stylesheet"/>
    <link href="_Content/stylesheet/Theme.rtl.css" type="text/css" rel="stylesheet"/>
<script src="_Content/javascript/js.js" type="text/javascript"></script>
    <script src="_Content/javascript/greensock.js" type="text/javascript"></script>
    <script src="_Content/javascript/LayerSlider.js" type="text/javascript"></script>
    <script src="_Content/javascript/LayerSlider2.js" type="text/javascript"></script>
    <script src="_Content/javascript/MicrosoftAjax.js" type="text/javascript"></script>
    <script src="_Content/javascript/source.js" type="text/javascript"></script>
<!--[if LT IE 9]><link id="IE6Minus" rel="stylesheet" type="text/css" href="/Portals/0/Skins/Irtoya1393/ie.css" /><![endif]-->
        
		  <script>
    $(document).ready(function () {
        $(window).scrollTop(0);
        /* Banner-Bottom */
        /*       //setTimeout(function () {
               //    $(".banner-bottom").addClass("active-banner-bottom");
               //}, 4000);
               //$(".banner-bottom button").click(function (e) {
               //    e.preventDefault();
               //    $(".banner-bottom").fadeOut(200);
               //}); */
        /* start popUp */

        $(".body_bg > #dnn_wrapper").prepend('<div class="deactive_page"></div><div class="pop-up-irtoya"><div class="close-popup"></div><div class="pop-up-frame" style="background:#fff !important;opacity:0.9 !important"><div class="popup-content" style="background:#fff !important;opacity:0.9 !important"><div class="popup-body" style="padding:0px !important;font-size:18px !important"><div class="table-pop" style="padding:20px 20px 20px 20px !important;background:#fff !important;font-size:18px !important;font-weight:bold !important;opacity:0.9!important">اطلاعیه شرکت ایرتویا در خصوص لیست ثبت سفارش های غیر قانونی خودرو<br /></div><a style="width:104px !important;font-size:14px !important" href="https://goo.gl/Ye9a99">مشاهده خبر</a><br /></div><div class="popup-body" style="padding:0px !important;font-size:18px !important">' +
            '<hr  style="border:1px dotted !important;color:black !important;width:80% !important; margin-right:10% !important"/> <div class="table-pop" style="padding:20px 20px 20px 20px !important;background:#fff !important;font-size:18px !important;font-weight:bold !important;opacity:0.9 !important">شکایت ایرتویا از بانک مرکزی<br /></div><a style="width:104px !important;font-size:14px !important; margin-bottom:15px" href="https://goo.gl/7PrhxV">مشاهده خبر</a></div>' +
            '</div></div></div>');
        setTimeout(function () {
           var windowWidth = $(window).width();
           var windowHeightP = $(window).height();
           var phu = 3 * windowHeightP / 4;
           if ($(window).height() <= 550) {
               $(".pop-up-frame").css("height", phu + "px")
           }
           var cstQVHeight = $('.pop-up-irtoya').height() / 2;
           var cstQVWidth = $('.pop-up-irtoya').width() / 2;
           var cstQVTop = windowHeightP / 2 - cstQVHeight;
           var cstQVRight = windowWidth / 2 - cstQVWidth;
           $(".pop-up-irtoya").css("top", cstQVTop + "px").css("right", cstQVRight + "px");
           $("#dnn_wrapper > .deactive_page, .pop-up-irtoya").css("visibility", "visible").css("opacity", "1")
        }, 3000);
        $(".close-popup,#dnn_wrapper > .deactive_page").click(function (e) {
           e.preventDefault();
           $(".pop-up-irtoya").fadeOut(200);
           $('.deactive_page').remove();
        });
        $(window).resize(function () {
           var windowWidth = $(window).width();
           var windowHeightP = $(window).height();
           var phu = 3 * windowHeightP / 4;
           if ($(window).height() <= 550) {
               $(".pop-up-frame").css("height", phu + "px")
           }
           var cstQVHeight = $('.pop-up-irtoya').height() / 2;
           var cstQVWidth = $('.pop-up-irtoya').width() / 2;
           var cstQVTop = windowHeightP / 2 - cstQVHeight;
           var cstQVRight = windowWidth / 2 - cstQVWidth;
           $(".pop-up-irtoya").css("top", cstQVTop + "px").css("right", cstQVRight + "px");
           $("#dnn_wrapper > .deactive_page, .pop-up-irtoya").css("visibility", "visible").css("opacity", "1");
        });
        /* END popUp */
    });
</script>
<link rel='SHORTCUT ICON' href='Portals/0/favicon2c048.ico?ver=1395-04-18-220901-033' type='image/x-icon' />
<link href="https://185.10.72.26/" rel="canonical" />
<meta name="viewport" content="width=device-width,height=device-height, minimum-scale=1.0, maximum-scale=2.0" />
</head>
<body id="Body" class="rtl">
    
 
            <script type="text/javascript">
            //<![CDATA[
            var theForm = document.forms['Form'];
            if (!theForm) {
                theForm = document.Form;
            }
            function __doPostBack(eventTarget, eventArgument) {
                if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                    theForm.__EVENTTARGET.value = eventTarget;
                    theForm.__EVENTARGUMENT.value = eventArgument;
                    theForm.submit();
                }
            }
            //]]>
            </script>


            <script src="_Content/javascript/WebResource.js" type="text/javascript"></script>
            <script src="_Content/javascript/Slide.js" type="text/javascript"></script>
            <script type="text/javascript">
            //<![CDATA[
            var __cultureInfo = {"name":"fa-IR","numberFormat":{"CurrencyDecimalDigits":0,"CurrencyDecimalSeparator":"/","IsReadOnly":false,"CurrencyGroupSizes":[3],"NumberGroupSizes":[3],"PercentGroupSizes":[3],"CurrencyGroupSeparator":",","CurrencySymbol":"","NaNSymbol":"مبهم","CurrencyNegativePattern":3,"NumberNegativePattern":3,"PercentPositivePattern":0,"PercentNegativePattern":0,"NegativeInfinitySymbol":"منهای بی نهایت","NegativeSign":"-","NumberDecimalDigits":2,"NumberDecimalSeparator":".","NumberGroupSeparator":",","CurrencyPositivePattern":0,"PositiveInfinitySymbol":"بی نهایت","PositiveSign":"+","PercentDecimalDigits":2,"PercentDecimalSeparator":"/","PercentGroupSeparator":",","PercentSymbol":"%","PerMilleSymbol":"‰","NativeDigits":["۰","۱","۲","۳","۴","۵","۶","۷","۸","۹"],"DigitSubstitution":0},"dateTimeFormat":{"AMDesignator":"ق.ظ","Calendar":{"MinSupportedDateTime":"\/Date(-42531885000000)\/","MaxSupportedDateTime":"\/Date(253402288199999)\/","AlgorithmType":1,"Eras":[1],"TwoDigitYearMax":99,"IsReadOnly":false},"DateSeparator":"/","FirstDayOfWeek":6,"CalendarWeekRule":0,"FullDateTimePattern":"dddd, dd MMMM,yyyy hh:mm:ss tt","LongDatePattern":"dddd, dd MMMM,yyyy","LongTimePattern":"hh:mm:ss tt","MonthDayPattern":"dd MMMM","PMDesignator":"ب.ظ","RFC1123Pattern":"ddd, dd MMM yyyy HH\u0027:\u0027mm\u0027:\u0027ss \u0027GMT\u0027","ShortDatePattern":"yyyy/MM/dd","ShortTimePattern":"hh:mm tt","SortableDateTimePattern":"yyyy\u0027-\u0027MM\u0027-\u0027dd\u0027T\u0027HH\u0027:\u0027mm\u0027:\u0027ss","TimeSeparator":":","UniversalSortableDateTimePattern":"yyyy\u0027-\u0027MM\u0027-\u0027dd HH\u0027:\u0027mm\u0027:\u0027ss\u0027Z\u0027","YearMonthPattern":"yyyy, MMMM","AbbreviatedDayNames":["ی","د","س","چ","پ","ج","ش"],"ShortestDayNames":["ی","د","س","چ","پ","ج","ش"],"DayNames":["یکشنبه","دوشنبه","ﺳﻪشنبه","چهارشنبه","پنجشنبه","جمعه","شنبه"],"AbbreviatedMonthNames":["فروردین","اردیبهشت","خرداد","تیر","مرداد","شهریور","مهر","آبان","آذر","دی","بهمن","اسفند",""],"MonthNames":["فروردین","اردیبهشت","خرداد","تیر","مرداد","شهریور","مهر","آبان","آذر","دی","بهمن","اسفند",""],"IsReadOnly":false,"NativeCalendarName":"","AbbreviatedMonthGenitiveNames":["فروردین","اردیبهشت","خرداد","تیر","مرداد","شهریور","مهر","آبان","آذر","دی","بهمن","اسفند",""],"MonthGenitiveNames":["فروردین","اردیبهشت","خرداد","تیر","مرداد","شهریور","مهر","آبان","آذر","دی","بهمن","اسفند",""]},"eras":[1,"A.D.",null,0]};//]]>
            </script>
            <script src="Telerik.Web.UI.WebResource9f08.js?_TSM_HiddenField_=ScriptManager_TSM&amp;compress=1&amp;_TSM_CombinedScripts_=%3b%3bSystem.Web.Extensions%2c+Version%3d4.0.0.0%2c+Culture%3dneutral%2c+PublicKeyToken%3d31bf3856ad364e35%3afa-IR%3ad469afcf-7bb2-42b0-a0c2-3f036d3832f2%3aea597d4b%3ab25378d2" type="text/javascript"></script>
            <script src="_Content/javascript/js.js" type="text/javascript"></script>
            <script src="WebResource6565.axd?d=MZmjywClmE-PwsCtU_1yA-jrDgZlwhl2xckZ7UBxrZcdl9EHtR68CcHinF1A6aWg9TWsesWL0epauAuyr0X3O8irIaBRsNcgMGwMpRVOCpZiLGVpd6cLKXEEFt5ce93GfD5Nv8Qn2SwNHJW3IN72FmIp4VLst_yB93FggvUQAi5Khy1x0&amp;t=635997450340000000" type="text/javascript"></script>
            <script src="_Content/javascript/js2.js" type="text/javascript"></script>
            <script src="WebResourcec4d7.axd?d=wL4KpjWgthaWh1VouC9jsAk77MOrB_BHO74VZwOnpMBJLPkn4hJgv5B-HIcHIJvBcjXnyuEq-xnvPJvKzFkPeAxLmQhBVysOOB7Vv2bySS2oFtnw99rHvaouPE5Li8iaSkT9MxhTil-6ELn_pd0k7p2H28ciYTaSnatDoUhzd913RvmC7mJ6Wee7FKdMdOZI2N95Cw2&amp;t=635997450340000000" type="text/javascript"></script>
            <script src="_Content/javascript/js3.js" type="text/javascript"></script>
            <script src="WebResource7783.axd?d=CON4WpTji6HyTrSfffdLgmSA3OX3M3HgtKleFv2HvkWINutC0VYNkfXwOcRU3BZeiScdEYS1AvTT9gTORiGvJ_6kVxPyKMScXvS9qXDoE1SjvDrmYLIKJaaWkyap4W2vqhn8iqjyB0Wr97s_8Uctx6L0fdP1ZwnKL9z3qy3Nu1SFdCkrBK_5LAshtqfntjKrdskvgsSN7IvWBHbg0&amp;t=635997450340000000" type="text/javascript"></script>
            <script type="text/javascript">
            //<![CDATA[
            Sys.WebForms.PageRequestManager._initialize('ScriptManager', 'Form', [], [], [], 90, '');
            //]]>
            </script>