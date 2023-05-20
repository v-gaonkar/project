<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
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
          <h1>Vendor DetailsView</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
      </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
    </div>
	  <a href="event_service_details_form.php" class="btn btn-primary">ADD NEW</a><hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
  <tr>
    <td width="23">Slno</td>
    <td width="58">Services Name</td>
    <td width="70">Services Discription</td>
    <td width="52">Service Price</td>
    <td width="58">Services Photo</td>
    <td width="65">Service Catagory id</td>
    <td width="26">Edit</td>
    <td width="26">Delete</td>
  </tr> 
  </thead>
  <tbody>  
  <?php 
  include('../dbconnect/dbconnection.php');
  $sl_no=1;
  $sql="select * from event_service_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>        
    <td> <?php echo $sl_no++;?></td >
    <td><?php echo $row['services_name'];?></td>
    <td><?php echo $row['services_discription'];?></td>
    <td><?php echo $row['service_price'];?></td>
    <td><img src="../images/<?php echo $row['services_photo'];?>" width="100" height="200"></td>
    <td><?php echo $row['service_catagory_id'];?></td>
	<td><a href="event_service_details_edit.php?services_id=<?php echo $row['services_id'];?>">Edit</a></td>
	<td><a href="event_service_details_delete.php?services_id=<?php echo $row['services_id'];?>">Delete</a></td>
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
