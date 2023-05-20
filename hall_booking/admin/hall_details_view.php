<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Samskriti hall-Admin</title>
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
          <h1>Hall details</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
      </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
    </div>
	  <a href="hall_details_form.php" class="btn btn-primary">ADD NEW</a><hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
  <tr>
    <th width="39" height="83">Slno</th>
    <th width="102">Hall Name </th>
    <th width="122">Hall Address </th>
    <th width="168">Owner Name </th>
    <th width="178">Contact Number </th>
    <th width="127">Email Id </th>
    <th width="200">Hall Photos</th>
    <th width="179">Hall Discription</th>
    <th width="117">PerDay Cost </th>
    <th width="158">Types Of Hall</th>
    <th width="75">Edit</th>
    <th width="75">Delete</th>
  </tr>
  </thead>
  <tbody>
<?php
 include('../dbconnect/dbconnection.php');
  $sl_no=1;
  $sql="select * from hall_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td ><?php echo $sl_no++;?></td>
    <td><?php echo $row['hall_name'];?></td>
    <td><?php echo $row['hall_address'];?></td>
    <td><?php echo $row['owner_name'];?></td>
    <td><?php echo $row['contact_no'];?></td>
    <td><?php echo $row['email_id'];?></td>
    <td><img src="../images/<?php echo $row['hall_photos'];?>" width="100" height="100"></td>
    <td><?php echo $row['hall_discription'];?></td>
    <td><?php echo $row['perday_cost'];?></td>
    <td><?php echo $row['types_of_hall'];?></td>
    <td><a href="hall_detail_edit.php?hall_id=<?php echo $row['hall_id'];?>" class="btn btn-primary">Edit</a></td>
    <td><a href="hall_detail_delete.php?hall_id=<?php echo $row['hall_id'];?>" class="btn btn-danger">Delete</a></td>
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