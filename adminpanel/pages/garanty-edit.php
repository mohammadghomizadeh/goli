<?php
include('config/db.php');
$resultt = $db->run("SELECT * FROM `content` WHERE `type` = 'garanty' LIMIT 1");
foreach ($resultt as $rowgaranty)
{
?>
<div class="box-header with-border">
              <h3 class="box-title">ویرایش گارانتی و فنی</h3>
            </div>
            <hr>
      <form method="POST" action="index.php?page=garanty-edit-save&id=<?php echo $rowgaranty['id'];  ?>" enctype="multipart/form-data">
            <div class="form-group">
                  <label>عنوان گارانتی</label>
                  <input type="text" class="form-control" placeholder="متن" name="garantytitle" id="garantytitle" value="<?php echo $rowgaranty['title'];  ?>">
             </div>
              </div>
                <div class="form-group">
                <label>متن</label>
                <textarea id="editor1" name="editor1" rows="10" cols="80">
                <?php echo $rowgaranty['description'];?>
                </textarea>
                </div>
                <div class="form-group">
                <input class="btn bg-olive btn-flat margin" type="submit" value="ثبت تغییرات"> 
              </div>
              
</form>
<?php
}

?>