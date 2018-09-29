<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    include('config/db.php');
    $result = $db->delete("content"," `id` = $id");

    if($result)
    {
        ?>
        <script>
            window.location.replace("index.php?page=slideshow&action=list");
        </script>
        <?php
    }else
    {
        echo "خطا در حذف  لطفا با پشتیبانی تماس بگیرید";
    }


}else
{
    ?>
    <script>
        window.location.replace("index.php?page=slideshow&action=list");
    </script>
    <?php
}



?>