<?php

          
            if(isset($_GET['id'])){
                    include('config/db.php');
            
                        $art_id = $_GET['id'];
                        
                        $artdescript = $_POST['editor1'];
                        $update = $date->date("Y-m-d", false, false);
                         $artcat = 101;
                         if(!empty($_FILES['aboutimage']['name']))
                         {
                            $artimg = $_FILES['aboutimage']['name'];
                            $uploaddir = 'uploads/about/';
                            $uploadfile = $uploaddir . basename($_FILES['aboutimage']['name']);
                            move_uploaded_file($_FILES['aboutimage']['tmp_name'], $uploadfile);
                            $r = $db->run("UPDATE `content` SET 
                            `description` = '$artdescript',
                            `update_at` = '$update'
                              WHERE `id` = '$art_id '");
                         }else
                         {
                            $r = $db->run("UPDATE `content` SET 
                            `description` = '$artdescript' ,
                            `update_at` = '$update'
                             WHERE `id` = '$art_id '");
                         }
                         ?>
                               
                         <script>
                         window.location.replace("index.php?page=about-edit&action=list&id=0");
                         </script>
                     <?php

                            if($r){
                               ?>

                                <script>
                                window.location.replace("index.php?page=about-edit&action=list&id=0");
                                </script>
                            <?php
                            }
                            
             }           
                    
           

?>