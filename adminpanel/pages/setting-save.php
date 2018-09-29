<?php
include('config/db.php');
    if(isset($_POST['submit']))
    {

        $id = $_GET['id'];
        $title = $_POST['sitetitle'];
        $description = $_POST['sitedescription'];
        $logo = $_FILES['sitelogo']['name'];
        $icon = $_FILES['siteicon']['name'];
        $headerscript = $_POST['headerscript'];
        $footerscript = $_POST['footerscript'];
        if(!empty($logo) && !empty($icon))
        {
            $uploaddir = 'uploads/site/';
            $uploadfile = $uploaddir . basename($_FILES['sitelogo']['name']);
            move_uploaded_file($_FILES['sitelogo']['tmp_name'], $uploadfile);
            $uploadfile = $uploaddir . basename($_FILES['siteicon']['name']);
            move_uploaded_file($_FILES['siteicon']['tmp_name'], $uploadfile);
            $RESULT = $db->run("UPDATE `settings` SET 
                          `title` = '$title',
                          `description` = '$description',
                          `logo` = '$logo',
                          `icon` = '$icon',
                          `headscript` = '$headerscript',
                          `footerscript` = '$footerscript' WHERE `id` = '$id' ");
        }else
        {
            $RESULT = $db->run("UPDATE `settings` SET 
                          `title` = '$title',
                          `description` = '$description',
                          `headscript` = '$headerscript',
                          `footerscript` = '$footerscript' WHERE `id` = '$id' ");
        }
?>
            <script>
                window.location.replace("index.php?page=setting&action=setting");
            </script>
<?php
    }
    elseif(isset($_POST['submitsocial']))
    {
        $facebook = $_POST['facebook'];
        if(!empty($facebook)){
            $db->run("UPDATE `content` SET `link` = '$facebook' WHERE `title` = 'facebook'");
        }else
        {
            $db->run("UPDATE `content` SET `link` = 'لینک مورد نظر را وارد نمایید' WHERE `title` = 'facebook'");
        }
        $instagram = $_POST['instagram'];
        if(!empty($instagram)){
            $db->run("UPDATE `content` SET `link` = '$instagram' WHERE `title` = 'instagram'");
        }else
        {
            $db->run("UPDATE `content` SET `link` = 'لینک مورد نظر را وارد نمایید' WHERE `title` = 'instagram'");
        }
        $telegram = $_POST['telegram'];
        if(!empty($telegram)){
            $db->run("UPDATE `content` SET `link` = '$telegram' WHERE `title` = 'telegram'");
        }
        else
        {
            $db->run("UPDATE `content` SET `link` = 'لینک مورد نظر را وارد نمایید' WHERE `title` = 'telegram'");
        }
        $googleplus = $_POST['googleplus'];
        if(!empty($googleplus)){
            $db->run("UPDATE `content` SET `link` = '$googleplus' WHERE `title` = 'googleplus'");
        }
        else
        {
            $db->run("UPDATE `content` SET `link` = 'لینک مورد نظر را وارد نمایید' WHERE `title` = 'googleplus'");
        }
        
        ?>
        <script>
            window.location.replace("index.php?page=setting&action=social");
        </script>
        <?php
    }
    elseif(isset($_POST['submitabout']))
    {
        $aid = $_GET['id'];
        $description = $_POST['editor1'];
        $aboutimage = $_FILES['aimg']['name'];
        if(!empty($aboutimage))
        {
            $uploaddir = 'uploads/site/';
            $uploadfile = $uploaddir . basename($_FILES['aimg']['name']);
            move_uploaded_file($_FILES['aimg']['tmp_name'], $uploadfile);
            $RESULT = $db->run("UPDATE `content` SET 
                          `title` = 'درباره ما',
                          `description` = '$description',
                          `image` = '$aboutimage' WHERE `id` = '$aid' ");

        }else
        {
            $RESULT = $db->run("UPDATE `content` SET 
                          `title` = 'درباره ما',
                          `description` = '$description'
                           WHERE `id` = '$aid' ");
        }

            ?>
            <script>
                window.location.replace("index.php?page=setting&action=aboutus");
            </script>
            <?php

    }
    elseif(isset($_POST['submitcontact']))
    {
        $tel = $_POST['telephone'];
            $db->run("UPDATE `content` SET `description` = '$tel' WHERE `type` = 'telephone'");
        $phone = $_POST['phonenumber'];
            $db->run("UPDATE `content` SET `description` = '$phone' WHERE `type` = 'phone'");
        $address = $_POST['address'];
            $db->run("UPDATE `content` SET `description` = '$address' WHERE `type` = 'address'");
        $email = $_POST['email'];
            $db->run("UPDATE `content` SET `description` = '$email' WHERE `type` = 'email'");
        ?>
        <script>
            window.location.replace("index.php?page=setting&action=contactus");
        </script>
        <?php
    }
?>