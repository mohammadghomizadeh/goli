<?php
 $uploaddir = 'uploads/';
 $uploadfile = $uploaddir . basename($_FILES['articleimage']['name']);
 move_uploaded_file($_FILES['articleimage']['tmp_name'], $uploadfile);
echo$_FILES['articleimage']['name'];

?>