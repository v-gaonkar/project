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
          <h1>Transportation Bill Details</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
      </div>
       
    </div>
	   <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
			<form action="transportation_bill_view_next.php" method="post">
			Select Transport Provider: <select name="tp_id" id="tp_id" class="validate[required]">
	  <option value="">Select Transpotation</option>
	   <?php
   include('../dbconnect/dbconnection.php');
   $tp_id=$_POST['tp_id'];
   $sql="select * from transportation_provider where tp_id='$tp_id'";
   $res=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($res))
   {
    ?>
   <option value="<?php echo $row['tp_id'];?>"><?php echo $row['tp_name'];?></option>
  <?php
  }
  ?>
      </select>
	  <input type="submit" name="b1" value="Search">
			</form>
			<p>&nbsp;</p>
			
			<a href="transportation_bill_form.php" class="btn btn-primary">Add New</a>
  <table class="table table-hover table-bordered" id="sampleTable">
<thead>
  <tr>
    <th>s.no</th>
    <th>Trans Provider Name</th>
    <th>Bill Amount</th>
    <th>payment date</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
   <?php
 include('../dbconnect/dbconnection.php');
  $sl=1;
  $tot=0;
  $sql="select * from transportation_bill tb,transportation_provider tp where tb.tp_id=tp.tp_id ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $tot=$tot+$row['pay_amt'];
  ?>
  
  
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['tp_name'];?></td>
    <td>&nbsp;<?php echo $row['pay_amt'];?></td>
    <td>&nbsp;<?php echo $row['pay_date'];?></td>
    <td><a href="transportation_bill_delete.php?bill_id=<?php echo $row['bill_id'];?>" class="btn btn-danger" onClick="return confirm('Are you sure want to delete?')">DELETE</a></td>
  </tr>
   <?php
  }
  ?>

 </tbody>
 <tr>
    <td>&nbsp;</td>
    <td><strong>Total Amount </strong></td>
    <td>&nbsp;<strong><?php echo $tot; ?></strong></td>
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
