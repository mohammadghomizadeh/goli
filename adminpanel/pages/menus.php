<?php
if(isset($_GET['edit']))
{
  $edit = $_GET['edit'];
  if($edit==1){

  
          $menuid = $_GET['id'];

              include('config/db.php');
                          
              $menutitle = $_POST['menutitle'];
              $menudescription = $_POST['menudescription'];

              $sql = "UPDATE `content` SET `title` = '$menutitle' , `description` =  '$menudescription'  WHERE `id` = '$menuid' ";
              $result = $db->run($sql);
          if($result)
          {


              ?>
                  <script>
                  window.location.replace("index.php?page=menus&action=list&id=0");
                  </script>
              <?php
          }
   }

}
if(isset($_GET['action']))
{//start-main-if
          $action = $_GET['action'];
          $id = $_GET['id'];
          if($action == "delete")
          {
              include('config/db.php');
              $result = $db->delete("content","`type` = 'menu' AND `id` = $id");
              if($result)
              {
                
                
                ?>
                  <script>
                  window.location.replace("index.php?page=menus&action=list&id=0");
                  </script>
                <?php
              }else
              {
                $err = "";
                echo $err = "Erorrrrr";

              }
          };





        if($action == "list")
        {
            ?>
            <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">لیست منوهای سایت</h3>

                          <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                              <input type="text" name="table_search" class="form-control pull-right" placeholder="جستجو">

                              <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.box-header -->
                    
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tbody><tr>
                              <th>شماره</th>
                              <th>عنوان</th>
                              <th>تاریخ</th>
                              <th>وضعیت</th>
                              <th>توضیحات</th>
                              <th>عملیات</th>
                            </tr>
                            <?php
                            include('config/db.php');
                            
                            $results = $db->select("content","`type` = 'mainmenu'");
                            foreach($results as $row)
                            {
                            ?>
                      
                            <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['title']; ?></td>
                              <td><?php echo $row['create_at']; ?></td>
                              <td><span class="label label-success"><?php echo $row['status']; ?></span></td>
                              <td><?php echo $row['description']; ?> </td>
                              <td>
                            
                              <div class="btn-group">

                                  <button  type="button" class="btn btn-default btn-success" data-toggle="modal" data-target="#modal-default-<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></button>
                                  <!--Start-Modal-Edit-->
                        <div class="modal modal-default fade" id="modal-default-<?php echo $row['id']; ?>" style="display: none;">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">ویرایش منو</h4>
                                          </div>
                                          <div class="modal-body">
                                            <!--start-Edit-Menu-Box-->
                                                    <div class="box box-info">
                                                  
                                                    <!-- /.box-header -->
                                                    <!-- form start -->
                                                    <form class="form-horizontal" method="POST" action="index.php?page=menus&edit=1&id=<?php echo $row['id']; ?>">
                                                      <div class="box-body">
                                                      <div class="form-group">
                                                          <label for="menuid" class="col-sm-2 control-label">شناسه</label>

                                                          <div class="col-sm-10">
                                                            <input type="text" class="form-control disabled" id="menuid" value="<?php echo $row['id']; ?>" name="menuid" placeholder="<?php echo $row['id']; ?>">
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="menutitle" class="col-sm-2 control-label">عنوان منو</label>

                                                          <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="menutitle" name="menutitle" placeholder="<?php echo $row['title']; ?>">
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="menudescription" class="col-sm-2 control-label">توضیحات</label>

                                                          <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="menudescription" name="menudescription" placeholder="<?php echo $row['description']; ?> ">
                                                          </div>
                                                          
                                                        </div>
                                                        <div class="col-sm-10">
                                                        <div class="checkbox">
                                                                  <label>
                                                                    <input type="checkbox" id="menustatus" name = "menustatus"> فعال
                                                                  </label>
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <!-- /.box-body -->

                                                      <!-- /.box-footer -->
                                                  
                                                  </div>
                            <!--End-Edit-Menu-Box-->
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn  pull-left btn-success" data-dismiss="modal">خروج</button>
                            <input  type="submit" class="btn  btn-success" value="Edit" name="submit"/>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                      
                    </div>
                   </form>
                    <!--End-Modal-Edit-->
                    <!--Start-Modal-Delete
                    <div class="modal modal-danger fade" id="modal-danger-<?php echo $row['id']; ?>" style="display: none;">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title">آیا از حذف منوی <?php echo $row['title']; ?> مطمن هستید</h4>
                          </div>
                          <div class="modal-body">
                            <p>testtss</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">خروج</button>
                            <button onclick="location.href = 'index.php?page=menus&action=delete&id=<?php echo $row['id']; ?>';" type="button" class="btn btn-outline">ذخیره</button>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!--End-Modal-Delete-->
                                </div>
                              </td>
                            </tr>
                            <?php
                            };
                        ?>
                          
                            
                          </tbody></table>
                        </div>
                        <!-- /.box-body -->
                      </div>
                    

            <?php
        };

       

//end-main-if
}



?>
