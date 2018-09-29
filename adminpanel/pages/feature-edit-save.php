<?php

          
            if(isset($_GET['id'])){
                    include('config/db.php');
            
                        $art_id = $_GET['id'];
                        $arttitle = $_POST['featuretitle'];
                        $artdescript = $_POST['editor1'];
                        $update = $date->date("Y-m-d", false, false);
                         $artcat = 101;
                         if(!empty($_FILES['featureimage']['name']))
                         {
                            $artimg = $_FILES['featureimage']['name'];
                            $uploaddir = 'uploads/features/';
                            $uploadfile = $uploaddir . basename($_FILES['featureimage']['name']);
                            move_uploaded_file($_FILES['featureimage']['tmp_name'], $uploadfile);
                            $r = $db->run("UPDATE `main_feature` SET 
                             `image` = '$artimg' ,`title`='$arttitle'
                            ,`description` = '$artdescript' ,
                            `parent` = '$artcat',
                            `update_at` = '$update'
                              WHERE `id` = '$art_id '");
                         }else
                         {
                            $r = $db->run("UPDATE `main_feature` SET `title`='$arttitle'
                            ,`description` = '$artdescript' ,
                            `parent` = '$artcat',
                            `update_at` = '$update'
                             WHERE `id` = '$art_id '");
                         }
                         ?>
                               
                         <script>
                         window.location.replace("index.php?page=feature&action=list&id=0");
                         </script>
                     <?php

                            if($r){
                               ?>

                                <script>
                                window.location.replace("index.php?page=feature&action=list&id=0");
                                </script>
                            <?php
                            }
                            
             }           
                    
           

?>