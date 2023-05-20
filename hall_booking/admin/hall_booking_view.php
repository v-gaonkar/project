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
          <h1>Hall Booking Status</h1>
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
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
  <tr>
    <th width="43">Slno</th>
    <th width="93">Hall NAME</th>
	<th width="93">Hall COST</th>
    <th width="98">User Name </th>
	<th width="113">Booking Date </th>
    <th width="84">Bokking Discription </th>
    <th width="75">Booking Status </th>
    <th width="65">Confirm</th>
    <th width="65">Not-Confirm</th>
  </tr>
  </thead>
  <tbody>
 <?php  
  include('../dbconnect/dbconnection.php');
  $sl_no=1;
  $sql="select * from hall_booking hb,hall_details hd,user_details ud where hb.hall_id=hd.hall_id and hb.user_id=ud.user_id " ;
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
   <td><?php echo $sl_no++ ; ?></td>
    <td><?php echo $row['hall_name'];?> </td>
	 <td><?php echo $row['perday_cost'];?> </td>
    <td><?php echo $row['user_name'];?></td>
	<td><?php echo $row['booking_date'];?></td>
    <td><?php echo $row['booking_discription'];?></td>
    <td>
	<div <?php if($row['booking_status']=='Pending'){ ?> class="btn btn-warning" <?php } ?>
	<?php if($row['booking_status']=='Confirmed'){ ?> class="btn btn-success" <?php } ?>
	<?php if($row['booking_status']=='PAID'){ ?> class="btn btn-success" <?php } ?>
	<?php if($row['booking_status']=='Not Confirmed'){ ?> class="btn btn-danger" <?php } ?>
	
	>
	
	<?php echo $row['booking_status']?></div></td>
    <?php if($row['booking_status']=='PAID'){ ?> <td></td><td></td><?php   } else {?>
	<td><a href="hall_booking_confirm.php?hall_booking_id=<?php echo $row['hall_booking_id'];?>" class="btn btn-primary">Confirm</a></td>
	 <td><a href="hall_booking_not_confirm.php?hall_booking_id=<?php echo $row['hall_booking_id'];?>" class="btn btn-primary">Not-Confirm</a></td>
	<?php } ?>
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