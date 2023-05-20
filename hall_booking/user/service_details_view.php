<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Samskriti Hall</title>
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
          <h1>Service DetailsView</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
      </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
    </div>
<hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
			<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
  border-style: solid;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>

<h2>Service Category</h2>
<p>Category Display:</p>

<div class="row">

 <?php
  include('../dbconnect/dbconnection.php');
 $service_catagory_id=$_REQUEST['service_catagory_id'];
 $sql="select * from event_service_details e,service_catagory_details s where e.service_catagory_id=s.service_catagory_id and e.service_catagory_id='$service_catagory_id'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <div class="column">
   
	<img src="../images/<?php echo $row['services_photo'];?>" alt="Snow" style="width:100%">
 	<h4 align="center" style="color:#0000CC; "><?php echo $row['services_name'];?></h4>
 <h5 align="center">Category : <?php echo $row['service_catagory_name'];?></h5>
 <h4 align="center">Cost : <?php echo $row['service_price'];?></h4>
 <div><b>Info:</b> <?php echo $row['services_discription'];?></div><br>
 <div align="center"><a href="service_booking_details_form.php?service_price=<?php echo $row['service_price'];?>&services_id=<?php echo $row['services_id'];?>" class="btn btn-primary">Book Now</a></div>
  </div>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <?php
  }
  ?>
</div>

             
</div>
          </div>
        </div>

</div>    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
	<?php include('footer.php'); ?>

</body>
</html>
