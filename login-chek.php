<?php


include('adminpanel/config/db.php');
$username=$_POST['Username'];
$password=$_POST['Password'];
$s = $db->run("SELECT * FROM `user` WHERE `username` = '".$username."'  AND `password` = '".$password."'");
if ($s){
    header('location:login.php?err=1');
    }
    else{
        session_start();
        $_SESSION["check-login"] = true;
        header('location:adminpanel/index.php');
    }
?>