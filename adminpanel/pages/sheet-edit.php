<?php
include('config/db.php');
$id = $_GET['id'];
$result = $db->select("content","`id` = $id");
foreach($result as $rowpage ){
?>
<div class="box-header with-border">
              <h3 class="box-title">ویرایش مطلب</h3>
            </div>
            <hr>
      <form method="POST" action="index.php?page=page-edit-save&id=<?php echo $rowpage['id'];  ?>" enctype="multipart/form-data">
            <div class="form-group">
                  <label>عنوان مطلب</label>
                  <input type="text" class="form-control" placeholder="متن" name="pagetitle" id="pagetitle" value="<?php echo $rowpage['title'];  ?>">
             </div>
              </div>
              <div class="form-group">
              <?php
                  if($rowpage['parent'] == 101){
         ?>
         <label>دسته بندی : مقالات سایت</label>
         <input type="text" name="artcat" id="artcat"  value="<?php echo $rowpage['parent']; ?>" disabled>
         <?php
                  }
              ?>
              </div>
             
                <hr>
                
                <div class="form-group">
                <label>متن</label>
                <textarea id="editor1" name="editor1" rows="10" cols="80">
                <?php echo $rowpage['description'];?>
                </textarea>
                </div>
                <div class="form-group">

                  <label for="pageimage">تصویر مطلب</label>

                  
                  <input type="file" name="pageimage" id="pageimage" /><img src="uploads/pages/<?php echo $rowpage['image']; ?>" width="150px" height="150px">
                  <p id="error1" style="display:none; color:#FF0000;">
                  خطا
                  </p>
                  <p id="error2" style="display:none; color:#FF0000;">
                  حجم بالاست
                  </p>
                  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>

                        <script>

                        

                       
                                $('input[type="submit"]').prop("disabled", true);
                                var a=0;
                                //binds to onchange event of your input field
                                $('#pageimage').bind('change', function() {
                                if ($('input:submit').attr('disabled',false)){
                                  $('input:submit').attr('disabled',true);
                                  }
                                var ext = $('#pageimage').val().split('.').pop().toLowerCase();
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
                <input class="btn bg-olive btn-flat margin" type="submit" value="ثبت تغییرات"> 
              </div>
              
</form>
<?php
}

?>