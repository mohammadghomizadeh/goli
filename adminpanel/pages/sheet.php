<?php
if(isset($_GET['action']))
{
    $action = $_GET['action'];
        if($action == "insert")
        {

              $sheettitle = $_POST['sheettitle'];
              $categoryid = $_POST['category'];
              $sheetdescription = $_POST['editor1'];
              $sheetimage = $_FILES['sheetimage']['name'];
              $uploaddir = 'uploads/sheets/';
              $uploadfile = $uploaddir . basename($_FILES['sheetimage']['name']);
              move_uploaded_file($_FILES['sheetimage']['tmp_name'], $uploadfile);
              include('config/db.php');
              $result = $db->insert("content", array(
                "title" => $sheettitle,
                "description" =>  $sheetdescription,
                "image" => $sheetimage,
                "type" => "sheets",
                "status" => 1,
                "parent" => $categoryid,
                "create_at" => $date->date("Y-m-d", false, false)
                           ));
                    if($result){
                     
                      ?>
                      <script>
                      window.location.replace("index.php?page=sheet&action=list&id=0");
                      </script>
                  <?php
                    }else
                    {
                      echo "faild";
                    }
        }
        if($action == "new")
        {
         //start-html-new-sheet-block;
         ?>
             <div class="box-header with-border">
              <h3 class="box-title">افزودن برگه جدید</h3>
            </div>
            <hr>
              <form method="POST" action="index.php?page=sheet&action=insert" enctype="multipart/form-data">
            <div class="form-group">
                  <label>عنوان برگه</label>
                  <input type="text" class="form-control" placeholder="متن" name="sheettitle" id="sheettitle">
             </div>
              </div>

              <div class="form-group">
              <label>دسته بندی برگه</label>
                  <div class="checkbox">
                  <?php
                  include('config/db.php');
                      $result = $db->select("content","`type` = 'category' AND `parent` = 100 ");
                      foreach($result as $row)
                      {
                        ?>
                      
                  
                    <label>
                      <input type="checkbox" value="<?php echo $row['id'];  ?>" name="category">
                      <?php echo $row['title'];  ?>
                    </label>
                          <?php
                      }
                      ?>
                  </div>


                </div>
                <hr>
                
                <div class="form-group">
                <label>متن</label>
                <textarea id="editor1" name="editor1" rows="10" cols="80">
                این ویرایشگر راست چین و فارسی شده و تنظیمات آن به صورت اختصاصی تنظیم شده است...
                </textarea>
                </div>
                <div class="form-group">

                  <label for="sheetimage">تصویر مطلب</label>

                  <input type="file"  name="sheetimage" id="sheetimage" required >
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
                                $('#sheetimage').bind('change', function() {
                                if ($('input:submit').attr('disabled',false)){
                                  $('input:submit').attr('disabled',true);
                                  }
                                var ext = $('#sheetimage').val().split('.').pop().toLowerCase();
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
                <input class="btn bg-olive btn-flat margin" type="submit" value="ارسال مطلب"> 
              </div>
              
</form>
         <?php
        //End-html-new-sheet-block;

        }
        if($action == "list")
        {
           ?> 

          <div class="box">
          <div class="box-header">
            <h3 class="box-title">لیست برگه ها </h3>

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
              
              $results = $db->select("content","type = 'sheets'");
              $i = 1;
              foreach($results as $row)
              {

              ?>
        
              <tr>
                <td><?php echo $i; ?></td>
                <td><img src="uploads/sheets/<?php echo $row['image'];  ?>" width="20" height="20"/></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['create_at']; ?></td>
                <td><span class="label label-success"><?php echo $row['status']; ?></span></td>
                
                <td>
              
                <div class="btn-group">
                    <button onclick="location.href = 'index.php?page=sheet-delete&id=<?php echo $row['id'];  ?>'"  type="button" class="btn btn-default btn-danger"><i class="fa fa-fw fa-remove" ></i></button>
                    <button onclick="location.href = 'index.php?page=sheet-edit&id=<?php echo $row['id'];  ?>'" type="button" class="btn btn-default btn-success" ><i class="fa fa-edit"></i></button>
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

<?php

        }



}
?>
                                                    