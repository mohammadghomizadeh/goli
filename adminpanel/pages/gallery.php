<?php
$action = $_GET['action'];
if($action == "new")
{?>

    <form  method="POST" action="index.php?page=gallery-save" enctype="multipart/form-data">                                   
        <div class="form-group">
            <label>افزودن تصویر به گالری</label>
        </div>
        <hr>
        <div class="form-group">
            <label>بارگزاری تصویر...</label>
            <input type="file" name="galleryfile" id="galleryfile">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-default btn-success" value="بارگزاری...">
        </div>
       

    </form>
<?php
}elseif($action == "list")
{
    include('config/db.php');
    $r = $db->select("content","`type` = 'gallery'");
    foreach($r as $row)
    {
?>
        <figure class="imghvr-zoom-out-right">
            <img src="uploads/gallery/<?php echo $row['image']; ?>" width="200" height="200">
                <figcaption class="text-center">
                <button onclick="location.href = 'index.php?page=article-delete&id=<?php echo $row['id']; ?>'"  type="button" class="btn btn-default btn-danger"><i class="fa fa-fw fa-remove" ></i></button>
                    <button onclick="location.href = 'index.php?page=article-edit&id=<?php echo $row['id'];  ?>'" type="button" class="btn btn-default btn-success" ><i class="fa fa-edit"></i></button>
                </figcaption>
            
        </figure>
<?php
    }
}
?>