<?php
include('config/db.php');
if(isset($_POST['submit']))
{   
    try{
        $img = $_FILES['galleryfile']['name'];
        if(!empty($img))
        {   
            $img = $_FILES['galleryfile']['name'];
            $update = $date->date("Y-m-d", false, false);
            $uploaddir = 'uploads/gallery/';
            $uploadfile = $uploaddir . basename($_FILES['galleryfile']['name']);
            move_uploaded_file($_FILES['galleryfile']['tmp_name'], $uploadfile);
            $db->insert("content",array(
                'image' => $img,
                'type' => 'gallery',
                'create_at' => $update
            ));
?>
                         <script>
                         window.location.replace("index.php?page=gallery&action=list");
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