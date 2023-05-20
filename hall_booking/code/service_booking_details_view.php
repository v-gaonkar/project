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
	  <a href="service_booking_details_form.php" class="btn btn-primary">ADD NEW</a><hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
  <tr>
    <th width="27">Slno</th>
    <th width="58">Service Name </th>
    <th width="42">User name </th>
    <th width="88">Booking Date </th>
    <th width="72">Booking Price </th>
    <th width="105">Booking Discription </th>
    <th width="111">Bookingh Status </th>
    <th width="82">Edit</th>
    <th width="90">delete</th>
  </tr>
  </thead>
  <tbody>
   <?php
  include('../dbconnect/dbconnection.php');
  $sl=1;
  $sql="select * from service_booking_details sd,event_service_details es,user_details ud where sd.service_id=es.services_id and sd.user_id=ud.user_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  
  <tr>
    <td><?php echo $sl++;?></td>
    <td><?php echo $row['services_name'];?></td>
    <td><?php echo $row['user_name'];?></td>
    <td><?php echo $row['book_date'];?></td>
    <td><?php echo $row['booking_price'];?></td>
    <td><?php echo $row['booking_discription'];?></td>
    <td><?php echo $row['booking_status'];?></td>
    <td><a href="service_booking_details_edit.php?service_booking_id=<?php echo $row['service_booking_id'];?>">Edit</a></td>
    <td><a href="service_booking_details_delete.php?service_booking_id=<?php echo $row['service_booking_id'];?>">Delete</a></td>
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
