<?php include('layouts/head-script.php'); ?>        
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--CDF(Css|/Portals/0/Skins/Irtoya1393/css/HomePage.css)-->
<div class="body_bg">
    <div id="dnn_wrapper">
        <div class="wrapper">
            <?php include('layouts/header.php'); ?> 
                <!--Main-Content---------------------------------------------->
                    <!--Start-Slideshow-->
                        <?php include('layouts/slideshow.php');  ?>
                    <!--End-Slideshow-->
                    <!--Start-Service-icon-->
                        <?php include('layouts/service-icon.php'); ?>
                    <!--End-Service-icon-->
                    <!--Start-Product-Slider-->
                        <?php include('layouts/product-slider.php');  ?>
                    <!--End-Products-Slider-->
                    <!--Start-Post-Slider-->
                        <?php //include('layouts/post-slider.php'); ?>
                    <!--End-Post-Slider-->
                    <!--Start-Post-Gallery-->
                        <?php include('layouts/post-gallery.php'); ?>
                    <!--End-Post-Gallery-->
                <!--End-Main-Content-------------------------------------------->
            <!-- Footer -->
           <?php include('layouts/footer.php');  ?>
            <!-- Footer End -->
        </div>
    </div>
</div>
<?php  include('layouts/footer-script.php'); ?>
