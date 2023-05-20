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
	  <a href="user_bill_details_form.php" class="btn btn-primary">ADD NEW</a><hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>

  <tr>
    <th width="27">Slno</th>
    <th width="105">Service Booking Id </th>
    <th width="106">Bill Amount </th>
    <th width="71">Bill date </th>
    <th width="71">Gst</th>
    <th width="93">Total Amount</th>
    <th width="74">Bill Status</th>
    <th width="60">Edit</th>
    <th width="94">Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
    include('../dbconnect/dbconnection.php');
  $sl_no=1;
  $sql="select * from user_bill_details ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $sl_no++ ;?></td>
    <td><?php echo $row['service_booking_id'];?></td>
    <td><?php echo $row['bill_amount'];?></td>
    <td><?php echo $row['bill_date'];?></td>
    <td><?php echo $row['gst'];?></td>
    <td><?php echo $row['total_amount'];?></td>
    <td><?php echo $row['bill_status'];?></td>
    <td><a href="user_bill_details_edit.php?user_bill_id=<?php echo $row['user_bill_id']?>">Edit</a></td>
    <td><a href="user_bill_details_delete.php?user_bill_id=<?php echo $row['user_bill_id']?>">Delete</a></td>
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
