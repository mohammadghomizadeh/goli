<div class="dnn_layout" style="max-width: 1008px;">
                    <section id="dnn_content">
                        <div class="pane_layout">
                            <section class="row-fluid">
                                <div class="span12">
                                    <div id="dnn_TopPane" class="TopPane"><div class="DnnModule DnnModule-DNN_HTML DnnModule-461"><a name="461"></a>
<div class="White">
     <div id="dnn_ctr461_ContentPane" class="contentpane"><!-- Start_Module_461 -->
         <div id="dnn_ctr461_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
	<div id="dnn_ctr461_HtmlModule_lblContent" class="Normal">
	<div class="several_box_title">
<!--آنچه که در ایرتویا می گذرد<hr />-->
<br>
</div>
</div>

</div><!-- End_Module_461 --></div>
</div>



</div><div class="DnnModule DnnModule-DNN_HTML DnnModule-884"><a name="884"></a>
<div class="White">
     <div id="dnn_ctr884_ContentPane" class="contentpane"><!-- Start_Module_884 --><div id="dnn_ctr884_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
	<div id="dnn_ctr884_HtmlModule_lblContent" class="Normal">
	<div class="box-tmp-all">
    <ul class="box-tmp">
        <?php 
        $resultpost= $db->select("main_feature","`type` = 'ayandeh'");
        foreach ($resultpost as $row){
    ?>
        <li class="is-on">
            <div class="box-item-wrapper">
                <div class="box-item-option">
                    <a href="featuer-single.php?action=<?php echo $row['type']; ?>">
                        <img alt="<?php echo $row['title']; ?>" src="adminpanel/uploads/features/<?php echo $row['image']; ?>" title="<?php echo $row['title']; ?>">
                    </a>
                    <div class="box-item-content">
                        <a class="box-item-heading" href="featuer-single.php?action=<?php echo $row['type']; ?>"><?php echo $row['title']; ?></a>
                        <p class="box-item-text"><?php echo substrwords($row['description'],100); ?></p>
                        <a class="box-item-link" href="featuer-single.php?action=<?php echo $row['type']; ?>">مشاهده ی جزییات</a>
                    </div>
                </div>
            </div>
        </li>
        <?php }; ?>
        <?php 
        $resultpost= $db->select("main_feature","`type` = 'frosh-sazmani'");
        foreach ($resultpost as $row){
    ?>
        <li class="is-on">
            <div class="box-item-wrapper">
                <div class="box-item-option">
                    <a href="featuer-single.php?action=<?php echo $row['type']; ?>">
                        <img alt="<?php echo $row['title']; ?>" src="adminpanel/uploads/features/<?php echo $row['image']; ?>" title="<?php echo $row['title']; ?>"></a>
                    <div class="box-item-content">
                        <a class="box-item-heading" href="featuer-single.php?action=<?php echo $row['type']; ?>"><?php echo $row['title']; ?></a>
                        <p class="box-item-text"><?php echo substrwords($row['description'],100); ?></p>
                        <a class="box-item-link" href="featuer-single.php?action=<?php echo $row['type']; ?>">مشاهده ی جزییات</a>
                    </div>
                </div>
            </div>
        </li>
        <?php }; ?>
        <?php 
            $resultpost= $db->select("main_feature","`type` = 'ameliat'");
            foreach ($resultpost as $row){
         ?>  
        <li class="is-on">
            <div class="box-item-wrapper">
                <div class="box-item-option">
                    <a href="featuer-single.php?action=<?php echo $row['type']; ?>">
                         <img alt="<?php echo $row['title']; ?>" src="adminpanel/uploads/features/<?php echo $row['image']; ?>" title="<?php echo $row['title']; ?>">
                    </a>
                    <div class="box-item-content">
                        <a class="box-item-heading" href="featuer-single.php?action=<?php echo $row['type']; ?>"><?php echo $row['title']; ?></a>
                        <p class="box-item-text"><?php echo substrwords($row['description'],100); ?></p>
                        <a class="box-item-link" href="featuer-single.php?action=<?php echo $row['type']; ?>">مشاهده ی جزییات</a>
                    </div>
                </div>
            </div>
        </li>
        <?php }; ?>
        <?php 
            $resultpost= $db->select("main_feature","`type` = 'farakhani'");
            foreach ($resultpost as $row){
         ?>
        <li class="is-on">
            <div class="box-item-wrapper">
                <div class="box-item-option">
                    <a href="featuer-single.php?action=<?php echo $row['type']; ?>">
                    <img alt="<?php echo $row['title']; ?>" src="adminpanel/uploads/features/<?php echo $row['image']; ?>" title="<?php echo $row['title']; ?>"></a>
                    <div class="box-item-content">
                        <a class="box-item-heading" href="featuer-single.php?action=<?php echo $row['type']; ?>"><?php echo $row['title']; ?></a>
                        <p class="box-item-text"><?php echo substrwords($row['description'],100); ?></p>
                        <a class="box-item-link" href="featuer-single.php?action=<?php echo $row['type']; ?>">مشاهده ی جزییات</a>
                    </div>
                </div>
            </div>
        </li>
        <?php }; ?>
        <?php 
            $resultpost= $db->select("main_feature","`type` = 'video'");
            foreach ($resultpost as $row){
         ?>
        <li class="is-on">
            <div class="box-item-wrapper">
                <div class="box-item-option">
                    <a href="featuer-single.php?action=<?php echo $row['type']; ?>">
                        <picture>
                            <source media="(min-width: 1008px)" srcset="adminpanel/uploads/features/<?php echo $row['image']; ?>">
                            <source media="(max-width: 1007px)" srcset="adminpanel/uploads/features/<?php echo $row['image']; ?>">
                            <img alt="<?php echo $row['title']; ?>" src="_Content/images/HomePage/RoadService.jpg" title="<?php echo $row['title']; ?>">
                        </picture>
                    </a>
                    <div class="box-item-content">
                        <a class="box-item-heading" href="featuer-single.php?action=<?php echo $row['type']; ?>"><?php echo $row['title']; ?></a>
                        <p class="box-item-text"><?php echo substrwords($row['description'],100); ?></p>
                        <a class="box-item-link" href="featuer-single.php?action=<?php echo $row['type']; ?>">مشاهده ی جزییات</a>
                    </div>
                </div>
            </div>
        </li>
        <?php }; ?>
        <?php 
            $resultpost= $db->select("main_feature","`type` = 'app'");
            foreach ($resultpost as $row){
         ?>
        <li class="is-on">
            <div class="box-item-wrapper">
                <div class="box-item-option">
                    <a href="featuer-single.php?action=<?php echo $row['type']; ?>">
                        <picture>
                            <source media="(min-width: 1008px)" srcset="adminpanel/uploads/features/<?php echo $row['image']; ?>">
                            <source media="(max-width: 1007px)" srcset="adminpanel/uploads/features/<?php echo $row['image']; ?>">
                            <img alt="<?php echo $row['title']; ?>" src="_Content/images/HomePage/RoadService.jpg" title="<?php echo $row['title']; ?>">
                        </picture>
                    </a>
                    <div class="box-item-content">
                        <a class="box-item-heading" href="featuer-single.php?action=<?php echo $row['type']; ?>"><?php echo $row['title']; ?></a>
                        <p class="box-item-text"><?php echo substrwords($row['description'],100); ?></p>
                        <a class="box-item-link" href="featuer-single.php?action=<?php echo $row['type']; ?>">مشاهده ی جزییات</a>
                    </div>
                </div>
            </div>
        </li>
        <?php }; ?>
        
        <?php 
            $resultpost= $db->select("main_feature","`type` = 'learning'");
            foreach ($resultpost as $row){
         ?>
        <li class="is-on">
            <div class="box-item-wrapper">
                <div class="box-item-option">
                    <a href="featuer-single.php?action=<?php echo $row['type']; ?>">
                        <picture>
                            <source media="(min-width: 1008px)" srcset="adminpanel/uploads/features/<?php echo $row['image']; ?>">
                            <source media="(max-width: 1007px)" srcset="adminpanel/uploads/features/<?php echo $row['image']; ?>">
                            <img alt="<?php echo $row['title']; ?>" src="_Content/images/HomePage/RoadService.jpg" title="<?php echo $row['title']; ?>">
                        </picture>
                    </a>
                    <div class="box-item-content">
                        <a class="box-item-heading" href="featuer-single.php?action=<?php echo $row['type']; ?>"><?php echo $row['title']; ?></a>
                        <p class="box-item-text"><?php echo substrwords($row['description'],100); ?></p>
                        <a class="box-item-link" href="featuer-single.php?action=<?php echo $row['type']; ?>">مشاهده ی جزییات</a>
                    </div>
                </div>
            </div>
        </li>
        <?php }; ?>
        <?php 
            $resultpost= $db->select("main_feature","`type` = 'service-in-place'");
            foreach ($resultpost as $row){
         ?>
        <li class="is-on">
            <div class="box-item-wrapper">
                <div class="box-item-option">
                    <a href="featuer-single.php?action=<?php echo $row['type']; ?>">
                        <picture>
                            <source media="(min-width: 1008px)" srcset="adminpanel/uploads/features/<?php echo $row['image']; ?>">
                            <source media="(max-width: 1007px)" srcset="adminpanel/uploads/features/<?php echo $row['image']; ?>">
                            <img alt="<?php echo $row['title']; ?>" src="_Content/images/HomePage/RoadService.jpg" title="<?php echo $row['title']; ?>">
                        </picture>
                    </a>
                    <div class="box-item-content">
                        <a class="box-item-heading" href="featuer-single.php?action=<?php echo $row['type']; ?>"><?php echo $row['title']; ?></a>
                        <p class="box-item-text"><?php echo substrwords($row['description'],100); ?></p>
                        <a class="box-item-link" href="featuer-single.php?action=<?php echo $row['type']; ?>">مشاهده ی جزییات</a>
                    </div>
                </div>
            </div>
        </li>
        <?php }; ?>
        
    </ul>
    <button class="mbl-view-more">مشاهده بیشتر</button>
</div>

</div>

</div><!-- End_Module_884 --></div>
</div>



</div><div class="DnnModule DnnModule-DNN_HTML DnnModule-885"><a name="885"></a>
<div class="White">
     <div id="dnn_ctr885_ContentPane" class="contentpane"><!-- Start_Module_885 --><div id="dnn_ctr885_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
	<div id="dnn_ctr885_HtmlModule_lblContent" class="Normal">
	<!--<div class="call-fix">
    <div class="call-fix-body">
        <a href="mailto:it@irtoya.com"><svg height="275.000000pt" preserveaspectratio="xMidYMid meet" version="1.0" viewbox="0 0 300.000000 275.000000" width="300.000000pt" xmlns="http://www.w3.org/2000/svg"><g fill="#ffffff" stroke="none" transform="translate(0.000000,275.000000) scale(0.050000,-0.050000)"><path d="M3330 5468 c-345 -61 -616 -252 -748 -528 l-72 -150 -10 -420 c-9 -377 -14 -426 -50 -479 -92 -137 -66 -700 38 -838 37 -47 82 -135 102 -195 44 -136 168 -388 248 -506 59 -85 62 -99 62 -288 0 -290 12 -278 -591 -606 -805 -439 -909 -576 -909 -1192 l0 -266 2300 0 2300 0 0 256 c0 625 -105 755 -953 1181 -664 333 -634 305 -644 605 l-6 211 89 129 c95 137 214 362 251 479 14 42 47 85 84 106 144 85 169 164 169 522 0 294 -4 328 -45 407 -42 79 -45 111 -45 440 0 380 -17 481 -105 654 -203 396 -809 594 -1465 478z"></path><path d="M1590 4768 c-516 -114 -790 -483 -790 -1061 0 -225 -4 -253 -51 -341 -82 -154 -68 -582 24 -712 34 -49 69 -111 78 -137 32 -104 153 -319 250 -446 l103 -135 -7 -167 c-9 -212 -7 -210 -487 -507 -626 -388 -694 -482 -707 -976 l-7 -286 632 0 632 0 0 295 c2 666 121 827 945 1275 571 311 555 296 555 509 0 92 -12 131 -60 209 -88 137 -188 342 -241 492 -25 72 -62 148 -81 170 -134 151 -175 757 -67 990 50 106 51 119 44 449 l-8 340 -88 27 c-139 42 -504 49 -669 12z"></path></g></svg></a>
        <div class="animated-circles animatedC">
            <div class="circle c-1">&nbsp;</div>

            <div class="circle c-2">&nbsp;</div>

            <div class="circle c-3">&nbsp;</div>
        </div>
    </div>

    <div class="call-fix-hover"><span>استخدام کارشناس پشتیبانی نرم افزار</span><span>ارسال رزومه به it@irtoya.com</span></div>
</div>-->

</div>

</div><!-- End_Module_885 --></div>
</div>



</div></div>
                                </div>
                            </section>
                            <section class="row-fluid">
                                <div class="span3">
                                    <div id="dnn_RowOne_Grid3_Pane" class="RowOne_Grid3_Pane DNNEmptyPane"></div>
                                </div>
                                <div class="span9">
                                    <div id="dnn_RowOne_Grid9_Pane" class="RowOne_Grid9_Pane DNNEmptyPane"></div>
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
                    </section>
                </div>