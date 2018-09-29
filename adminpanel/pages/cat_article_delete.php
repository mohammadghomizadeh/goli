<?php
if(isset($_GET['id']))
{
    include('config/db.php');
    $art_id = $_GET['id'];
    $r = $db->delete("category","`id` = '$art_id'");
    if($r)
    {
        ?>
                               
        <script>
        window.location.replace("index.php?page=cat_article&action=list&id=0");
        </script>
    <?php
    }
}

?>