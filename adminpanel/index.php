<//?php
session_start();
$login = $_SESSION['login'];
if($login){
?>

<?php include('layouts/head-script.php'); ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include('layouts/header.php'); ?>
        <!-- right side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!--start-menu-sidebar -->
            <?php include('layouts/menu.php'); ?>
            <!--end-menu-sidebar -->
            <!-- Start Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <?php include('layouts/content-menu.php'); ?>
                <!-- /.row -->
                <div class="row">
                    <section class="col-lg-12 col-md-12">
                       <!--Start-Content-Pages-In-Here-->
<?php
if(isset($_GET['page']) && !empty($_GET['page']))
{
    $page = $_GET['page'];
    include('pages/'. $page . '.php');
}else
{
?>
<div class="box box-info">
            <div class="box-header">
              <i class="fa fa-info-circle"></i>
              <h3 class="box-title">خوش آمدید آقای گلشنی</h3>
              <!-- tools box -->
              <div class="pull-left box-tools">
                <button type="button" class="btn bg-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
            
              <h5>از پنل سمت راست می توانید در سایت تغییرات لازم را اعمال کنید</h5>
              <br><h5><b>تغییرات ظاهری را به پشتیبان سایتتان بسپارید</b></h5>
              </div>
          </div>
<?php
}


?>
                       <!--End-Content-Pages-->
                    </section>
                </div>
                <!-- Main row -->
      

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
<?php include('layouts/footer.php'); ?>


    </div>
    <!-- ./wrapper -->
<?php  include('layouts/footer-script.php'); ?>

<//?php
}
else
{
header("Location:../login.php?err=sessionfail");
}
?>