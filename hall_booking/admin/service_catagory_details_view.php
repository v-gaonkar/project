<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Samskriti Hall-Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<!DOCTYPE html>
<html lang="en">
  <head>
<?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
<?php include('header.php');?>
    <!-- Sidebar menu-->
<?php include('sidebar.php');?>
    <main class="app-content"><div class="app-title">
      <div>
          <h1>Service Catagory Details</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
      </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
    </div>
	  <a href="service_catagory_details_form.php" class="btn btn-primary">ADD NEW</a><hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>

  <tr>
    <th>Slno</th>
    <th>Service Catagory Name</th>
    <th>Service Photo</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  include('../dbconnect/dbconnection.php');
  $sl_no=1;
  $sql="select * from service_catagory_details" ;
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $sl_no++ ; ?></td>
    <td><?php echo $row['service_catagory_name'];?></td>
    <td><img src="../images/<?php echo $row['service_photo'];?>" width="100" height="100"></td>
    <td><a href="service_catagory_details_edit.php?service_catagory_id=<?php echo $row['service_catagory_id']?>" class="btn btn-primary">Edit</a></td>
    <td><a href="service_catagory_details_delete.php?service_catagory_id=<?php echo $row['service_catagory_id']?>" class="btn btn-danger">Delete</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</tbody>

</div>
          </div>
        </div>

</div>    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
	<?php include('footer.php'); ?>

</body>
</html>