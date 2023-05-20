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
          <h1>Service Catagory Details View</h1>
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
			<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
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
  $sl_no=1;
  $sql="select * from service_catagory_details" ;
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <div class="column">
   
	<img src="../images/<?php echo $row['service_photo'];?>" alt="Snow" style="width:100%">
 <h3 align="center"><?php echo $row['service_catagory_name'];?></h3>
 <div align="center"><a href="service_details_view.php?service_catagory_id=<?php echo $row['service_catagory_id']?>" class="btn btn-primary">Category Wise Search</a></div>
  </div>
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