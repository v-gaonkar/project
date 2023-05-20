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
          <h1>Services Booking </h1>
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
			<?php
			include('../dbconnect/dbconnection.php');
			$uname=$_SESSION['uname'];
  
  $sql="select * from service_booking_details sd,event_service_details es,user_details ud where sd.service_id=es.services_id and sd.user_id=ud.user_id and ud.email_id='$uname' and sd.booking_status='Confirmed'";
  $res=mysqli_query($conn,$sql);
  if($row=mysqli_fetch_array($res))
  {
  ?>
			<a href="checkout.php" class="btn btn-warning">Checkout Your Book</a>
  <?php 
  }
  ?>
			<p>&nbsp;</p>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
  <tr>
    <th width="27">Slno</th>
    <th width="58">Service Name </th>
    <th width="42">User name </th>
    <th width="88">Booking Date </th>
    <th width="72">Booking Price </th>
    <th width="105">Booking Discription </th>
    <th width="111">Booking Status </th>
    
    <th width="90">Cancle</th>
	<th width="90">Remove</th>
  </tr>
  </thead>
  <tbody>
   <?php
  $sl=1;
  
  $tot=0;
  $sql="select * from service_booking_details sd,event_service_details es,user_details ud where sd.service_id=es.services_id and sd.user_id=ud.user_id and ud.email_id='$uname' ORDER BY  sd.service_booking_id DESC";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  
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
	<?php if($row['booking_status']=='Confirmed' || $row['booking_status']=='PAID' ){ ?> class="btn btn-success" <?php } ?>
	>
	
	<?php echo $row['booking_status']?></div></td>
   
    <td><?php if($row['booking_status']=='Pending') { ?><a href="service_booking_details_delete.php?service_booking_id=<?php echo $row['service_booking_id'];?>" class="btn btn-danger" onClick="return confirm('Are u sure want to delete')">Cancle</a><?php } ?>
	<?php if($row['booking_status']=='Cancled') { ?><a href="service_booking_details_re_book.php?service_booking_id=<?php echo $row['service_booking_id'];?>" class="btn btn-info" onClick="return confirm('Are u sure want to Book Now')">Re Book Now</a><?php } ?>
	</td>
	<td><?php if($row['booking_status']=='Cancled' || $row['booking_status']=='Pending') { ?><a href="service_booking_remove.php?service_booking_id=<?php echo $row['service_booking_id'];?>" class="btn btn-info" onClick="return confirm('Are u sure want to Remove From List')">Remove</a><?php } ?></td>
  </tr>
  <?php
  }
  ?>
  </tbody>
   <tr>
    <td></td>
    <td</td>
    <td></td>
	 <td></td>
    <td><strong>Total&nbsp;Amount</strong></td>
    <td><strong><?php echo $tot;?></strong></td>
   
    <td></td>
   
    <td></td>
  </tr>
</table>
 

<p>&nbsp;</p>
	<?php
			
  $sql="select * from service_booking_details sd,event_service_details es,user_details ud where sd.service_id=es.services_id and sd.user_id=ud.user_id and ud.email_id='$uname' and sd.booking_status='Confirmed'";
  $res=mysqli_query($conn,$sql);
  if($row=mysqli_fetch_array($res))
  {
  ?>
			<a href="checkout.php" class="btn btn-warning">Checkout Your Book</a>
  <?php 
  }
  ?>
		
</div>
          </div>
        </div>

</div>    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
	<?php include('footer.php'); ?>

</body>
</html>
