<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Samskriti Hall-Admin</title>
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
          <h1>Worker Salary Details</h1>
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
			<a href="Worker_salary_form.php" class="btn btn-primary">Add New </a>
 <table class="table table-hover table-bordered" id="sampleTable">
<thead>
  <tr>
    <th>S.NO</th>
    <th>Worker Name</th>
    <th>Working Days </th>
    <th>Salary Amount</th>
    <th>Salary Date </th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
   <?php
   include('../dbconnect/dbconnection.php');
   $sl=1;
   $tot=0;
   $sql="select * from worker_salary ws,worker_detail wd where ws.w_id=wd.w_id";
   $res=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($res))
   {
   $tot=$tot+$row['sal_amt'];
    ?>
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['w_name'];?></td>
    <td>&nbsp;<?php echo $row['work_days'];?></td>
    <td>&nbsp;<?php echo $row['sal_amt'];?></td>
    <td>&nbsp;<?php echo $row['sal_date'];?></td>

    <td><a href="worker_salary_edit.php?ws_id=<?php echo $row['ws_id'];?>" class="btn btn-primary">EDIT</a></td>
	<td><a href="worker_salary_delete.php?ws_id=<?php echo $row['ws_id'];?>" class="btn btn-danger" onClick="return confirm('Are you sure want to delete?')">DELETE</a></td>
  </tr>
    <?php
  }
  ?>
</tbody>
<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Total Amount </strong></td>
    <td><strong><?php echo $tot; ?></strong>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

</table>
  
</div>
          </div>
        </div>

</div>    </main>

    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
	<?php include('footer.php'); ?>

</body>
</html>
