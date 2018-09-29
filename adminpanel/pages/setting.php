<?php
include('config/db.php');
$action = $_GET['action'];
if($action == "setting")
{?>
    <div class="box-header with-border">
        <h3 class="box-title">تنظیمات سایت</h3>
    </div>
    <hr>
<?php

    $result = $db->select("settings");
    foreach($result as $row)
    {
?>
    <form method="POST" action="index.php?page=setting-save&id=<?php echo $row['id']; ?>" enctype="multipart/form-data">

        <div class="form-group">
            <label>عنوان سایت </label>
            <input type="text" class="form-control"  name="sitetitle" id="sitetitle" value="<?php echo $row['title']; ?>">
        </div>
        <div class="form-group">
            <label>توضیحات سایت</label>
            <input type="text" class="form-control"  name="sitedescription" id="sitedescription" value="<?php echo $row['description']; ?>">
        </div>
    
        <div class="form-group">
            <label>لوگوی سایت</label>
            <input type="file" class="form-control"  name="sitelogo" id="sitelogo" value="<?php echo $row['logo']; ?>">
            <img src="uploads/site/<?php echo $row['logo']; ?>"  width="100" height="100">
        </div>
        <div class="form-group">
            <label>آیکون سایت</label>
            <input type="file" class="form-control"  name="siteicon" id="siteicon" value="<?php echo $row['icon']; ?>">
            <img src="uploads/site/<?php echo $row['icon']; ?>" width="40" height="40">
        </div>
        <label>اسکریپت هدر</label>
        <div class="form-group">
            <textarea  cols="100" rows="10" name="headerscript" id="headerscript"><?php echo $row['headscript']; ?></textarea>
        </div>
        <label>اسکریپت فوتر</label>
        <div class="form-group">
            <textarea  cols="100" rows="10" name="footerscript" id="footerscript"><?php echo $row['footerscript']; ?></textarea>
        </div>
                <?php

            }
                ?>
        <div class="form-group">
            <input class="btn bg-olive btn-flat margin" type="submit" id="submit" name="submit" value="ذخیره"> 
        </div>
    </form>
<?php
}elseif($action == "social")
{?>
    <form action="index.php?page=setting-save" method="POST">
        <div class="form-group">
             <label>فیسبوک</label>
            <?php
               $rf =  $db->select("content","`title` = 'facebook'");
               foreach($rf as $rowf) {
                   ?>
                   <input type="text" class="form-control" name="facebook" id="facebook" value="<?php echo $rowf['link']; ?>">
                   <?php
               }
                   ?>
        </div>
        <div class="form-group">
            <label>اینستاگرام</label>
            <?php
            $rf =  $db->select("content","`title` = 'instagram'");
            foreach($rf as $rowf) {
                ?>
                <input type="text" class="form-control" name="instagram" id="instagram" value="<?php echo $rowf['link']; ?>">
                <?php
            }
            ?>
        </div>
        <div class="form-group">
            <label>تلگرام</label>
            <?php
            $rf =  $db->select("content","`title` = 'telegram'");
            foreach($rf as $rowf) {
                ?>
                <input type="text" class="form-control" name="telegram" id="telegram" value="<?php echo $rowf['link']; ?>">
                <?php
            }
            ?>
        </div>
        <div class="form-group">
            <label>گوگل پلاس</label>
            <?php
            $rf =  $db->select("content","`title` = 'googleplus'");
            foreach($rf as $rowf) {
                ?>
                <input type="text" class="form-control" name="googleplus" id="googleplus" value="<?php echo $rowf['link']; ?>">
                <?php
            }
            ?>
        </div>
        <div class="form-group">
            <label>تویتر</label>
            <?php
            $rf =  $db->select("content","`title` = 'twitter'");
            foreach($rf as $rowf) {
                ?>
                <input type="text" class="form-control" name="twitter" id="twitter" value="<?php echo $rowf['link']; ?>">
                <?php
            }
            ?>
        </div>
        <div class="form-group">
            <label>لینکداین</label>
            <?php
            $rf =  $db->select("content","`title` = 'linkedin'");
            foreach($rf as $rowf) {
                ?>
                <input type="text" class="form-control" name="linkedin" id="linkedin" value="<?php echo $rowf['link']; ?>">
                <?php
            }
            ?>
        </div>
        <div class="form-group">
            <input class="btn bg-olive btn-flat margin" type="submit" id="submitsocial" name="submitsocial" value="ذخیره">
        </div>
    </form>
<?php
}elseif($action == "aboutus")
{?>
    <div class="box-header with-border">
        <h3 class="box-title">درباره ما</h3>
    </div>
    <hr>

    <?php
        $resultabout = $db->run("SELECT * FROM `content` WHERE `type` = 'aboutus'");
        foreach($resultabout as $roab)
        {
            ?>
    <form method="POST" action="index.php?page=setting-save&id=<?php echo $roab['id']; ?>" enctype="multipart/form-data">
            <div class="form-group">
            <label>متن درباره ما</label>
            <textarea id="editor1" name="editor1" rows="10" cols="80">
        <?php echo $roab['description']; ?>
     </textarea>
           
            <div class="form-group">
                <input class="btn bg-olive btn-flat margin" type="submit" id="submitabout" name="submitabout"
                       value="ذخیره">
            </div>
    </form>
            <?php
        }
}elseif($action == "contactus")
{
    $rtel = $db->select("content","`type` = 'telephone'");
    foreach($rtel as $rowtel)
    {


    ?>
        <form method="POST" action="index.php?page=setting-save">
     <div class="form-group">
            <label><?php echo $rowtel['title']  ?></label>
            <input type="text" class="form-control"  name="telephone" id="telephone" value="<?php echo $rowtel['description']  ?>">
     </div>
        <?php
    }
    $rtel = $db->select("content","`type` = 'phone'");
    foreach($rtel as $rowtel) {
        ?>
        <div class="form-group">
            <label><?php echo $rowtel['title']  ?></label>
            <input type="text" class="form-control" name="phonenumber" id="phonenumber" value="<?php echo $rowtel['description']  ?>">
        </div>
        <?php
    }
    $rtel = $db->select("content","`type` = 'address'");
    foreach($rtel as $rowtel) {
        ?>
        <div class="form-group">
            <label><?php echo $rowtel['title']  ?></label>
            <input type="text" class="form-control" name="address" id="address" value="<?php echo $rowtel['description']  ?>">
        </div>
        <?php
    }
    $rtel = $db->select("content","`type` = 'email'");
    foreach($rtel as $rowtel) {
        ?>
        <div class="form-group">
            <label><?php echo $rowtel['title']  ?></label>
            <input type="text" class="form-control" name="email" id="email" value="<?php echo $rowtel['description']  ?>">
        </div>
        <?php
    }
?>
    <div class="form-group">
        <input class="btn bg-olive btn-flat margin" type="submit" id="submitcontact" name="submitcontact"
               value="ذخیره">
    </div>
    </form>
<?php

}
?>