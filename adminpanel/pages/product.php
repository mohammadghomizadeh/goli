<?php
$action = $_GET['action'];

if($action == "new"){?>
                        <!--New-product-Script-->
                        <div class="box-header with-border">
                            <h3 class="box-title">افزودن محصول جدید</h3>
                        </div>
                        <hr>
                        <form method="POST" action="index.php?page=product-new" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>عنوان محصول</label>
                                            <input type="text" class="form-control" placeholder="متن" name="producttitle" id="producttitle">
                                        </div>
                                        <div class="form-group">
                                            <label>متن</label>
                                            <textarea id="editor1" name="editor1" rows="10" cols="80">
                                           
                                            </textarea>
                                        </div>
                                        <div class="form-group">

                                            <label for="producticon">بارگزاری تصویر محصول</label>

                                            <input type="file"  name="producticon" id="producticon" required >
                                            <p id="error1" style="display:none; color:#FF0000;">
                                            Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
                                            </p>
                                            <p id="error2" style="display:none; color:#FF0000;">
                                            Maximum File Size Limit is 1MB.
                                            </p>
                                            <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>

                                                <script>

                                                

                                                
                                                        $('input[type="submit"]').prop("disabled", true);
                                                        var a=0;
                                                        //binds to onchange event of your input field
                                                        $('#producticon').bind('change', function() {
                                                        if ($('input:submit').attr('disabled',false)){
                                                            $('input:submit').attr('disabled',true);
                                                            }
                                                        var ext = $('#producticon').val().split('.').pop().toLowerCase();
                                                        if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
                                                            $('#error1').slideDown("slow");
                                                            $('#error2').slideUp("slow");
                                                            a=0;
                                                            }else{
                                                            var picsize = (this.files[0].size);
                                                            if (picsize > 1000000){
                                                            $('#error2').slideDown("slow");
                                                            a=0;
                                                            }else{
                                                            a=1;
                                                            $('#error2').slideUp("slow");
                                                            }
                                                            $('#error1').slideUp("slow");
                                                            if (a==1){
                                                            $('input:submit').attr('disabled',false);
                                                            }
                                                        }
                                                        });
                                                    
                                                </script>
                                            <p class="help-block">تصاویر با کیفیت خوب و حجم پایین بارگذاری شود.باتشکر</p>
                                        </div>
                                        <div class="form-group">

<label for="producticons">بارگذاری تصویر دوم محصول</label>

<input type="file"  name="producticons" id="producticons" required >
<p id="error1" style="display:none; color:#FF0000;">
Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
</p>
<p id="error2" style="display:none; color:#FF0000;">
Maximum File Size Limit is 1MB.
</p>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>

    <script>

    

    
            $('input[type="submit"]').prop("disabled", true);
            var a=0;
            //binds to onchange event of your input field
            $('#producticons').bind('change', function() {
            if ($('input:submit').attr('disabled',false)){
                $('input:submit').attr('disabled',true);
                }
            var ext = $('#producticons').val().split('.').pop().toLowerCase();
            if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
                $('#error1').slideDown("slow");
                $('#error2').slideUp("slow");
                a=0;
                }else{
                var picsize = (this.files[0].size);
                if (picsize > 1000000){
                $('#error2').slideDown("slow");
                a=0;
                }else{
                a=1;
                $('#error2').slideUp("slow");
                }
                $('#error1').slideUp("slow");
                if (a==1){
                $('input:submit').attr('disabled',false);
                }
            }
            });
        
    </script>
<p class="help-block">تصاویر با کیفیت خوب و حجم پایین بارگزاری شود.باتشکر</p>
</div>
                                        <div class="form-group">
                                        <input class="btn bg-olive btn-flat margin" type="submit" id="submit" name="submit" value="ارسال مطلب"> 
                                        </div>

                        </form>
<?php
//End-product-New product
}elseif($action == "list"){?>
<!--Start-List-product-Block-->


                <div class="box">
                <div class="box-header">
                <h3 class="box-title">لیست محصولات سایت </h3>

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
                    
                    $results = $db->select("content","type = 'product'");
                    $i = 1;
                    foreach($results as $row)
                    {

                    ?>

                    <tr>
                    <td><?php echo $i; ?></td>
                    <td><img src="uploads/product/<?php echo $row['image'];  ?>" width="20" height="20"/></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['create_at']; ?></td>
                    <td><span class="label label-success"><?php echo $row['status']; ?></span></td>
                    
                    <td>
                    
                    <div class="btn-group">
                        <button onclick="location.href = 'index.php?page=product-delete&id=<?php echo $row['id'];  ?>'"  type="button" class="btn btn-default btn-danger"><i class="fa fa-fw fa-remove" ></i></button>
                        <button onclick="location.href = 'index.php?page=product-edit&id=<?php echo $row['id'];  ?>'" type="button" class="btn btn-default btn-success" ><i class="fa fa-edit"></i></button>
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
<!--End-product-Part-List-->
<?php
}
elseif($action == "other")
{

?>

                        <form method="POST" action="index.php?page=product-other" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>درصد خدمات کاری</label>
                                        </div>
    <?php
                                        
    include('config/db.php');
    $result = $db->select("content","type = 'percent'");
    $i = 1;
   foreach($result as $rows)
   {
  ?>
                                        <div class="form-group">
                                            <label><?php echo $rows['title'];  ?></label>
                                            <input type="text" class="form-control"  name="<?php echo $rows['link'];  ?>" id="<?php echo $rows['link'];  ?>" value="<?php echo $rows['description'];  ?>">
                                        </div>
 <?php
 $i++;
   }
   ?>
                                        <hr>
                                        <div class="form-group">
                                        <input class="btn bg-olive btn-flat margin" type="submit" id="submitpercent" name="submitpercent" value="ثبت"> 
                                        </div>
                        </form>

                                        <hr>
                                        <?php
                             
                              $result = $db->select("content","type = 'product'");
                             foreach($result as $row)
                             {
                                 ?>  
                        <form method="POST" action="index.php?page=product-other&id=<?php echo $row['id'];  ?>">
                
                                        
                                        <div class="form-group">
                                            <label>خدمات میانی </label>
                                        </div>
                                        <div class="form-group">
                                            <label>عنوان </label>
                                            <input type="text" class="form-control"  name="producttitle" id="producttitle" value="<?php echo $row['title'];  ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>متن</label>
                                            <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            <?php echo $row['description'];  ?>
                                            </textarea>
                                        </div>
                                       
                                        <div class="form-group">
                                        <input class="btn bg-olive btn-flat margin" type="submit" id="submitother" name="submitother" value="ثبت"> 
                                        </div>

                        </form>
                      
<?php
   }  
}else{
    echo "مقداری ارسال نشده است";
}
?>