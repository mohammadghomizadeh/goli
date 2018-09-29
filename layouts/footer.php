<div id="footer1">
                <footer>
                    <div class="footer-sp-links">
                        <a href="http://arita.irtoya.com/Toyota-C-HR" class="ft-sp-lnk">Toyota C-HR</a>
                        <a href="http://prius.irtoya.com/" class="ft-sp-lnk">Toyota PRIUS</a>
                    </div>
                    <div class="footer-wrap">
                        <div class="top_footer">
                            <div class="dnn_layout">
                                <div class="row-fluid">
                                    <div class="searchBox" id="search" style="" groupname="mobile" fade="1" speed="200">
                                        <span class="searchArrow">&nbsp;</span>
                                        <span id="dnn_dnnSEARCH_ClassicSearch">
    
    
    <span class="searchInputContainer" data-moreresults="مشاهده نتایج بیشتر" data-noresult="نتیجه&zwnj;ای یافت نشد">
        <input name="dnn$dnnSEARCH$txtSearch" type="text" maxlength="255" size="20" id="dnn_dnnSEARCH_txtSearch" class="NormalTextBox" autocomplete="off" placeholder="از اینجا جستجو کنید...">
        <a class="dnnSearchBoxClearText" title="Clear search text"></a>
    </span>
    <a id="dnn_dnnSEARCH_cmdSearch" class="search" href="javascript:__doPostBack('dnn$dnnSEARCH$cmdSearch','')">جستجو</a>
</span>


<script type="text/javascript">
    $(function() {
        if (typeof dnn != "undefined" && typeof dnn.searchSkinObject != "undefined") {
            var searchSkinObject = new dnn.searchSkinObject({
                delayTriggerAutoSearch : 400,
                minCharRequiredTriggerAutoSearch : 2,
                searchType: 'S',
                enableWildSearch: true,
                cultureCode: 'fa-IR',
                portalId: -1
                }
            );
            searchSkinObject.init();
            
            
            // attach classic search
            var siteBtn = $('#dnn_dnnSEARCH_SiteRadioButton');
            var webBtn = $('#dnn_dnnSEARCH_WebRadioButton');
            var clickHandler = function() {
                if (siteBtn.is(':checked')) searchSkinObject.settings.searchType = 'S';
                else searchSkinObject.settings.searchType = 'W';
            };
            siteBtn.on('change', clickHandler);
            webBtn.on('change', clickHandler);
            
            
        }
    });
</script>

                                    </div>
                                    <div class="social_icons_footer">
                                        <?php
                                        $resultsocial = $db->run("SELECT * FROM `content` WHERE `title` = 'instagram'");
                                        foreach($resultsocial as $rsocial)
                                        {
                                        ?>
                                        <a href="<?php echo $rsocial['link']; ?>">
                                            <div class="social_icon5 animation bounceIn1 animated">
                                                
                                            </div>
                                        </a>
                                        <?php 
                                        };
                                        ?>
                                         <?php
                                        $resultsocial = $db->run("SELECT * FROM `content` WHERE `title` = 'googleplus'");
                                        foreach($resultsocial as $rsocial)
                                        {
                                        ?>
                                        <a href="<?php echo $rsocial['link']; ?>">
                                            <div class="plus social_icon4 animation bounceIn2 animated">
                                            
                                             </div>
                                        </a>
                                        <?php
                                        };
                                        ?>
                                          <?php
                                        $resultsocial = $db->run("SELECT * FROM `content` WHERE `title` = 'telegram'");
                                        foreach($resultsocial as $rsocial)
                                        {
                                        ?>
                                        <a href="<?php echo $rsocial['link']; ?>">
                                            <div class="social_icon6 animation bounceIn3 animated"></div>
                                        </a>
                                        <?php
                                        };
                                        ?>
                                        <?php
                                        $resultsocial = $db->run("SELECT * FROM `content` WHERE `title` = 'facebook'");
                                        foreach($resultsocial as $rsocial)
                                        {
                                        ?>
                                        <a href="<?php echo $rsocial['link']; ?>">
                                            <div class="fb social_icon1 animation bounceIn4 animated"></div>
                                        </a>
<?php
};
?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Footer_Contentbg">
                            <div class="dnn_layout">
                                <div class="row-fluid">
                                    <div class="span3">
                                        <div id="dnn_FootPaneA" class="FootPaneA">
                                            <div class="DnnModule DnnModule-DNN_HTML DnnModule-863">
                                                <a name="863">

                                                </a>
<div class="White">
     <div id="dnn_ctr863_ContentPane" class="contentpane"><!-- Start_Module_863 -->
     <div id="dnn_ctr863_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
	<div id="dnn_ctr863_HtmlModule_lblContent" class="Normal">
	<div class="footer-links">
    <div class="footer-links-col">
        <h3>خدمات پس از فروش
            <button><span></span><span></span></button>
        </h3>
        <ul>
            <li><a href="/خدمات-پس-از-فروش/نوبت-دهی-اینترنتی-ایرتویا">نوبت دهی اینترنتی</a></li>
            <li><a href="/%D8%A7%D9%85%D8%AF%D8%A7%D8%AF-%D8%AC%D8%A7%D8%AF%D9%87-%D8%A7%DB%8C">امداد جاده ای</a></li>
            <!--<li><a href="/After-Sales-Service/Parts">معرفی قطعات و لوازم جانبی</a></li>-->
            <li><a href="https://parts.irtoya.com/">فروشگاه آنلاین قطعات</a></li>
            <li><a href="/خدمات-پس-از-فروش/سامانه-سابقه-تعمیراتی-خودرو">مشاهده فاکتور قطعات و خدمات</a></li>
            <li><a href="/خدمات-پس-از-فروش/گارانتی-و-وارانتی/فنی-و-گارانتی">فنی و گارانتی</a></li>
            <li><a href="/خدمات-پس-از-فروش/خدمات-پس-از-فروش/سرویس">خدمات سرویس در محل</a></li>
        </ul>
    </div>
</div>
</div>

</div><!-- End_Module_863 --></div>
</div>



</div></div>
                                    </div>
                                    <div class="span3">
                                        <div id="dnn_FootPaneB" class="FootPaneB">
                                            <div class="DnnModule DnnModule-DNN_HTML DnnModule-864">
                                                <a name="864">

                                                </a>
<div class="White">
     <div id="dnn_ctr864_ContentPane" class="contentpane"><!-- Start_Module_864 -->
     <div id="dnn_ctr864_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
	<div id="dnn_ctr864_HtmlModule_lblContent" class="Normal">
	<div class="footer-links">
    <div class="footer-links-col">
        <h3>درباره ما<button><span></span><span></span></button></h3>
        <ul>
            <li><a href="/دربارهما/تاریخچهتویوتا">تاریخچه تویوتا</a></li>
            <li><a href="/دربارهما/تاریخچهایرتویا">تاریخچه ایرتویا</a></li>
            <li><a href="/دربارهما/تماسباما">شعب ایرتویا</a></li>
        </ul>
    </div>
</div>
</div>

</div><!-- End_Module_864 --></div>
</div>



</div><div class="DnnModule DnnModule-DNN_HTML DnnModule-865">
    <a name="865"></a>
<div class="White">
     <div id="dnn_ctr865_ContentPane" class="contentpane"><!-- Start_Module_865 -->
     <div id="dnn_ctr865_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
	<div id="dnn_ctr865_HtmlModule_lblContent" class="Normal">
	<div class="footer-links">
         <div class="footer-links-col"> 
             <h3>اطلاعات تماس<button>
                 <span>

                 </span>
                 <span>

                 </span>
                </button>
            </h3> 
            <ul> 
                <li>دفتر و نمایشگاه مرکزی: 02173451</li> 
                <li>خدمات پس از فروش: 02173456</li>
                 <li>آدرس:ابتدای جاده دماوند</li> 
                 <li>
                     <a href="/نمایندگی-ها/لیست-نمایندگی-ها">عاملیت ها</a>
                    </li> 
                    <li>
                        <a href="/دربارهما/تماسباما">شعب</a>
                    </li>
                 </ul>
                 </div>
                 </div>
</div>

</div><!-- End_Module_865 --></div>
</div>



</div>
</div>
    </div>
        <div class="span3">
            <div id="dnn_FootPaneC" class="FootPaneC">
                <div class="DnnModule DnnModule-DNN_HTML DnnModule-866">
                    <a name="866">

                    </a>
<div class="White">
     <div id="dnn_ctr866_ContentPane" class="contentpane">
         <!-- Start_Module_866 -->
         <div id="dnn_ctr866_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
	<div id="dnn_ctr866_HtmlModule_lblContent" class="Normal">
	<div class="footer-links"> <div class="footer-links-col"> <h3>دسترسی سریع<button><span></span><span></span></button></h3> <ul> <li><a href="/خدمات-پس-از-فروش/آموزش">آموزش مشتریان</a></li> <li><a href="/عاملیت-ها/درخواست-اخذ-عاملیت">درخواست اخذ عاملیت</a></li> <li><a href="http://industrial.irtoya.com/">تجهیزات صنعتی</a></li> <li><a href="/تست-درایو-رایگان-خودروی-پریوس">تست درایو</a></li> <li><a href="/خدمات-پس-از-فروش/فنی-و-سرویس/معرفی-واحد-آموزش-ایرتویا/مقالات-آموزشی">مقالات آموزشی</a></li> <li><a href="/online-sales">خرید آنلاین</a></li> <li><a href="/فروش/پیگیری-قرارداد-فروش-ایرتویا">پیگیری قراداد فروش</a></li> </ul> </div> </div>
</div>

</div><!-- End_Module_866 --></div>
</div>



</div></div>
                                    </div>
                                    <div class="span3">
                                        <div id="dnn_FootPaneD" class="FootPaneD"><div class="DnnModule DnnModule-DNN_HTML DnnModule-867"><a name="867"></a>
<div class="White">
     <div id="dnn_ctr867_ContentPane" class="contentpane"><!-- Start_Module_867 --><div id="dnn_ctr867_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
	<div id="dnn_ctr867_HtmlModule_lblContent" class="Normal">
	<div class="footer-links">
    <div class="footer-links-col">
        <h3>رسانه
            <button><span></span><span></span></button>
        </h3>
        <ul>
            <li><a href="/newsportal">پرتال خبری</a></li>
            <li><a href="/امور-مشتریان/معرفی-واحد-امور-مشتریان">صدای مشتری</a></li>
            <li><a href="https://t.me/irtoyacrmbot">بات امور مشتریان</a></li>
            <li><a href="http://Telegram.me/irtoya_toyota_iran">کانال تلگرام</a></li>
            <li><a href="/نظرسنجی">نظرسنجی</a></li>
            <li><a href="/نرم-افزار-موبایل-ایرتویا">نرم افزار موبایل</a></li>
            <li><a href="https://careers.irtoya.com/">پرتال استخدامی</a></li>
        </ul>
    </div>
</div>
</div>

</div><!-- End_Module_867 --></div>
</div>



</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Footer_Bottombg">
                        <div class="dnn_layout">
                            <div class="footer_mid clearfix">
                                <div class="copyright_style">
                                    <a id="dnn_dnnPRIVACY_hypPrivacy" class="terms" rel="nofollow" href="https://arita.irtoya.com/Privacy">حریم خصوصی</a>
                                    <a id="dnn_dnnTERMS_hypTerms" class="terms" rel="nofollow" href="https://arita.irtoya.com/Terms">شرایط استفاده</a>
                                    <a href="#"><i class="fa fa-sitemap" aria-hidden="true"></i>نقشه ی سایت</a>
                                    
                                </div>
                                <div class="copyright_style">
                                    <span id="dnn_dnnCOPYRIGHT_lblCopyright" class="footer">تمامی حقوق مادی و معنوی این سایت متعلق به شرکت آریتا می باشد</span>

                                </div>
                                <div id="dnn_FooterPane" class="FooterPane DNNEmptyPane"></div>
                               <div id="to_top" style="right: 40px;"><span><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="201.000000pt" height="300.000000pt" viewBox="0 0 201.000000 300.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none"><path d="M10 2875 l0 -125 995 0 995 0 0 125 0 125 -995 0 -995 0 0 -125z"></path><path d="M594 2099 c-208 -215 -380 -394 -382 -398 -1 -3 36 -44 83 -91 l85 -85 245 245 245 245 0 -1003 0 -1002 125 0 125 0 0 995 c0 547 3 995 8 995 4 0 113 -106 242 -235 l235 -235 82 82 c46 46 83 87 83 93 0 9 -774 776 -790 783 -3 1 -177 -174 -386 -389z"></path></g></svg></span></div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>