<?php
include('config/db.php');
$result = $db->run("SELECT * FROM `content` WHERE `type` = 'fanni' LIMIT 1");
foreach($result as $rowfanni){
?>
<div class="box-header with-border">
              <h3 class="box-title">ویرایش  فنی</h3>
            </div>
            <hr>
      <form method="POST" action="index.php?page=fanni-edit-save&id=<?php echo $rowfanni['id'];  ?>" enctype="multipart/form-data">
            <div class="form-group">
                  <label>عنوان فنی</label>
                  <input type="text" class="form-control" placeholder="متن" name="fannititle" id="fannititle" value="<?php echo $rowfanni['title'];  ?>">
             </div>
              </div>
                <div class="form-group">
                <label>متن</label>
                <textarea id="editor1" name="editor1" rows="10" cols="80">
                <?php echo $rowfanni['description'];?>
                </textarea>
                </div>
                <div class="form-group">
                <input class="btn bg-olive btn-flat margin" type="submit" value="ثبت تغییرات"> 
              </div>
              
</form>
<?php
}

?>