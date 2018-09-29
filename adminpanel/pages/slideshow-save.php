<?php
include('config/db.php');
if(isset($_POST['submit']))
{
    try{
        $img = $_FILES['slidefile']['name'];
        if(!empty($img))
        {
            $img = $_FILES['slidefile']['name'];
            $update = $date->date("Y-m-d", false, false);
            $uploaddir = 'uploads/slideshow/';
            $uploadfile = $uploaddir . basename($_FILES['slidefile']['name']);
            move_uploaded_file($_FILES['slidefile']['tmp_name'], $uploadfile);
            $db->insert("content",array(
                'image' => $img,
                'type' => 'slideshow',
                'create_at' => $update
            ));
            ?>
            <script>
                window.location.replace("index.php?page=slideshow&action=list");
            </script>
            <?php
        };


    }
    catch(Exception $e){
        echo "error";
    }
}
else
{
    echo "لطفا تصویری بارگزاری کنید";
}
?>