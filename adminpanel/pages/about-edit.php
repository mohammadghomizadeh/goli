<?php
include('config/db.php');
$result = $db->run("SELECT * FROM `content` WHERE `type` = 'aboutus' LIMIT 1");
foreach($result as $rowfanni){
?>
<div class="box-header with-border">
              <h3 class="box-title">ویرایش  درباره ما</h3>
            </div>
            <hr>
      <form method="POST" action="index.php?page=about-edit-save&id=<?php echo $rowfanni['id'];  ?>" enctype="multipart/form-data">
           
              </div>
                <div class="form-group">
                <label>متن درباره ما</label>
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