<?php include('layouts/head-script.php'); ?>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--CDF(Css|/Portals/0/Skins/Irtoya1393/css/HomePage.css)-->
    <div class="body_bg">
        <div id="dnn_wrapper" style=" background: rgb(239, 240, 244) none repeat scroll 0 0;">
            <div class="wrapper" style="background:none !important;">
                <?php include('layouts/header.php'); ?>
                <div class="main-area">
                    <div class="Mian_Box" style="background-color:#fff;">
                        <div class="content_mid clearfix" style="padding:0;">
                            <section class="row-fluid">
                                <div class="span12">
                                    <div id="dnn_BannerPane" class="BannerPane DNNEmptyPane"></div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="Mian_Box">
                        <div class="dnn_layout">
                            <div class="content_mid clearfix">
                                <section class="row-fluid">
                                    <div class="span12">
                                        <div id="dnn_TopOutPane" class="TopOutPane DNNEmptyPane"></div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="Mian_Box_2" style="background: #fff; padding: 55px 0;">
                        <div class="dnn_layout">
                            <div class="content_mid clearfix">
                                <section class="row-fluid">
                                    <div class="span12">
                                        <div id="dnn_TopOutPaneA" class="TopOutPaneA"><div class="DnnModule DnnModule-DNN_HTML DnnModule-449"><a name="449"></a>
                                                <div class="White">
                                                    <div id="dnn_ctr449_ContentPane" class="contentpane"><!-- Start_Module_449 --><div id="dnn_ctr449_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
                                                            <div id="dnn_ctr449_HtmlModule_lblContent" class="Normal">
                                                                <div class="dealers_list_all"> <h1>لیست عاملیت ها </h1>
                                                                    <h4>فروش ، خدمات پس از فروش ، قطعات</h4>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- End_Module_449 -->
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="Mian_Box_2">
                        <div class="dnn_layout">
                            <div class="content_mid clearfix">
                                <section class="row-fluid">
                                    <div class="span12">
                                        <div id="dnn_TopOutPaneB" class="TopOutPaneB DNNEmptyPane"></div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="dnn_layout">
                        <section id="dnn_content">
                            <div class="content_mid clearfix">
                                <div class="pane_layout">
                                    <section class="row-fluid">
                                        <div class="span12">
                                            <div id="dnn_TopPane" class="TopPane DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span3">
                                            <div id="dnn_RowOne_Grid3_Pane" class="RowOne_Grid3_Pane"><div class="DnnModule DnnModule-DNN_HTML DnnModule-448"><a name="448"></a>
                                                    <div class="White">
                                                        <div id="dnn_ctr448_ContentPane" class="contentpane"><!-- Start_Module_448 --><div id="dnn_ctr448_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
                                                                <div id="dnn_ctr448_HtmlModule_lblContent" class="Normal">
                                                                    <div class="filter_box">فیلتر براساس ویژگی ها</div>
                                                                </div>

                                                            </div><!-- End_Module_448 --></div>
                                                    </div>



                                                </div><div class="DnnModule DnnModule-PropertyAgentSearch DnnModule-447"><a name="447"></a>
                                                    <div class="White">
                                                        <div id="dnn_ctr447_ContentPane" class="contentpane"><!-- Start_Module_447 -->
                                                            <meta http-equiv="Content-Type" content="text/html; charset=unicode">
                                                            <script>
                                                                $(document).ready(function () {
                                                                    $('#tblPropertySearchSmall tr#dnn_ctr447_SearchSmall_trTypes2 td:nth-child(1)').prepend('<label class="state"><span>استان مورد تقاضا : </span></label>');
                                                                    $('#tblPropertySearchSmall tr#dnn_ctr447_SearchSmall_trTypes2 td:nth-child(1)').prepend('<strong class="active_dealertype"><img alt="" src="/Portals/0/images/Icons/minus_icon.png" /></strong>');
                                                                    $('#tblPropertySearchSmall tr:nth-child(3) td.SubHead:nth-child(1)').prepend('<strong class="active_dealertype"><img alt="" src="/Portals/0/images/Icons/minus_icon.png" /></strong>');
                                                                    $('#tblPropertySearchSmall tr:nth-child(4) td.SubHead:nth-child(1)').prepend('<strong class="active_dealertype"><img alt="" src="/Portals/0/images/Icons/minus_icon.png" /></strong>');
                                                                    $("#dnn_ctr447_SearchSmall_rptDetails_102_4").wrapAll("<div class='rp_type_table'></div>");
                                                                    $("#dnn_ctr447_SearchSmall_rptDetails_104_46").wrapAll("<div class='service_type_table'></div>");
                                                                    $("#dnn_ctr447_SearchSmall_drpPropertyTypes").wrapAll("<div class='select-box'></div>");
                                                                    $("#dnn_ctr447_SearchSmall_rptDetails_102_3").wrapAll("<div class='select-box'></div>");
                                                                    $("#dnn_ctr447_SearchSmall_rptDetails_104_45").wrapAll("<div class='select-box'></div>");
                                                                    $('.sliding_page_items_box_speacial h3 strong').addClass("deactive_box");

                                                                    $('#tblPropertySearchSmall tr:nth-child(2) td strong').click(function () {
                                                                        if ($(this).hasClass("active_dealertype")) {
                                                                            $(this).parents("#dnn_ctr447_SearchSmall_trTypes2").find(".select-box").slideUp(300);
                                                                            $(this).removeClass("active_dealertype");
                                                                            $(this).addClass("deactive_dealertype");
                                                                            $(this).children().attr("src", "/Portals/0/images/Icons/plus_ic.png");
                                                                            return;
                                                                        }
                                                                        if ($(this).hasClass("deactive_dealertype")) {
                                                                            $(this).parents("#dnn_ctr447_SearchSmall_trTypes2").find(".select-box").slideDown(300);
                                                                            $(this).removeClass("deactive_dealertype");
                                                                            $(this).addClass("active_dealertype");
                                                                            $(this).children().attr("src", "/Portals/0/images/Icons/minus_icon.png");
                                                                            return;
                                                                        }
                                                                    });
                                                                    $('#tblPropertySearchSmall tr:nth-child(3) td.SubHead:nth-child(1) strong').click(function () {
                                                                        if ($(this).hasClass("active_dealertype")) {
                                                                            $(this).parent(".SubHead").find(".select-box").slideUp(300);
                                                                            $(this).removeClass("active_dealertype");
                                                                            $(this).addClass("deactive_dealertype");
                                                                            $(this).children().attr("src", "/Portals/0/images/Icons/plus_ic.png");
                                                                            return;
                                                                        }
                                                                        if ($(this).hasClass("deactive_dealertype")) {
                                                                            $(this).parent(".SubHead").find(".select-box").slideDown(300);
                                                                            $(this).removeClass("deactive_dealertype");
                                                                            $(this).addClass("active_dealertype");
                                                                            $(this).children().attr("src", "/Portals/0/images/Icons/minus_icon.png");
                                                                            return;
                                                                        }
                                                                    });
                                                                    $('#tblPropertySearchSmall tr:nth-child(4) td.SubHead:nth-child(1) strong').click(function () {
                                                                        if ($(this).hasClass("active_dealertype")) {
                                                                            $(this).parent(".SubHead").find(".select-box").slideUp(300);
                                                                            $(this).removeClass("active_dealertype");
                                                                            $(this).addClass("deactive_dealertype");
                                                                            $(this).children().attr("src", "/Portals/0/images/Icons/plus_ic.png");
                                                                            return;
                                                                        }
                                                                        if ($(this).hasClass("deactive_dealertype")) {
                                                                            $(this).parent(".SubHead").find(".select-box").slideDown(300);
                                                                            $(this).removeClass("deactive_dealertype");
                                                                            $(this).addClass("active_dealertype");
                                                                            $(this).children().attr("src", "/Portals/0/images/Icons/minus_icon.png");
                                                                            return;
                                                                        }
                                                                    });
                                                                });
                                                            </script>

                                                            <!--<div class="dealertype_title">
                                                                <strong class="active_dealertype">
                                                                    <img alt="" src="/Portals/0/images/Icons/minus_icon.png" />
                                                                </strong>
                                                                نوع نمایندگی
                                                            </div>-->
                                                            <div id="dnn_ctr447_ModuleContent" class="DNNModuleContent ModPropertyAgentSearchC">
                                                                <div id="dnn_ctr447_SearchSmall_pnlSearch_UP">
                                                                    <div id="dnn_ctr447_SearchSmall_pnlSearch" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'dnn_ctr447_SearchSmall_cmdSearch')">



                                                                        <table id="tblPropertySearchSmall" cellspacing="2" cellpadding="2" width="100%" summary="Property Design Table" border="0">
                                                                            <tbody><tr id="dnn_ctr447_SearchSmall_trTypes" valign="top">
                                                                                <td class="SubHead" width="150" valign="middle">
                                                                                    <label id="dnn_ctr447_SearchSmall_lblTypes">

                                                                                        <span id="dnn_ctr447_SearchSmall_lblLabelTypes">استان</span>
                                                                                    </label>
                                                                                    <div id="dnn_ctr447_SearchSmall_pnlHelpTypes" class="Help" style="display:none;">

                                                                                        <span id="dnn_ctr447_SearchSmall_lblHelpTypes">يك استان را جهت جستجو انتخاب نماييد.</span>

                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr id="dnn_ctr447_SearchSmall_trTypes2">
                                                                                <td align="left"><strong class="active_dealertype"><img alt="" src="/Portals/0/images/Icons/minus_icon.png"></strong><label class="state"><span>استان مورد تقاضا : </span></label>
                                                                                    <div class="select-box"><select name="dnn$ctr447$SearchSmall$drpPropertyTypes" id="dnn_ctr447_SearchSmall_drpPropertyTypes" class="NormalTextBox" style="width:200px;">
                                                                                            <option value="-1">&lt;انتخاب استان&gt;</option>
                                                                                            <option value="8">آذربایجان شرقی (2)</option>
                                                                                            <option value="9">آذربایجان غربی (1)</option>
                                                                                            <option value="10">اردبیل (2)</option>
                                                                                            <option value="11">اصفهان (7)</option>
                                                                                            <option value="12">البرز (2)</option>
                                                                                            <option value="13">ایلام (0)</option>
                                                                                            <option value="14">بوشهر (1)</option>
                                                                                            <option value="15">تهران (24)</option>
                                                                                            <option value="16">چهارمحال و بختیاری (0)</option>
                                                                                            <option value="17">خراسان جنوبی (0)</option>
                                                                                            <option value="18">خراسان رضوی (4)</option>
                                                                                            <option value="19">خراسان شمالی (0)</option>
                                                                                            <option value="20">خوزستان (2)</option>
                                                                                            <option value="21">زنجان (3)</option>
                                                                                            <option value="22">سمنان (1)</option>
                                                                                            <option value="23">سیستان و بلوچستان (1)</option>
                                                                                            <option value="24">فارس (4)</option>
                                                                                            <option value="25">قزوین (3)</option>
                                                                                            <option value="26">قم (1)</option>
                                                                                            <option value="27">کردستان (0)</option>
                                                                                            <option value="28">کرمان (3)</option>
                                                                                            <option value="29">کرمانشاه (2)</option>
                                                                                            <option value="30">کهگیلویه و بویراحمد (0)</option>
                                                                                            <option value="31">گلستان (1)</option>
                                                                                            <option value="32">گیلان (2)</option>
                                                                                            <option value="33">لرستان (1)</option>
                                                                                            <option value="34">مازندران (11)</option>
                                                                                            <option value="35">هرمزگان (5)</option>
                                                                                            <option value="36">همدان (2)</option>
                                                                                            <option value="37">یزد (3)</option>
                                                                                            <option value="38">مرکزی (0)</option>

                                                                                        </select></div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr valign="top">
                                                                                <td class="SubHead" valign="middle" align="left"><strong class="active_dealertype"><img alt="" src="/Portals/0/images/Icons/minus_icon.png"></strong>
                                                                                    <label id="dnn_ctr447_SearchSmall_rptDetails_label_3">

                                                                                        <span id="dnn_ctr447_SearchSmall_rptDetails_lblLabel_3">نوع عاملیت:</span>
                                                                                    </label>
                                                                                    <div id="dnn_ctr447_SearchSmall_rptDetails_pnlHelp_3" class="Help" style="display:none;">

                                                                                        <span id="dnn_ctr447_SearchSmall_rptDetails_lblHelp_3">نوع عاملیت خود را انتخاب نمایید.</span>

                                                                                    </div><br>
                                                                                    <div class="select-box"><table id="dnn_ctr447_SearchSmall_rptDetails_102_3" class="Normal">
                                                                                            <tbody><tr>
                                                                                                <td><input id="dnn_ctr447_SearchSmall_rptDetails_102_3_0_3" type="radio" name="dnn$ctr447$SearchSmall$rptDetails$ctl03$102" value="عاملیت"><label for="dnn_ctr447_SearchSmall_rptDetails_102_3_0_3">عاملیت</label></td><td><input id="dnn_ctr447_SearchSmall_rptDetails_102_3_1_3" type="radio" name="dnn$ctr447$SearchSmall$rptDetails$ctl03$102" value="شعبه"><label for="dnn_ctr447_SearchSmall_rptDetails_102_3_1_3">شعبه</label></td><td></td><td></td>
                                                                                            </tr>
                                                                                            </tbody></table></div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr valign="top">
                                                                                <td class="SubHead" valign="middle" align="left"><strong class="active_dealertype"><img alt="" src="/Portals/0/images/Icons/minus_icon.png"></strong>
                                                                                    <label id="dnn_ctr447_SearchSmall_rptDetails_label_45">

                                                                                        <span id="dnn_ctr447_SearchSmall_rptDetails_lblLabel_45">نوع خدمات:</span>
                                                                                    </label>
                                                                                    <div id="dnn_ctr447_SearchSmall_rptDetails_pnlHelp_45" class="Help" style="display:none;">

                                                                                        <span id="dnn_ctr447_SearchSmall_rptDetails_lblHelp_45">نوع نمایندگی را انتخاب نمایید.</span>

                                                                                    </div><br>
                                                                                    <div class="select-box"><table id="dnn_ctr447_SearchSmall_rptDetails_104_45" class="Normal">
                                                                                            <tbody><tr>
                                                                                                <td><input id="dnn_ctr447_SearchSmall_rptDetails_104_45_0_45" type="checkbox" name="dnn$ctr447$SearchSmall$rptDetails$ctl45$104$0" value="فروش"><label for="dnn_ctr447_SearchSmall_rptDetails_104_45_0_45">فروش</label></td>
                                                                                            </tr><tr>
                                                                                                <td><input id="dnn_ctr447_SearchSmall_rptDetails_104_45_1_45" type="checkbox" name="dnn$ctr447$SearchSmall$rptDetails$ctl45$104$1" value="خدمات پس از فروش"><label for="dnn_ctr447_SearchSmall_rptDetails_104_45_1_45">خدمات پس از فروش</label></td>
                                                                                            </tr><tr>
                                                                                                <td><input id="dnn_ctr447_SearchSmall_rptDetails_104_45_2_45" type="checkbox" name="dnn$ctr447$SearchSmall$rptDetails$ctl45$104$2" value="قطعات"><label for="dnn_ctr447_SearchSmall_rptDetails_104_45_2_45">قطعات</label></td>
                                                                                            </tr>
                                                                                            </tbody></table></div>
                                                                                </td>
                                                                            </tr>

                                                                            </tbody></table>
                                                                        <p align="center">
                                                                            <a id="dnn_ctr447_SearchSmall_cmdSearch" title="جستجو" class="CommandButton" href="javascript:__doPostBack('dnn$ctr447$SearchSmall$cmdSearch','')" style="display:inline-block;border-style:None;">جستجو</a>
                                                                        </p>



                                                                    </div><div id="dnn_ctr447_SearchSmall_pnlSearch_UP_Prog" style="display:none;" role="status" aria-hidden="true">
                                                                        <img src="/images/progressbar.gif" alt="ProgressBar">
                                                                    </div>
                                                                </div>

                                                            </div><!-- End_Module_447 -->
                                                        </div>
                                                    </div>



                                                </div></div>
                                        </div>
                                        <div class="span9">
                                            <div id="dnn_RowOne_Grid9_Pane" class="RowOne_Grid9_Pane">
                                                <div class="DnnModule DnnModule-PropertyAgent DnnModule-445">
                                                    <a name="445"></a>
                                                    <div class="White">
                                                        <div id="dnn_ctr445_ContentPane" class="contentpane">
                                                            <!-- Start_Module_445 -->
                                                            <div id="dnn_ctr445_ModuleContent" class="DNNModuleContent ModPropertyAgentC">



                                                                <div class="Normal">
                                                                    <?php
                                                                    $ameliatId = $_GET['id'];
                                                                    $resultameliat = $db->select("agencies","`id` = '$ameliatId'");
                                                                    foreach($resultameliat as $rowameliat)
                                                                    {
                                                                    ?>
                                                                    <div class="dealer_view_template">
                                                                        <div class="dealer_view_template_row1">
                                                                            <div class="box_photos_all">
                                                                                <div class="larg_picture">
                                                                                    <img src="adminpanel/uploads/agencyes/<?php echo $rowameliat['image']; ?>"
                                                                                             width="250" height="350"
                                                                                         alt="Daisy on the Ohoopee"
                                                                                         class="first_img_zoom">
                                                                                </div>

                                                                            </div>
                                                                            <div class="dealer_info_view">
                                                                                <div class="dealer_info_view_title">
                                                                                    <h1><?php echo $rowameliat['title']; ?></h1>
                                                                                    <div class="dealer_info_view_title_subtitle">
                                                                                        <h2>فروش</h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product_Description">
                                                                                    <strong><img alt=""
                                                                                                 src="/Portals/0/images/Icons/cus_icon1.png">
                                                                                        شهر : </strong><?php echo $rowameliat['city']; ?>
                                                                                </div>
                                                                                <div class="product_Description">
                                                                                    <strong><img alt=""
                                                                                                 src="/Portals/0/images/Icons/cus_icon2.png">
                                                                                        نام عاملیت : </strong><?php echo $rowameliat['title']; ?>
                                                                                    میرداماد
                                                                                </div>

                                                                                <div class="product_Description">
                                                                                    <strong><img alt=""
                                                                                                 src="/Portals/0/images/Icons/cus_icon3.png">
                                                                                        آدرس : </strong><?php echo $rowameliat['address']; ?> ولیعصر
                                                                                </div>
                                                                                <div class="product_Description">
                                                                                    <strong><img alt=""
                                                                                                 src="/Portals/0/images/Icons/cus_icon4.png">
                                                                                        کد شهر : </strong><?php echo $rowameliat['city_code']; ?>
                                                                                </div>
                                                                                <div class="product_Description">
                                                                                    <strong><img alt=""
                                                                                                 src="/Portals/0/images/Icons/cus_icon5.png">
                                                                                        شماره تماس : </strong><?php echo $rowameliat['call_number']; ?>
                                                                                </div>
                                                                                <div class="product_Description">
                                                                                    <strong><img alt=""
                                                                                                 src="/Portals/0/images/Icons/cus_icon6.png">
                                                                                        فکس : </strong> <?php echo $rowameliat['fax']; ?>
                                                                                </div>

                                                                                <div class="product_Description">
                                                                                    <strong><img alt=""
                                                                                                 src="/Portals/0/images/Icons/cus_icon11.png">
                                                                                        کدپستی : </strong><?php echo $rowameliat['postal_code']; ?>
                                                                                </div>
                                                                                <div class="product_Description">
                                                                                    <strong><img alt=""
                                                                                                 src="/Portals/0/images/Icons/cus_icon8.png">
                                                                                        پست الکترونیک : </strong><?php echo $rowameliat['email']; ?>
                                                                                </div>

                                                                                <div class="product_Description">
                                                                                    <strong><img alt=""
                                                                                                 src="/Portals/0/images/Icons/cus_icon10.png">
                                                                                        ساعات کار : </strong><?php echo $rowameliat['hourse_work']; ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dealer_view_template_row2">
                                                                            <div class="dealer_view_contetnt_tab">
                                                                                <h1 class="dealer_contetnt_tab_active">
                                                                                    نظرات و پیشنهادات</h1>

                                                                            </div>
                                                                            <div class="dealer_view_tab_txt_all">
                                                                                <div class="dealer_contetnt_tab_txt1">
                                                                                    <h1>انتقادات و پیشنهادات
                                                                                        <hr>
                                                                                    </h1>
                                                                                    <div class="dealer_view_form_comment">
                                                                                        <img src="/Portals/0/images/Icons/opinion_photo.png"
                                                                                             alt="">لطفا نظرات و
                                                                                        پیشنهادات خود را درباره ی عاملیت
                                                                                        فوق با ما در میان بگذارید.
                                                                                    </div>
                                                                                    <table id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_tblCommentForm"
                                                                                           style="width:350px;">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <table id="tblCommentFormDesign"
                                                                                                       cellspacing="2"
                                                                                                       cellpadding="2"
                                                                                                       summary="CommentForm Design Table"
                                                                                                       border="0"
                                                                                                       width="100%">

                                                                                                    <tbody>
                                                                                                    <tr valign="top">
                                                                                                        <td class="SubHead"
                                                                                                            valign="middle"
                                                                                                            nowrap="">
                                                                                                            <label id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_label_0">
                                                                                                                <a onclick="if (__dnn_SectionMaxMin(this,  'dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_pnlHelp_0')) return false;"
                                                                                                                   id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_cmdHelp_0"
                                                                                                                   tabindex="-1"
                                                                                                                   href="javascript:__doPostBack('dnn$ctr445$Default$ViewProperty$PropertyAgent-840127-140$rptDetails$ctl00$cmdHelp','')"><img
                                                                                                                            id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_imgHelp_0"
                                                                                                                            tabindex="-1"
                                                                                                                            src="/images/help.gif"
                                                                                                                            alt="نام خود را درج نمایید"></a>
                                                                                                                <span id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_lblLabel_0">نام:</span>
                                                                                                            </label>
                                                                                                            <div id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_pnlHelp_0"
                                                                                                                 class="Help"
                                                                                                                 style="display:none;">

                                                                                                                <span id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_lblHelp_0">نام خود را درج نمایید</span>

                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td width="100%">
                                                                                                            <input name="dnn$ctr445$Default$ViewProperty$PropertyAgent-840127-140$rptDetails$ctl00$0"
                                                                                                                   type="text"
                                                                                                                   id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_0_0"
                                                                                                                   class="NormalTextBox"
                                                                                                                   style="width:100%;"><span
                                                                                                                    id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_ctl00_0"
                                                                                                                    class="NormalRed"
                                                                                                                    style="display:none;"><br>الزامی می&zwnj;باشد</span>
                                                                                                        </td>
                                                                                                    </tr>

                                                                                                    <tr valign="top">
                                                                                                        <td class="SubHead"
                                                                                                            valign="middle"
                                                                                                            nowrap="">
                                                                                                            <label id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_label_1">
                                                                                                                <a onclick="if (__dnn_SectionMaxMin(this,  'dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_pnlHelp_1')) return false;"
                                                                                                                   id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_cmdHelp_1"
                                                                                                                   tabindex="-1"
                                                                                                                   href="javascript:__doPostBack('dnn$ctr445$Default$ViewProperty$PropertyAgent-840127-140$rptDetails$ctl01$cmdHelp','')">
                                                                                                                    <img
                                                                                                                            id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_imgHelp_1"
                                                                                                                            tabindex="-1"
                                                                                                                            src="/images/help.gif"
                                                                                                                            alt="ایمیل شما">
                                                                                                                </a>
                                                                                                                <span id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_lblLabel_1">ایمیل (نمایش داده نمی&zwnj;شود):</span>
                                                                                                            </label>
                                                                                                            <div id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_pnlHelp_1"
                                                                                                                 class="Help"
                                                                                                                 style="display:none;">

                                                                                                                <span id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_lblHelp_1">ایمیل شما</span>

                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td width="100%">
                                                                                                            <input name="dnn$ctr445$Default$ViewProperty$PropertyAgent-840127-140$rptDetails$ctl01$1"
                                                                                                                   type="text"
                                                                                                                   id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_1_1"
                                                                                                                   class="NormalTextBox"
                                                                                                                   style="width:100%;"><span
                                                                                                                    id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_ctl00_1"
                                                                                                                    class="NormalRed"
                                                                                                                    style="display:none;"><br>ایمیل درج شده با فرمت صحیح نمی&zwnj;باشد.</span>
                                                                                                        </td>
                                                                                                    </tr>

                                                                                                    <tr valign="top">
                                                                                                        <td class="SubHead"
                                                                                                            valign="middle"
                                                                                                            nowrap="">
                                                                                                            <label id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_label_2">
                                                                                                                <a onclick="if (__dnn_SectionMaxMin(this,  'dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_pnlHelp_2')) return false;"
                                                                                                                   id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_cmdHelp_2"
                                                                                                                   tabindex="-1"
                                                                                                                   href="javascript:__doPostBack('dnn$ctr445$Default$ViewProperty$PropertyAgent-840127-140$rptDetails$ctl02$cmdHelp','')"><img
                                                                                                                            id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_imgHelp_2"
                                                                                                                            tabindex="-1"
                                                                                                                            src="/images/help.gif"
                                                                                                                            alt="لطفا آدرس وب سایت یا صفحه اینترنتی خود را درج نمایید."></a>
                                                                                                                <span id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_lblLabel_2">وب&zwnj;سایت:</span>
                                                                                                            </label>
                                                                                                            <div id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_pnlHelp_2"
                                                                                                                 class="Help"
                                                                                                                 style="display:none;">

                                                                                                                <span id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_lblHelp_2">لطفا آدرس وب سایت یا صفحه اینترنتی خود را درج نمایید.</span>

                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td width="100%">
                                                                                                            <input name="dnn$ctr445$Default$ViewProperty$PropertyAgent-840127-140$rptDetails$ctl02$2"
                                                                                                                   type="text"
                                                                                                                   id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_2_2"
                                                                                                                   class="NormalTextBox"
                                                                                                                   style="width:100%;">
                                                                                                        </td>
                                                                                                    </tr>

                                                                                                    <tr valign="top">
                                                                                                        <td class="SubHead"
                                                                                                            valign="middle"
                                                                                                            nowrap="">
                                                                                                            <label id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_label_3">
                                                                                                                <a onclick="if (__dnn_SectionMaxMin(this,  'dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_pnlHelp_3')) return false;"
                                                                                                                   id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_cmdHelp_3"
                                                                                                                   tabindex="-1"
                                                                                                                   href="javascript:__doPostBack('dnn$ctr445$Default$ViewProperty$PropertyAgent-840127-140$rptDetails$ctl03$cmdHelp','')"><img
                                                                                                                            id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_imgHelp_3"
                                                                                                                            tabindex="-1"
                                                                                                                            src="/images/help.gif"
                                                                                                                            alt="لطفا نظر خود در این قسمت ارسال نمایید."></a>
                                                                                                                <span id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_lblLabel_3">نظر:</span>
                                                                                                            </label>
                                                                                                            <div id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_pnlHelp_3"
                                                                                                                 class="Help"
                                                                                                                 style="display:none;">

                                                                                                                <span id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_lblHelp_3">لطفا نظر خود در این قسمت ارسال نمایید.</span>

                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td width="100%">
                                                                                                            <textarea
                                                                                                                    name="dnn$ctr445$Default$ViewProperty$PropertyAgent-840127-140$rptDetails$ctl03$3"
                                                                                                                    rows="5"
                                                                                                                    cols="20"
                                                                                                                    id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_3_3"
                                                                                                                    class="NormalTextBox"
                                                                                                                    style="width:100%;"></textarea><span
                                                                                                                    id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_ctl00_3"
                                                                                                                    class="NormalRed"
                                                                                                                    style="display:none;"><br>الزامی می&zwnj;باشد</span>
                                                                                                        </td>
                                                                                                    </tr>

                                                                                                    <tr valign="top">
                                                                                                        <td class="SubHead"
                                                                                                            valign="middle"
                                                                                                            nowrap="">
                                                                                                            <label id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_label_4">
                                                                                                                <a onclick="if (__dnn_SectionMaxMin(this,  'dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_pnlHelp_4')) return false;"
                                                                                                                   id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_cmdHelp_4"
                                                                                                                   tabindex="-1"
                                                                                                                   href="javascript:__doPostBack('dnn$ctr445$Default$ViewProperty$PropertyAgent-840127-140$rptDetails$ctl04$cmdHelp','')"><img
                                                                                                                            id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_imgHelp_4"
                                                                                                                            tabindex="-1"
                                                                                                                            src="/images/help.gif"
                                                                                                                            alt="در صورت تمایل به پیگیری نظرات دیگر کاربران، این گزینه را انتخاب نمایید.
نظرات دیگر کاربران از طریق ایمیل به اطلاع شما می&zwnj;رسد."></a>
                                                                                                                <span id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_lblLabel_4">یادآوری؟:</span>
                                                                                                            </label>
                                                                                                            <div id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_pnlHelp_4"
                                                                                                                 class="Help"
                                                                                                                 style="display:none;">

					                <span id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_lblHelp_4">در صورت تمایل به پیگیری نظرات دیگر کاربران، این گزینه را انتخاب نمایید.

نظرات دیگر کاربران از طریق ایمیل به اطلاع شما می&zwnj;رسد.</span>

                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td width="100%">
                                                                                                            <span class="NormalTextBox"><input
                                                                                                                        id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_rptDetails_4_4"
                                                                                                                        type="checkbox"
                                                                                                                        name="dnn$ctr445$Default$ViewProperty$PropertyAgent-840127-140$rptDetails$ctl04$4"></span>
                                                                                                        </td>
                                                                                                    </tr>

                                                                                                    <tr valign="top">
                                                                                                        <td colspan="2"
                                                                                                            align="center">
                                                                                                            <a id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_cmdSubmit"
                                                                                                               class="CommandButton"
                                                                                                               href='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("dnn$ctr445$Default$ViewProperty$PropertyAgent-840127-140$cmdSubmit", "", true, "PropertyAgent-840-Comment", "", false, true))'
                                                                                                               style="display:inline-block;border-style:None;">ارسال</a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr valign="top">
                                                                                                        <td colspan="2"
                                                                                                            align="center">
                                                                                                            <span id="dnn_ctr445_Default_ViewProperty_PropertyAgent-840127-140_lblSubmitResults"
                                                                                                                  class="NormalRed"></span>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                                }
                                                                    ?>



                                                            </div><!-- End_Module_445 --></div>
                                                    </div>



                                                </div></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span4">
                                            <div id="dnn_RowTwo_Grid4_Pane" class="RowTwo_Grid4_Pane DNNEmptyPane"></div>
                                        </div>
                                        <div class="span8">
                                            <div id="dnn_RowTwo_Grid8_Pane" class="RowTwo_Grid8_Pane DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span5">
                                            <div id="dnn_RowThree_Grid5_Pane" class="RowThree_Grid5_Pane DNNEmptyPane"></div>
                                        </div>
                                        <div class="span7">
                                            <div id="dnn_RowThree_Grid7_Pane" class="RowThree_Grid7_Pane DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span6">
                                            <div id="dnn_RowFour_Grid6_Pane1" class="RowFour_Grid6_Pane1 DNNEmptyPane"></div>
                                        </div>
                                        <div class="span6">
                                            <div id="dnn_RowFour_Grid6_Pane2" class="RowFour_Grid6_Pane2 DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span7">
                                            <div id="dnn_RowFive_Grid7_Pane" class="RowFive_Grid7_Pane DNNEmptyPane"></div>
                                        </div>
                                        <div class="span5">
                                            <div id="dnn_RowFive_Grid5_Pane" class="RowFive_Grid5_Pane DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span8">
                                            <div id="dnn_RowSix_Grid8_Pane" class="RowSix_Grid8_Pane DNNEmptyPane"></div>
                                        </div>
                                        <div class="span4">
                                            <div id="dnn_RowSix_Grid4_Pane" class="RowSix_Grid4_Pane DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span9">
                                            <div id="dnn_RowSeven_Grid9_Pane" class="RowSeven_Grid9_Pane DNNEmptyPane"></div>
                                        </div>
                                        <div class="span3">
                                            <div id="dnn_RowSeven_Grid3_Pane" class="RowSeven_Grid3_Pane DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span4">
                                            <div id="dnn_RowEight_Grid4_Pane1" class="RowEight_Grid4_Pane1 DNNEmptyPane"></div>
                                        </div>
                                        <div class="span4">
                                            <div id="dnn_RowEight_Grid4_Pane2" class="RowEight_Grid4_Pane2 DNNEmptyPane"></div>
                                        </div>
                                        <div class="span4">
                                            <div id="dnn_RowEight_Grid4_Pane3" class="RowEight_Grid4_Pane3 DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span3">
                                            <div id="dnn_RowNine_Grid3_Pane1" class="RownNine_Grid3_Pane1 DNNEmptyPane"></div>
                                        </div>
                                        <div class="span3">
                                            <div id="dnn_RowNine_Grid3_Pane2" class="RowNine_Grid3_Pane2 DNNEmptyPane"></div>
                                        </div>
                                        <div class="span3">
                                            <div id="dnn_RowNine_Grid3_Pane3" class="RowNine_Grid3_Pane3 DNNEmptyPane"></div>
                                        </div>
                                        <div class="span3">
                                            <div id="dnn_RowNine_Grid3_Pane4" class="RowNine_Grid3_Pane4 DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span12">
                                            <div id="dnn_ContentPane" class="ContentPane DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span4">
                                            <div id="dnn_RowTen_Grid4_Pane1" class="RowTen_Grid4_Pane1 DNNEmptyPane"></div>
                                        </div>
                                        <div class="span4">
                                            <div id="dnn_RowTen_Grid4_Pane2" class="RowTen_Grid4_Pane2 DNNEmptyPane"></div>
                                        </div>
                                        <div class="span4">
                                            <div id="dnn_RowTen_Grid4_Pane3" class="RowTen_Grid4_Pane3 DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span9">
                                            <div id="dnn_RowEleven_Grid9_Pane" class="RowEleven_Grid9_Pane DNNEmptyPane"></div>
                                        </div>
                                        <div class="span3">
                                            <div id="dnn_RowEleven_Grid3_Pane" class="RowEleven_Grid3_Pane DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span8">
                                            <div id="dnn_RowTwelve_Grid8_Pane" class="RowTwelve_Grid8_Pane DNNEmptyPane"></div>
                                        </div>
                                        <div class="span4">
                                            <div id="dnn_RowTwelve_Grid4_Pane" class="RowTwelve_Grid4_Pane DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span7">
                                            <div id="dnn_RowThirteen_Grid7_Pane" class="RowThirteen_Grid7_Pane DNNEmptyPane"></div>
                                        </div>
                                        <div class="span5">
                                            <div id="dnn_RowThirteen_Grid5_Pane" class="RowThirteen_Grid5_Pane DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span6">
                                            <div id="dnn_RowFourteen_Grid6_Pane1" class="RowFourteen_Grid6_Pane1 DNNEmptyPane"></div>
                                        </div>
                                        <div class="span6">
                                            <div id="dnn_RowFourteen_Grid6_Pane2" class="RowFourteen_Grid6_Pane2 DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span5">
                                            <div id="dnn_RowFifteen_Grid5_Pane" class="RowFifteen_Grid5_Pane DNNEmptyPane"></div>
                                        </div>
                                        <div class="span7">
                                            <div id="dnn_RowFifteen_Grid7_Pane" class="RowFifteen_Grid7_Pane DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span4">
                                            <div id="dnn_RowSixteen_Grid4_Pane" class="RowSixteen_Grid4_Pane DNNEmptyPane"></div>
                                        </div>
                                        <div class="span8">
                                            <div id="dnn_RowSixteen_Grid8_Pane" class="RowSixteen_Grid8_Pane DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <section class="row-fluid">
                                        <div class="span3">
                                            <div id="dnn_RowSeventeen_Grid3_Pane" class="RowSeventeen_Grid3_Pane DNNEmptyPane"></div>
                                        </div>
                                        <div class="span9">
                                            <div id="dnn_RowSeventeen_Grid9_Pane" class="RowSeventeen_Grid9_Pane DNNEmptyPane"></div>
                                        </div>
                                    </section>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <div id="dnn_BottomPane" class="BottomPane DNNEmptyPane"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- Footer -->
                <!-- Footer -->
                <?php include('layouts/footer.php');  ?>
                <!-- Footer End -->
                <!-- Footer End -->
            </div>
        </div>
    </div>
<?php  include('layouts/footer-script.php'); ?>