


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
                
                $results = $db->select("content","type = 'menu'");
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
                      <button onclick="location.href = 'index.php?page=menu-delete&id=<?php echo $row['id']; ?>';" type="button" class="btn btn-default btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                      <button onclick="location.href = 'index.php?page=menu-edit';" type="button" class="btn btn-default btn-success"><i class="fa fa-edit"></i></button>
                    </div>
                  </td>
                </tr>
                <?php
                }
            ?>
               
                 
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>