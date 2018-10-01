<?php

if(isset($_POST['submit'])){
    include('config/db.php');
    $email = $_POST['email'] ;
    $username = $_POST['username'];
    $dis_username = $_POST['dis_username'] ;
    $password = $_POST['password'];
    $rp_password= $_POST['rp_password'] ;
    $r = $db->insert("user",array(
                    "email" => $email,
                    "username" => $username ,
                    "dis_username" => $dis_username  ,
                    "password" => $password ,
                     "status" => 1 ,
                     "type" => admin ,
                      "create_at" => $ctime));
    if($r)
    {
        ?>
        <script>
        window.location.replace("register.php");
        </script>
        <?php
    }
}else{
    echo "not submit keyed";
}