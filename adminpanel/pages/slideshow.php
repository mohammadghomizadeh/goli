<?php
/**
 * Created by Mohammad Ghomizadeh.
 * User: Arshitaweb-Development
 * Date: 9/9/2018
 * Time: 12:26 PM
 */
if(isset($_GET['action']))
{
    $action = $_GET['action'];
    if($action == "list")
    {?>
        <!--Start-List-Service-Block-->


                <div class="box">
                <div class="box-header">
                <h3 class="box-title">لیست تصاویر اسلایدشو </h3>

                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="جستجو">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- /.box-header -->

                <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                    <th>ردیف</th>
                    <th>تصویر</th>
                    <th>عنوان</th>
                    <th>تاریخ</th>
                    <th>وضعیت</th>

                    <th>عملیات</th>
                    </tr>
                    <?php
                    include('config/db.php');

                    $results = $db->select("content","type = 'slideshow'");
                    $i = 1;
                    foreach($results as $row)
                    {

                    ?>

                    <tr>
                    <td><?php echo $i; ?></td>
                    <td><img src="uploads/slideshow/<?php echo $row['image'];  ?>" width="20" height="20"/></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['create_at']; ?></td>
                    <td><span class="label label-success"><?php echo $row['status']; ?></span></td>

                    <td>

                    <div class="btn-group">
                        <button onclick="location.href = 'index.php?page=slideshow-delete&id=<?php echo $row['id'];  ?>'"  type="button" class="btn btn-default btn-danger"><i class="fa fa-fw fa-remove" ></i></button>

                        <!--Start-Modal-Edit-->

                <!--End-Modal-Edit-->

                        </div>
                    </td>
                    </tr>
                    <?php
                    $i++;
                    };
                ?>


                </tbody></table>
                </div>
                <!-- /.box-body -->

                </div>
        <div class="form-group">
            <a href="index.php?page=slideshow&action=new"  class="btn btn-default btn-success">افزودن تصویر جدید</a>
        </div>
<!--End-Service-Part-List-->
 <?php
    }elseif($action == "new")
    {?>
        <form  method="POST" action="index.php?page=slideshow-save" enctype="multipart/form-data">
        <div class="form-group">
            <label>افزودن تصویر به اسلایدرشو</label>
        </div>
        <hr>
        <div class="form-group">
            <label>بارگزاری تصویر...</label>
            <input type="file" name="slidefile" id="slidefile">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-default btn-success" value="بارگزاری...">
        </div>


    </form>
<?php
    }
}
?>