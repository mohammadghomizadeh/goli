<?php
include('config/db.php');
$id = $_GET['id'];
$result = $db->select("agencies","`id` = $id");
foreach($result as $rowagency){
?>
<div class="box-header with-border">
              <h3 class="box-title">ویرایش عاملیت</h3>
            </div>
            <hr>
            <form method="POST" action="index.php?page=agency-edit-save&id=<?php echo $rowagency['id'];  ?>" enctype="multipart/form-data">
            <div class="form-group">
                  <label>عنوان عاملیت</label>
                  <input type="text" class="form-control" placeholder="متن" name="agencytitle" id="agencytitle" value="<?php echo $rowagency['title']; ?>">
             </div>
              </div>         
<div class="form-group">
                  <label>شهر </label>
                  <input type="text" class="form-control" placeholder="شهر" name="agencycity" id="agencycity" value="<?php echo $rowagency['city']; ?>">
             </div>
             <div class="form-group">
                  <label>آدرس </label>
                  <input type="text" class="form-control" placeholder="آدرس" name="agencyaddress" id="agencyaddress" value="<?php echo $rowagency['address']; ?>">
             </div>
             <div class="form-group">
                  <label>کد شهر </label>
                  <input type="text" class="form-control" placeholder="کد شهر" name="agencycity_code" id="agencycity_code" value="<?php echo $rowagency['city_code']; ?>">
             </div>
             <div class="form-group">
                  <label>شماره تماس </label>
                  <input type="text" class="form-control" placeholder="شماره تماس" name="agencycall_number" id="agencycall_number" value="<?php echo $rowagency['call_number']; ?>">
             </div>
             <div class="form-group">
                  <label>شماره فکس </label>
                  <input type="text" class="form-control" placeholder="شماره فکس" name="agencyfax" id="agencyfax" value="<?php echo $rowagency['fax']; ?>">
             </div>
             <div class="form-group">
                  <label>کد پستی </label>
                  <input type="text" class="form-control" placeholder="کد پستی" name="agencypostal_code" id="agencypostal_code" value="<?php echo $rowagency['postal_code']; ?>">
             </div>
             <div class="form-group">
                  <label>پست الکترونک </label>
                  <input type="text" class="form-control" placeholder="پست الکترونیک" name="agencyemail" id="agencyemail" value="<?php echo $rowagency['email']; ?>">
             </div>
             <div class="form-group">
                  <label>ساعات کاری </label>
                  <input type="text" class="form-control" placeholder="ساعات کاری" name="agencyhourse_work" id="agencyhourse_work" value="<?php echo $rowagency['hourse_work']; ?>">
             </div>
             <div class="form-group">
                  <label>استان </label>
                  <input type="text" class="form-control" placeholder="استان" name="agencystate" id="agencystate" value="<?php echo $rowagency['state']; ?>">
             </div>
             <div class="form-group">
                  <label>نوع عاملیت </label><br>
                  <select>
                    <option value="<?php echo $rowagency['type_agency']; ?>">عاملیت</option>
                     <option value="<?php echo $rowagency['type_agency']; ?>">شعبه</option>
                  </select> 
             </div>
             <div class="form-group">
                  <label>نوع خدمات </label><br>
                  <select>
                    <option value="<?php echo $rowagency['type_service']; ?>">فروش</option>
                     <option value="<?php echo $rowagency['type_service']; ?>">خدمات پس از فروش</option>
                     <option value="<?php echo $rowagency['type_service']; ?>">قطعات</option>
                  </select> 
             </div>
                
              <div class="form-group">

                  <label for="agencyimage">تصویر مطلب</label>

                  <input type="file"  name="agencyimage" id="agencyimage" value="<?php echo $rowagency['image']; ?>" >
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
}

?>