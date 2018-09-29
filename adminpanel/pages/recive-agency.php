<?php
if(isset($_GET['action']))
{
    $action = $_GET['action'];
        if($action == "insert")
        {

              $agencytitle = $_POST['agencytitle'];
              $agencyimage = $_FILES['agencyimage']['name'];
              $agencygallery = $_POST['agencygallery'];
              $agencycity = $_POST['agencycity'];
              $agencyaddress= $_POST['agencyaddress'];
              $agencycity_code = $_POST['agencycity_code'];
              $agencycall_number = $_POST['agencycall_number'];
              $agencyfax = $_POST['agencyfax'];
              $agencypostal_code = $_POST['agencypostal_code'];
              $agencyemail= $_POST['agencyemail'];
              $agencyhourse_work= $_POST['agencyhourse_work'];
              $agencystate= $_POST['agencystate'];
              $agencytype_agency= $_POST['agencytype_agency'];
              $agencytype_service= $_POST['agencytype_service'];
              $agencyBranch= $_POST['agencyBranch'];
              $agencySale= $_POST['agencySale'];
              $agencysales_servicel= $_POST['agencysales_service'];
              $agencyParts = $_POST['agencyParts '];
              
             
              $uploaddir = 'uploads/agencyes/';
              $uploadfile = $uploaddir . basename($_FILES['agencyimage']['name']);
              move_uploaded_file($_FILES['agencyimage']['tmp_name'], $uploadfile);
              include('config/db.php');
              $result = $db->insert("agencies", array(
                "title" => $agencytitle,
                "image" => $agencyimage,
                "gallery" =>  $agencygallery,
                "city" =>  $agencycity,
                "address" =>  $agencyaddress,
                "city_code" =>  $agencycity_code,
                "call_number" =>  $agencycall_number,
                "fax" =>  $agencyfax,
                "postal_code" =>  $agencypostal_code,
                "email" =>  $agencyemail ,
                "hourse_work" =>  $agencyhourse_work ,
                "state" =>  $agencystate ,
                "type_agency" =>  $agencytype_agency ,
                "type_service" =>  $agencytype_service  ,
                "Branch" =>  $agencyBranch  ,
                "Sale" =>  $agencySale  ,
                "sales_service " =>  $agencysales_service  ,
                "Parts" =>  $agencyParts  ,
                "status" => 1,
                "create_at" => $date->date("Y-m-d", false, false)
                           ));
                    if($result){
                     
                      ?>
                      <script>
                      window.location.replace("index.php?page=agency&action=list&id=0");
                      </script>
   
            
         <?php
        //End-html-new-agency-block;

        }
        if($action == "list")
        {
           ?> 

          <div class="box">
          <div class="box-header">
            <h3 class="box-title">لیست عاملیت ها </h3>

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
                <th>ردیف</th>
                <th>تصویر</th>
                <th>عنوان</th>
                <th>تاریخ</th>
                <th>وضعیت</th>
               
                <th>عملیات</th>
              </tr>
              <?php
              include('config/db.php');
              
              $results = $db->select("agencies");
              $i = 1;
              foreach($results as $row)
              {

              ?>
        
              <tr>
                <td><?php echo $i; ?></td>
                <td><img src="uploads/agencyes/<?php echo $row['image'];  ?>" width="20" height="20"/></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['create_at']; ?></td>
                <td><span class="label label-success"><?php echo $row['status']; ?></span></td>
                
                <td>
              
                <div class="btn-group">
                    <button onclick="location.href = 'index.php?page=agency-delete&id=<?php echo $row['id'];  ?>'"  type="button" class="btn btn-default btn-danger"><i class="fa fa-fw fa-remove" ></i></button>
                    <button onclick="location.href = 'index.php?page=agency-edit&id=<?php echo $row['id'];  ?>'" type="button" class="btn btn-default btn-success" ><i class="fa fa-edit"></i></button>
                    <!--Start-Modal-Edit-->
          
      <!--End-Modal-Edit-->

                  </div>
                </td>
              </tr>
              <?php
              $i++;
              };
          ?>
            
              
            </tbody></table>
          </div>
          <!-- /.box-body -->
        </div>

<?php
}
}
?>