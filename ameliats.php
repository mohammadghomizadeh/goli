<?php include('layouts/head-script.php'); ?>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--CDF(Css|/Portals/0/Skins/Irtoya1393/css/HomePage.css)-->
    <div class="body_bg">
        <div id="dnn_wrapper" style=" background: rgb(239, 240, 244) none repeat scroll 0 0;">
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
                                                                <div class="dealers_list_all"> <h1>لیست عاملیت ها </h1> <h4>فروش ، خدمات پس از فروش ، قطعات</h4> </div>
                                                            </div>

                                                        </div><!-- End_Module_449 --></div>
                                                </div>



                                            </div></div>
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

                                                            </div><!-- End_Module_447 --></div>
                                                    </div>



                                                </div></div>
                                        </div>
                                        <!--Start-List-Ameliat-->
                                        <div class="span9">
                                            <div id="dnn_RowOne_Grid9_Pane" class="RowOne_Grid9_Pane"><div class="DnnModule DnnModule-PropertyAgent DnnModule-445"><a name="445"></a>
                                                    <div class="White">
                                                        <div id="dnn_ctr445_ContentPane" class="contentpane"><!-- Start_Module_445 --><div id="dnn_ctr445_ModuleContent" class="DNNModuleContent ModPropertyAgentC">

                                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                                    <tbody><tr>
                                                                        <td align="left" valign="middle">
                                                                        </td>
                                                                        <td align="right">




                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="5" colspan="2"></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                                <div id="dnn_ctr445_Default_LandingPage_pnlSearch">
                                                                    <!--Start-Template-Ameliyat-->
                                                                    <?php
                                                                    $resultamel = $db->select("agencies");
                                                                    foreach($resultamel as $rowamel)
                                                                    {


                                                                        ?>
                                                                        <div class="product_template">
                                                                            <a href="ameliat-single.php?id=">
                                                                                <div class="product_img"
                                                                                     style="background: url('adminpanel/uploads/agencyes/<?php echo $rowamel['image']; ?>'); background-position: center center;">

                                                                                </div>
                                                                            </a>

                                                                            <div class="product_title">
                                                                                <?php echo $rowamel['type_service']; ?>

                                                                            </div>
                                                                            <div class="product_Description"><h2>شهر
                                                                                    : </h2>
                                                                                <h1> <?php echo $rowamel['city']; ?></h1>
                                                                            </div>
                                                                            <div class="product_Description"><h2>نام
                                                                                    عاملیت: </h2>
                                                                                <h1><?php echo $rowamel['title']; ?></h1>
                                                                            </div>
                                                                            <div class="product_Description"><h2>کد شهر
                                                                                    : </h2>
                                                                                <h1><?php echo $rowamel['city_code']; ?></h1></div>
                                                                            <div class="product_Description"><h2>شماره
                                                                                    تماس : </h2>
                                                                                <h1><?php echo $rowamel['call_number']; ?></h1></div>
                                                                            <div class="product_buttons">
                                                                                <a href="ameliat-single.php?id=<?php echo $rowamel['id']; ?>" class="view"><img alt="" src="_Content/images/Icons/view_detail.png">مشاهده
                                                                                    جزییات</a>
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
                                            <a href="#"><div class="social_icon5 animation bounceIn1"></div></a>
                                            <a href="#"><div class="social_icon4 animation bounceIn2"></div></a>
                                            <a href="http://Telegram.me/irtoya_toyota_iran"><div class="social_icon6 animation bounceIn3"></div></a>
                                            <!--<a href="#"><div class="social_icon3 animation bounceIn3"></div></a>-->
                                            <a href="#"><div class="social_icon2 animation bounceIn4"></div></a>
                                            <a href="#"><div class="social_icon1 animation bounceIn4"></div></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Footer_Contentbg">
                                <div class="dnn_layout">
                                    <div class="row-fluid">
                                        <div class="span3">
                                            <div id="dnn_FootPaneA" class="FootPaneA"><div class="DnnModule DnnModule-DNN_HTML DnnModule-863"><a name="863"></a>
                                                    <div class="White">
                                                        <div id="dnn_ctr863_ContentPane" class="contentpane"><!-- Start_Module_863 --><div id="dnn_ctr863_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
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
                                            <div id="dnn_FootPaneB" class="FootPaneB"><div class="DnnModule DnnModule-DNN_HTML DnnModule-864"><a name="864"></a>
                                                    <div class="White">
                                                        <div id="dnn_ctr864_ContentPane" class="contentpane"><!-- Start_Module_864 --><div id="dnn_ctr864_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
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



                                                </div><div class="DnnModule DnnModule-DNN_HTML DnnModule-865"><a name="865"></a>
                                                    <div class="White">
                                                        <div id="dnn_ctr865_ContentPane" class="contentpane"><!-- Start_Module_865 --><div id="dnn_ctr865_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
                                                                <div id="dnn_ctr865_HtmlModule_lblContent" class="Normal">
                                                                    <div class="footer-links"> <div class="footer-links-col"> <h3>اطلاعات تماس<button><span></span><span></span></button></h3> <ul> <li>دفتر و نمایشگاه مرکزی: 02173451</li> <li>خدمات پس از فروش: 02173456</li> <li>آدرس:ابتدای جاده دماوند</li> <li><a href="/نمایندگی-ها/لیست-نمایندگی-ها">عاملیت ها</a></li> <li><a href="/دربارهما/تماسباما">شعب</a></li> </ul> </div> </div>
                                                                </div>

                                                            </div><!-- End_Module_865 --></div>
                                                    </div>



                                                </div></div>
                                        </div>
                                        <div class="span3">
                                            <div id="dnn_FootPaneC" class="FootPaneC"><div class="DnnModule DnnModule-DNN_HTML DnnModule-866"><a name="866"></a>
                                                    <div class="White">
                                                        <div id="dnn_ctr866_ContentPane" class="contentpane"><!-- Start_Module_866 --><div id="dnn_ctr866_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
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
                                    <div id="to_top"><span><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="201.000000pt" height="300.000000pt" viewBox="0 0 201.000000 300.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none"><path d="M10 2875 l0 -125 995 0 995 0 0 125 0 125 -995 0 -995 0 0 -125z"></path><path d="M594 2099 c-208 -215 -380 -394 -382 -398 -1 -3 36 -44 83 -91 l85 -85 245 245 245 245 0 -1003 0 -1002 125 0 125 0 0 995 c0 547 3 995 8 995 4 0 113 -106 242 -235 l235 -235 82 82 c46 46 83 87 83 93 0 9 -774 776 -790 783 -3 1 -177 -174 -386 -389z"></path></g></svg></span></div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- Footer End -->
            </div>
        </div>
    </div>
<?php include('layouts/footer-script.php'); ?>