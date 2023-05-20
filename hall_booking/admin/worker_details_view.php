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
          <h1>Worker Details</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
      </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
    </div>
	   <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
			<a href="worker_details_form.php" class="btn btn-primary">Add New</a>
 <table class="table table-hover table-bordered" id="sampleTable">
<thead>
  <tr>
    <td>S.NO</td>
    <td>Worker Name</td>
    <td>Worker Address</td>
    <td>Worker Contact Number </td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
  </thead>
  <tbody>
    <?php
    include('../dbconnect/dbconnection.php');
   $sl=1;
   $sql="select * from worker_detail";
   $res=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($res))
   {
    ?>
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['w_name'];?></td>
    <td>&nbsp;<?php echo $row['w_address'];?></td>
    <td>&nbsp;<?php echo $row['w_contno'];?></td>
    <td><a href="worker_details_edit.php?w_id=<?php echo $row['w_id'];?>" class="btn btn-primary">EDIT</a></td>
    <td><a href="worker_details_delete.php?w_id=<?php echo $row['w_id'];?>" class="btn btn-danger" onClick="return confirm('Are you sure want to delete?')">DELETE</a></td>
  </tr>
  <?php
  }
  ?>

  </tbody>
</table>
  
</div>
          </div>
        </div>

</div>    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
	<?php include('footer.php'); ?>

</body>
</html>
