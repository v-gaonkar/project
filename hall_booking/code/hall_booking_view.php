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
	  <a href="hall_booking_form.php" class="btn btn-primary">ADD NEW</a><hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
  <tr>
    <th width="43">Slno</th>
    <th width="93">Hall NAME</th>
    <th width="98">User Id </th>
    <th width="113">Booking Date </th>
    <th width="84">Bokking Discription </th>
    <th width="75">Booking Status </th>
    <th width="59">Edit</th>
    <th width="65">Delete</th>
  </tr>
  </thead>
  <tbody>
 <?php  
  include('../dbconnect/dbconnection.php');
  $sl_no=1;
  $sql="select * from hall_booking hb,hall_details hd where hb.hall_id=hd.hall_id" ;
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
   <td><?php echo $sl_no++ ; ?></td>
    <td><?php echo $row['hall_name'];?> </td>
    <td><?php echo $row['user_id'];?></td>
    <td><?php echo $row['booking_date'];?></td>
    <td><?php echo $row['booking_discription'];?></td>
    <td><?php echo $row['booking_status']?>;</td>
    <td><a href="hall_booking_edit.php?hall_booking_id=<?php echo $row['hall_booking_id'];?>">edit</a></td>
    <td><a href="hall_booking_delete.php?hall_booking_id=<?php echo $row['hall_booking_id'];?>">delete</a></td>
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