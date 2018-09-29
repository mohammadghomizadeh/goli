<?php

if(isset($_POST['submit'])){
    include('config/db.php');
    $ctime = $date->date("Y-m-d", false, false);
    $producttitle = $_POST['producttitle'] ;
    $productdescription = $_POST['editor1'];
    $productimg =  $_FILES['producticon']['name'];
    $uploaddir = 'uploads/product/';
    $uploadfile = $uploaddir . basename($_FILES['producticon']['name']);
    move_uploaded_file($_FILES['producticon']['tmp_name'], $uploadfile);
    $r = $db->insert("content",array(
                    "title" => $producttitle,
                    "description" => $productdescription ,
                    "image" => $productimg ,
                    "image2" => $productimg2 ,
                     "sort" => 1 ,
                     "type" => product ,
                      "create_at" => $ctime));
    if($r)
    {
        ?>
        <script>
        window.location.replace("index.php?page=product&action=list");
        </script>
        <?php
    }
}else{
    echo "not submit keyed";
}