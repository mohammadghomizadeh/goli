<?php
include('adminpanel/config/db.php');
    $email  = $_POST['email '];
    $username = $_POST['username'];
    $dis_username = $_POST['dis_username'];
    $password = $_POST['password'];
    $rp_password = $_POST['rp_password'];

    
$result = "INSERT INTO `user` (`email`, `username`, `dis_username`, 
`password`, `rp_password`)
VALUES('$email',
    
    '$username',
    '$dis_username',
    '$password',
    '$rp_password');";
    $conn->exec($result);
   
   
        
header('Location:../index.php');

?>