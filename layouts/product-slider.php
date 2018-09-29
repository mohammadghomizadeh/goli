<div class="DnnModule DnnModule-DNN_HTML DnnModule-872"><a name="872"></a>
<div class="White">
     <div id="dnn_ctr872_ContentPane" class="contentpane"><!-- Start_Module_872 -->
    <meta charset="utf-8">
    <title></title>
    <script>
        $(document).ready(function () {
            // tab1
            var $bl_1 = $(".vehicles-tab-content:nth-child(1) .thumbs-block"),
            $th_1 = $(".vehicles-tab-content:nth-child(1) .thumbs-block .thumbs"),
            blW_1 = $bl_1.outerWidth(),
            blSW_1 = $bl_1[0].scrollWidth,
            wDiff_1 = (blSW_1 / blW_1) - 1,  // widths difference ratio
            mPadd_1 = 60,  // Mousemove Padding
            damp_1 = 20,  // Mousemove response softness
            mX_1 = 0,   // Real mouse position
            mX2_1 = 0,   // Modified mouse position
            posX_1 = 0,
            mmAA_1 = blW_1 - (mPadd_1 * 2), // The mousemove available area
            mmAAr_1 = (blW_1 / mmAA_1);    // get available mousemove fidderence ratio

            $bl_1.mousemove(function (e) {
                mX_1 = e.pageX - this.offsetLeft;
                mX2_1 = Math.min(Math.max(0, mX_1 - mPadd_1), mmAA_1) * mmAAr_1;
            });

            setInterval(function () {
                posX_1 += (mX2_1 - posX_1) / damp_1; // zeno's paradox equation "catching delay"
                $th_1.css({ marginLeft: -posX_1 * wDiff_1 });
            }, 10);

            // tab2
            var $bl_2 = $(".vehicles-tab-content:nth-child(2) .thumbs-block"),
            $th_2 = $(".vehicles-tab-content:nth-child(2) .thumbs-block .thumbs"),
            blW_2 = $bl_2.outerWidth(),
            blSW_2 = $bl_2[0].scrollWidth,
            wDiff_2 = (blSW_2 / blW_2) - 1,  // widths difference ratio
            mPadd_2 = 60,  // Mousemove Padding
            damp_2 = 20,  // Mousemove response softness
            mX_2 = 0,   // Real mouse position
            mX2_2 = 0,   // Modified mouse position
            posX_2 = 0,
            mmAA_2 = blW_2 - (mPadd_2 * 2), // The mousemove available area
            mmAAr_2 = (blW_2 / mmAA_2);    // get available mousemove fidderence ratio

            $bl_2.mousemove(function (e) {
                mX_2 = e.pageX - this.offsetLeft;
                mX2_2 = Math.min(Math.max(0, mX_2 - mPadd_2), mmAA_2) * mmAAr_2;
            });

            setInterval(function () {
                posX_2 += (mX2_2 - posX_2) / damp_2; // zeno's paradox equation "catching delay"
                $th_2.css({ marginLeft: -posX_2 * wDiff_2 });
            }, 10);

            
            $("ul.vehicles-tab-itmes li").click(function () {
                var inx = $(this).index() + 1;
                $("ul.vehicles-tab-itmes li").removeClass("itm_active");
                $(this).addClass("itm_active");
                $(".vehicles-accordion-header").addClass("hd-closed");
                $(".vehicles-tab-content-all .vehicles-tab-content:nth-child(" + inx + ") .vehicles-accordion-header").removeClass("hd-closed");
                var delay1 = 0;
                $(".vehicles-tab-content-all .vehicles-tab-content .thumbs-block:not(.is-closed) .thumbs div.thumb").each(function () {
                    var $a = $(this);
                    setTimeout(function () {
                        $a.removeClass('slide-in-vhc');
                    }, delay1 += 100);
                });
                setTimeout(function () {
                    $(".vehicles-tab-content-all .vehicles-tab-content .thumbs-block").addClass("is-closed");
                    $(".vehicles-tab-content-all .vehicles-tab-content:nth-child(" + inx + ") .thumbs-block").removeClass("is-closed");
                    mX2_1 = 0;
                    posX_1 = 0;
                    mX2_2 = 0;
                    posX_2 = 0;
                    mX2_3 = 0;
                    posX_3 = 0;
                    mX2_4 = 0;
                    posX_4 = 0;
                    var delay2 = 0;
                    $(".vehicles-tab-content-all .vehicles-tab-content:nth-child(" + inx + ") .thumbs-block .thumbs div.thumb").each(function () {
                        var $b = $(this);
                        setTimeout(function () {
                            $b.addClass('slide-in-vhc');
                        }, delay2 += 100);
                    });
                }, delay1 + 200);
            });
            $(".vehicles-accordion-header").click(function () {
                var inx_mob = $(this).parent(".vehicles-tab-content").index() + 1;
                if ($(this).hasClass("hd-closed")) {
                    $(".vehicles-accordion-header").addClass("hd-closed");
                    $(this).removeClass("hd-closed");
                    $("ul.vehicles-tab-itmes li").removeClass("itm_active");
                    $("ul.vehicles-tab-itmes li:nth-child(" + inx_mob + ")").addClass("itm_active");
                    $(".thumbs-block").addClass("is-closed");
                    $(".vehicles-tab-content .thumbs div.thumb").removeClass("slide-in-vhc");
                    $(this).next().removeClass("is-closed");
                    $(this).next().find("div.thumb").addClass("slide-in-vhc");
                }
                else {
                    $(".vehicles-accordion-header").addClass("hd-closed");
                    $("ul.vehicles-tab-itmes li").removeClass("itm_active");
                    $("ul.vehicles-tab-itmes li:nth-child(" + inx_mob + ")").addClass("itm_active");
                    $(".thumbs-block").addClass("is-closed");
                    $(".vehicles-tab-content .thumbs div.thumb").removeClass("slide-in-vhc");
                }
            });
        });
    </script>

<div id="dnn_ctr872_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
	<div id="dnn_ctr872_HtmlModule_lblContent" class="Normal">
	<div class="explore-all-vehicles">
    <h2>کلیه ی محصولات تویوتا</h2>

    <ul class="vehicles-tab-itmes">
        <li class="itm_active">خودروهای سواری</li>
        <li>خودروهای شاسی بلند</li>
        <li>خودروهای ون</li>
        <li>خودروهای هیبرید</li>
        <li>خودروهای پیک آپ</li>
    </ul>

    <div class="vehicles-tab-content-all">
        <div class="vehicles-tab-content">
            <div class="vehicles-accordion-header"><span>خودروهای سواری</span></div>

            <div class="thumbs-block">
                <div class="thumbs" style="margin-left: -93.4724px;">
                <?php
                 $resultproduct = $db->select("content","`type` = 'product'");
                  foreach($resultproduct as $rows) {
                 ?>
                    <div class="fancybox thumb slide-in-vhc">
                        <a href="product-single.php?id=<?php echo $rows['id']; ?>">
                            <img alt="یاریس هاچ بک" class="vhc-img" src="adminpanel/uploads/product/<?php echo $rows['image']; ?>" width="258" height="110">
                            <img alt="یاریس هاچ بک" class="vhc-img-hover" src="adminpanel/uploads/product/<?php echo $rows['image2']; ?>" width="258" height="110"></a>

                        <h3><?php echo $rows['title']; ?></h3>

                        <h4><span><?php echo $rows['description']; ?></span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="product-single.php?id=<?php echo $rows['id']; ?>">مشاهده</a></h>
                    </div>
                  <?php }; ?>
                    <div class="fancybox thumb slide-in-vhc">
                        <a href="/toyota-products/agentType/View/PropertyID/4">
                            <img alt="یاریس" class="vhc-img" src="adminpanel/uploads/product/Yaris-Sedan-side-1.png" width="258" height="110">
                            <img alt="یاریس" class="vhc-img-hover" src="adminpanel/uploads/product/Yaris-Sedan-front-1.png" width="258" height="110"></a>

                        <h3>Yaris</h3>

                        <h4><span>حجم موتور: cc 1500</span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="/toyota-products/agentType/View/PropertyID/4">مشاهده</a><a href="/online-sales">خرید آنلاین</a></h5>
                    </div>

                    <div class="fancybox thumb slide-in-vhc">
                        <a href="/toyota-products/agentType/View/PropertyID/1">
                            <img alt="کرولا" class="vhc-img" src="adminpanel/uploads/product/corolla-side.png" width="258" height="110">
                            <img alt="کرولا" class="vhc-img-hover" src="adminpanel/uploads/product/corolla-front.png" width="258" height="110"></a>

                        <h3>Corolla</h3>

                        <h4><span>حجم موتور: cc 2000</span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="/toyota-products/agentType/View/PropertyID/1">مشاهده</a><a href="/online-sales">خرید آنلاین</a></h5>
                    </div>

                    <div class="fancybox thumb slide-in-vhc">
                        <a href="/toyota-products/agentType/View/PropertyID/2">
                            <img alt="کمری" class="vhc-img" src="adminpanel/uploads/product/camry-side.png" width="258" height="110">
                            <img alt="کمری" class="vhc-img-hover" src="adminpanel/uploads/product/camry-front.png" width="258" height="110"></a>

                        <h3>Camry</h3>

                        <h4><span>حجم موتور: cc 2500</span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="/toyota-products/agentType/View/PropertyID/2">مشاهده</a><a href="/online-sales">خرید آنلاین</a></h5>
                    </div>

                    <div class="fancybox thumb slide-in-vhc">
                        <a href="/toyota-products/agentType/View/PropertyID/109">
                            <img alt="آریون" class="vhc-img" src="adminpanel/uploads/product/Aurion-side-1.png" width="258" height="110">
                            <img alt="آریون" class="vhc-img-hover" src="adminpanel/uploads/product/Aurion-front-1.png" width="258" height="110"></a>

                        <h3>Aurion</h3>

                        <h4><span>حجم موتور: cc 3500</span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="/toyota-products/agentType/View/PropertyID/109">مشاهده</a></h5>
                    </div>

                    <div class="fancybox thumb slide-in-vhc">
                        <a href="/toyota-products/agentType/View/PropertyID/6">
                            <img alt="تویوتا 86" class="vhc-img" src="adminpanel/uploads/product/86-side-1.png" width="258" height="110">
                            <img alt="تویوتا 86" class="vhc-img-hover" src="adminpanel/uploads/product/86-front-1.png" width="258" height="110"></a>

                        <h3>86</h3>

                        <h4><span>حجم موتور: cc 2000</span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="/toyota-products/agentType/View/PropertyID/6">مشاهده</a></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="vehicles-tab-content">
            <div class="vehicles-accordion-header hd-closed"><span>خودروهای شاسی بلند</span></div>

            <div class="thumbs-block is-closed">
                <div class="thumbs" style="margin-left: 0px;">
                    <div class="fancybox thumb">
                        <a href="/Toyota-C-HR">
                            <img alt="C-HR" class="vhc-img" src="adminpanel/uploads/product/c-hr-side.png" width="258" height="110">
                            <img alt="C-HR" class="vhc-img-hover" src="adminpanel/uploads/product/c-hr-front.png" width="258" height="110"> </a>

                        <h3>C-HR</h3>

                        <h4><span>حجم موتور: cc turbo 1200</span><span>نوع سوخت: بنزینی و برقی</span></h4>

                        <h5><a href="/Toyota-C-HR">مشاهده</a></h5>
                    </div>

                    <div class="fancybox thumb">
                        <a href="/toyota-products/agentType/View/PropertyID/10">
                            <img alt="روفور" class="vhc-img" src="adminpanel/uploads/product/rav4-side.png" width="258" height="110">
                            <img alt="روفور" class="vhc-img-hover" src="adminpanel/uploads/product/rav4-front.png" width="258" height="110"></a>

                        <h3>Rav4</h3>

                        <h4><span>حجم موتور: cc 2500</span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="/toyota-products/agentType/View/PropertyID/10">مشاهده</a>
                            <a href="/online-sales">خرید آنلاین</a>
                        </h5>
                    </div>

                    <div class="fancybox thumb">
                        <a href="/toyota-products/agentType/View/PropertyID/8">
                            <img alt="پرادو" class="vhc-img" src="_Content/images/HomePage/Vehicles-Section/prado-side-1.png" width="258" height="110">
                            <img alt="پرادو" class="vhc-img-hover" src="_Content/images/HomePage/Vehicles-Section/prado-front-1.png" width="258" height="110"> </a>

                        <h3>Prado</h3>

                        <h4><span>حجم موتور: cc 4000</span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="/toyota-products/agentType/View/PropertyID/8">مشاهده</a></h5>
                    </div>
                    <!--<div class="fancybox thumb"> <a href="/toyota-products/agentType/View/PropertyID/9"><img alt="پرادو" class="vhc-img" src="https://www.toyota.com//imgix/content/common/img/jellies/homepage/2018/4runner-side.png?w=258&amp;dpr=1&amp;q=80&amp;fm=jpg&amp;lossless=false&amp;fit=max&amp;cs=strip&amp;bg=fff&amp;%20258w,/imgix/content/common/img/jellies/homepage/2018/4runner-side.png?w=516&amp;dpr=1&amp;q=80&amp;fm=jpg&amp;lossless=false&amp;fit=max&amp;cs=strip&amp;bg=fff&amp;%20516w,/imgix/content/common/img/jellies/homepage/2018/4runner-side.png?w=222&amp;dpr=1&amp;q=80&amp;fm=jpg&amp;lossless=false&amp;fit=max&amp;cs=strip&amp;bg=fff&amp;%20222w,/imgix/content/common/img/jellies/homepage/2018/4runner-side.png?w=444&amp;dpr=1&amp;q=80&amp;fm=jpg&amp;lossless=false&amp;fit=max&amp;cs=strip&amp;bg=fff&amp;%20444w" /><img alt="پرادو" class="vhc-img-hover" src="https://www.toyota.com//imgix/content/common/img/jellies/homepage/2018/4runner-front.png?w=258&amp;dpr=1&amp;q=80&amp;fm=jpg&amp;lossless=false&amp;fit=max&amp;cs=strip&amp;bg=fff&amp;%20258w,/imgix/content/common/img/jellies/homepage/2018/4runner-front.png?w=516&amp;dpr=1&amp;q=80&amp;fm=jpg&amp;lossless=false&amp;fit=max&amp;cs=strip&amp;bg=fff&amp;%20516w,/imgix/content/common/img/jellies/homepage/2018/4runner-front.png?w=222&amp;dpr=1&amp;q=80&amp;fm=jpg&amp;lossless=false&amp;fit=max&amp;cs=strip&amp;bg=fff&amp;%20222w,/imgix/content/common/img/jellies/homepage/2018/4runner-front.png?w=444&amp;dpr=1&amp;q=80&amp;fm=jpg&amp;lossless=false&amp;fit=max&amp;cs=strip&amp;bg=fff&amp;%20444w" /> </a> <h3>Prado 2 door</h3> <h4><span>حجم موتور: cc 2700</span><span>نوع سوخت: بنزینی</span></h4> <h5><a href="/toyota-products/agentType/View/PropertyID/9">مشاهده</a></h5> </div>-->

                    <div class="fancybox thumb">
                        <a href="/toyota-products/agentType/View/PropertyID/11">
                            <img alt="فورچونر" class="vhc-img" src="_Content/images/HomePage/Vehicles-Section/Fortuner-side-1.png" width="258" height="110">
                            <img alt="فورچونر" class="vhc-img-hover" src="_Content/images/HomePage/Vehicles-Section/Fortuner-front-1.png" width="258" height="110"> </a>

                        <h3>Fortuner</h3>

                        <h4><span>حجم موتور: cc 4000</span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="/toyota-products/agentType/View/PropertyID/11">مشاهده</a></h5>
                    </div>

                    <div class="fancybox thumb">
                        <a href="/toyota-products/agentType/View/PropertyID/12">
                            <img alt="لندکروزر" class="vhc-img" src="_Content/images/HomePage/Vehicles-Section/landcruiser-side.png" width="258" height="110">
                            <img alt="لندکروزر" class="vhc-img-hover" src="_Content/images/HomePage/Vehicles-Section/landcruiser-front.png" width="258" height="110"> </a>

                        <h3>Land Cruiser</h3>

                        <h4><span>حجم موتور: cc 4000</span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="/toyota-products/agentType/View/PropertyID/12">مشاهده</a></h5>
                    </div>

                    <div class="fancybox thumb">
                        <a href="/toyota-products/agentType/View/PropertyID/13">
                            <img alt="اف جی کروزر" class="vhc-img" src="_Content/images/HomePage/Vehicles-Section/FJ-Cruiser-side-1.png" width="258" height="110">
                            <img alt="اف جی کروزر" class="vhc-img-hover" src="_Content/images/HomePage/Vehicles-Section/FJ-Cruiser-front-1.png" width="258" height="110"> </a>

                        <h3>FJ Cruiser</h3>

                        <h4><span>حجم موتور: cc 4000</span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="/toyota-products/agentType/View/PropertyID/13">مشاهده</a></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="vehicles-tab-content">
            <div class="vehicles-accordion-header hd-closed"><span>خودروهای ون</span></div>

            <div class="thumbs-block is-closed">
                <div class="thumbs">
                    <div class="fancybox thumb">
                        <a href="/-محصولات/محصولات-تویوتا/agentType/View/PropertyID/14">
                            <img alt="هایس" class="vhc-img" src="_Content/images/HomePage/Vehicles-Section/Hiace-side.jpg" width="258" height="110">
                            <img alt="هایس" class="vhc-img-hover" src="_Content/images/HomePage/Vehicles-Section/Hiace-front.jpg" width="258" height="110"></a>

                        <h3>Hiace</h3>

                        <h4><span>حجم موتور: cc 2700</span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="/-محصولات/محصولات-تویوتا/agentType/View/PropertyID/14">مشاهده</a></h5>
                    </div>

                    <div class="fancybox thumb">
                        <a href="/toyota-products/agentType/View/PropertyID/15">
                            <img alt="پریویا" class="vhc-img" src="_Content/images/HomePage/Vehicles-Section/Previa-side.jpg" width="258" height="110">
                            <img alt="پریویا" class="vhc-img-hover" src="_Content/images/HomePage/Vehicles-Section/Previa-front.jpg" width="258" height="110"> </a>

                        <h3>Previa</h3>

                        <h4><span>حجم موتور: cc 2400</span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="/toyota-products/agentType/View/PropertyID/15">مشاهده</a></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="vehicles-tab-content">
            <div class="vehicles-accordion-header hd-closed"><span>خودروهای هیبرید</span></div>

            <div class="thumbs-block is-closed">
                <div class="thumbs">
                    <div class="fancybox thumb">
                        <a href="/toyota-products/agentType/View/PropertyID/104">
                            <img alt="پریوس" class="vhc-img" src="_Content/images/HomePage/Vehicles-Section/prius-side.png" width="258" height="110">
                            <img alt="پریوس" class="vhc-img-hover" src="_Content/images/HomePage/Vehicles-Section/prius-front.png" width="258" height="110"></a>

                        <h3>Prius</h3>

                        <h4><span>حجم موتور: cc 1800</span><span>نوع سوخت: بنزینی و برقی</span></h4>

                        <h5><a href="/toyota-products/agentType/View/PropertyID/104">مشاهده </a> <a href="/online-sales">خرید آنلاین</a></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="vehicles-tab-content">
            <div class="vehicles-accordion-header hd-closed"><span>خودروهای پیک آپ</span></div>

            <div class="thumbs-block is-closed">
                <div class="thumbs">
                    <div class="fancybox thumb">
                        <a href="/-محصولات/محصولات-تویوتا/agentType/View/PropertyID/7">
                            <img alt="هایلوکس" class="vhc-img" src="_Content/images/HomePage/Vehicles-Section/Hilux-side3.png" width="258" height="110">
                            <img alt="هایلوکس" class="vhc-img-hover" src="_Content/images/HomePage/Vehicles-Section/hilux-front-1.png" width="258" height="110"> </a>

                        <h3>Hilux</h3>

                        <h4><span>حجم موتور: cc 2700</span><span>نوع سوخت: بنزینی</span></h4>

                        <h5><a href="/-محصولات/محصولات-تویوتا/agentType/View/PropertyID/7">مشاهده</a> <a href="/online-sales">خرید آنلاین</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div><!-- End_Module_872 --></div>
</div>



</div>