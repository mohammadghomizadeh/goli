<?php
if(isset($_GET['id']))
{
    include('config/db.php');
    $art_id = $_GET['id'];
    $r = $db->delete("agencies","`id` = '$art_id'");
    if($r)
    {
        ?>
                               
        <script>
        window.location.replace("index.php?page=agency&action=list&id=0");
        </script>
    <?php
    }
}

?>