<?php

          
            if(isset($_GET['id'])){
                    include('config/db.php');
            
                        $art_id = $_GET['id'];
                        $arttitle = $_POST['articletitle'];
                        $artdescript = $_POST['editor1'];
                        $update = $date->date("Y-m-d", false, false);
                         $artcat = 101;
                         if(!empty($_FILES['articleimage']['name']))
                         {
                            $artimg = $_FILES['articleimage']['name'];
                            $uploaddir = 'uploads/articles/';
                            $uploadfile = $uploaddir . basename($_FILES['articleimage']['name']);
                            move_uploaded_file($_FILES['articleimage']['tmp_name'], $uploadfile);
                            $r = $db->run("UPDATE `content` SET 
                             `image` = '$artimg' ,`title`='$arttitle'
                            ,`description` = '$artdescript' ,
                            `parent` = '$artcat',
                            `update_at` = '$update'
                              WHERE `id` = '$art_id '");
                         }else
                         {
                            $r = $db->run("UPDATE `content` SET `title`='$arttitle'
                            ,`description` = '$artdescript' ,
                            `parent` = '$artcat',
                            `update_at` = '$update'
                             WHERE `id` = '$art_id '");
                         }
                         ?>
                               
                         <script>
                         window.location.replace("index.php?page=articles&action=list&id=0");
                         </script>
                     <?php

                            if($r){
                               ?>

                                <script>
                                window.location.replace("index.php?page=articles&action=list&id=0");
                                </script>
                            <?php
                            }
                            
             }           
                    
           

?>