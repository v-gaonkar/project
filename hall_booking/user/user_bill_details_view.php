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
          <h1>User Payments</h1>
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
    <th width="27">Slno</th>
    <th width="94">User Name</th>
    <th width="105">Service Type</th>
    <th width="106">Paid Amount </th>
    <th width="71">Paid Date </th>
    
     </tr>
  </thead>
  <tbody>
  <?php
    include('../dbconnect/dbconnection.php');
  $sl_no=1;
  $uname=$_SESSION['uname'];
  $sql="select * from user_bill_details ub, user_details ud where ub.user_id=ud.user_id and ud.email_id='$uname'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $sl_no++ ;?></td>
    <td><?php echo $row['user_name'];?></td>
    <td><?php echo $row['service_type'];?></td>

    <td><?php echo $row['bill_amount'];?></td>
    <td><?php echo $row['bill_date'];?></td>
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
