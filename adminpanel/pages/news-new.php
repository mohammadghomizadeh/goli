<?php

if(isset($_POST['submit'])){
    include('config/db.php');
    $ctime = $date->date("Y-m-d", false, false);
    $newstitle = $_POST['newstitle'] ;
    $newsdescription = $_POST['editor1'];
    $newseimg =  $_FILES['newsicon']['name'];
    $uploaddir = 'uploads/news/';
    $uploadfile = $uploaddir . basename($_FILES['newsicon']['name']);
    move_uploaded_file($_FILES['newsicon']['tmp_name'], $uploadfile);
    $r = $db->insert("content",array(
                    "title" => $newstitle,
                    "description" => $newsdescription ,
                    "image" => $newseimg ,
                     "sort" => 1 ,
                     "type" => news,
                      "create_at" => $ctime));
    if($r)
    {
        ?>
        <script>
        window.location.replace("index.php?page=news&action=list");
        </script>
        <?php
    }
}else{
    echo "not submit keyed";
}