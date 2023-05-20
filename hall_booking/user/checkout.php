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
          <h1>Service Booking Details </h1>
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
              <table class="table table-hover table-bordered" >
                <thead>
  <tr>
    <th width="27">Slno</th>
    <th width="58">Service Name </th>
    <th width="42">User name </th>
    <th width="88">Booking Date </th>
    <th width="72">Booking Price </th>
    <th width="105">Booking Discription </th>
    <th width="111">Booking Status </th>
  </tr>
  </thead>
  <tbody>
   <?php
  include('../dbconnect/dbconnection.php');
  $sl=1;
  $uname=$_SESSION['uname'];
  $tot=0;
  $user_id=0;
  $user_name='';
  $sql="select * from service_booking_details sd,event_service_details es,user_details ud where sd.service_id=es.services_id and sd.user_id=ud.user_id and ud.email_id='$uname' and sd.booking_status='Confirmed' ORDER BY  sd.service_booking_id DESC";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $user_id=$row['user_id'];
  $user_name=$row['user_name'];
  if($row['booking_status']!='Cancled')
  {
  $tot=$tot+$row['booking_price'];
  }
  ?>
  
  <tr>
    <td><?php echo $sl++;?></td>
    <td><?php echo $row['services_name'];?></td>
    <td><?php echo $row['user_name'];?></td>
    <td><?php echo $row['book_date'];?></td>
    <td><?php echo $row['booking_price'];?></td>
    <td><?php echo $row['booking_discription'];?></td>
    <td><div <?php if($row['booking_status']=='Pending'){ ?> class="btn btn-warning" <?php } ?>
	<?php if($row['booking_status']=='Cancled'){ ?> class="btn btn-danger" <?php } ?>
	<?php if($row['booking_status']=='Confirmed'){ ?> class="btn btn-success" <?php } ?>
	>
	
	<?php echo $row['booking_status']?></div></td>
   
  </tr>
  <?php
  }
  ?>
  </tbody>
   <tr>
    <td colspan="4"><div align="right"><strong>Total Booking Amount</strong></div></td>
    <td><strong><div class="btn btn-info">Rs. <?php echo $tot;?></strong></div></td>
   
    <td></td>
   
    <td></td>
  </tr>
</table>
 

<a href="pay_now.php?user_id=<?php echo $user_id; ?>&user_name=<?php echo $user_name; ?>&rate=<?php echo $tot; ?>" class="btn btn-success">Pay Now</a>

</div>
          </div>
        </div>

</div>    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
	<?php include('footer.php'); ?>

</body>
</html>
