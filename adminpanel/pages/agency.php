<?php
if(isset($_GET['action']))
{
    $action = $_GET['action'];
        if($action == "insert")
        {

              $agencytitle = $_POST['agencytitle'];
              $agencyimage = $_FILES['agencyimage']['name'];
              $agencygallery = $_POST['agencygallery'];
              $agencycity = $_POST['agencycity'];
              $agencyaddress= $_POST['agencyaddress'];
              $agencycity_code = $_POST['agencycity_code'];
              $agencycall_number = $_POST['agencycall_number'];
              $agencyfax = $_POST['agencyfax'];
              $agencypostal_code = $_POST['agencypostal_code'];
              $agencyemail= $_POST['agencyemail'];
              $agencyhourse_work= $_POST['agencyhourse_work'];
              $agencystate= $_POST['agencystate'];
              $agencytype_agency= $_POST['agencytype_agency'];
              $agencytype_service= $_POST['agencytype_service'];
              $agencyBranch= $_POST['agencyBranch'];
              $agencySale= $_POST['agencySale'];
              $agencysales_servicel= $_POST['agencysales_service'];
              $agencyParts = $_POST['agencyParts '];
              
             
              $uploaddir = 'uploads/agencyes/';
              $uploadfile = $uploaddir . basename($_FILES['agencyimage']['name']);
              move_uploaded_file($_FILES['agencyimage']['tmp_name'], $uploadfile);
              include('config/db.php');
              $result = $db->insert("agencies", array(
                "title" => $agencytitle,
                "image" => $agencyimage,
                "gallery" =>  $agencygallery,
                "city" =>  $agencycity,
                "address" =>  $agencyaddress,
                "city_code" =>  $agencycity_code,
                "call_number" =>  $agencycall_number,
                "fax" =>  $agencyfax,
                "postal_code" =>  $agencypostal_code,
                "email" =>  $agencyemail ,
                "hourse_work" =>  $agencyhourse_work ,
                "state" =>  $agencystate ,
                "type_agency" =>  $agencytype_agency ,
                "type_service" =>  $agencytype_service  ,
                "Branch" =>  $agencyBranch  ,
                "Sale" =>  $agencySale  ,
                "sales_service " =>  $agencysales_service  ,
                "Parts" =>  $agencyParts  ,
                "status" => 1,
                "create_at" => $date->date("Y-m-d", false, false)
                           ));
                    if($result){
                     
                      ?>
                      <script>
                      window.location.replace("index.php?page=agency&action=list&id=0");
                      </script>
                  <?php
                    }else
                    {
                      echo "faild";
                    }
        }
        if($action == "new")
        {
         //start-html-new-agency-block;
         ?>
             <div class="box-header with-border">
              <h3 class="box-title">افزودن عاملیت جدید</h3>
            </div>
            <hr>
              <form method="POST" action="index.php?page=agency&action=insert" enctype="multipart/form-data">
            <div class="form-group">
                  <label>عنوان عاملیت</label>
                  <input type="text" class="form-control" placeholder="متن" name="agencytitle" id="agencytitle">
             </div>
              </div>         
<div class="form-group">
                  <label>شهر </label>
                  <input type="text" class="form-control" placeholder="شهر" name="agencycity" id="agencycity">
             </div>
             <div class="form-group">
                  <label>آدرس </label>
                  <input type="text" class="form-control" placeholder="آدرس" name="agencyaddress" id="agencyaddress">
             </div>
             <div class="form-group">
                  <label>کد شهر </label>
                  <input type="text" class="form-control" placeholder="کد شهر" name="agencycity_code" id="agencycity_code">
             </div>
             <div class="form-group">
                  <label>شماره تماس </label>
                  <input type="text" class="form-control" placeholder="شماره تماس" name="agencycall_number" id="agencycall_number">
             </div>
             <div class="form-group">
                  <label>شماره فکس </label>
                  <input type="text" class="form-control" placeholder="شماره فکس" name="agencyfax" id="agencyfax">
             </div>
             <div class="form-group">
                  <label>کد پستی </label>
                  <input type="text" class="form-control" placeholder="کد پستی" name="agencypostal_code" id="agencypostal_code">
             </div>
             <div class="form-group">
                  <label>پست الکترونک </label>
                  <input type="text" class="form-control" placeholder="پست الکترونیک" name="agencyemail" id="agencyemail">
             </div>
             <div class="form-group">
                  <label>ساعات کاری </label>
                  <input type="text" class="form-control" placeholder="ساعات کاری" name="agencyhourse_work" id="agencyhourse_work">
             </div>
             <div class="form-group">
                  <label>استان </label>
                  <input type="text" class="form-control" placeholder="استان" name="agencystate" id="agencystate">
             </div>
             <div class="form-group">
                  <label>نوع عاملیت </label><br>
                  <select>
                    <option value="agency">عاملیت</option>
                     <option value="barnch">شعبه</option>
                  </select> 
             </div>
             <div class="form-group">
                  <label>نوع خدمات </label><br>
                  <select>
                    <option value="sale">فروش</option>
                     <option value="service-sale">خدمات پس از فروش</option>
                     <option value="part">قطعات</option>
                  </select> 
             </div>
                
              <div class="form-group">

                  <label for="agencyimage">تصویر مطلب</label>

                  <input type="file"  name="agencyimage" id="agencyimage" required >
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
                                $('#agencyimage').bind('change', function() {
                                if ($('input:submit').attr('disabled',false)){
                                  $('input:submit').attr('disabled',true);
                                  }
                                var ext = $('#agencyimage').val().split('.').pop().toLowerCase();
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
                </div>
                
<div class="form-group">
                <input class="btn bg-olive btn-flat margin" type="submit" value="ارسال عاملیت"> 
              </div>
</form>
         <?php
        //End-html-new-agency-block;

        }
        if($action == "list")
        {
           ?> 

          <div class="box">
          <div class="box-header">
            <h3 class="box-title">لیست عاملیت ها </h3>

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
              
              $results = $db->select("agencies");
              $i = 1;
              foreach($results as $row)
              {

              ?>
        
              <tr>
                <td><?php echo $i; ?></td>
                <td><img src="uploads/agencyes/<?php echo $row['image'];  ?>" width="20" height="20"/></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['create_at']; ?></td>
                <td><span class="label label-success"><?php echo $row['status']; ?></span></td>
                
                <td>
              
                <div class="btn-group">
                    <button onclick="location.href = 'index.php?page=agency-delete&id=<?php echo $row['id'];  ?>'"  type="button" class="btn btn-default btn-danger"><i class="fa fa-fw fa-remove" ></i></button>
                    <button onclick="location.href = 'index.php?page=agency-edit&id=<?php echo $row['id'];  ?>'" type="button" class="btn btn-default btn-success" ><i class="fa fa-edit"></i></button>
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
                                                    