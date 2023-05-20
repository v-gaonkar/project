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
          <h1>Transportation details</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
          <p></p>
      </div>
       <!--  <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
    </div>
	  <a href="transportation_form.php" class="btn btn-primary">ADD NEW</a><hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
<table width="854" height="100" border="1">
  <tr>
    <th width="101" height="61">s.no</th>
    <th width="183"><p>transportation provider id </p>
    <p>&nbsp;</p></th>
    <th width="130"><p>bill amount</p>
      <p>&nbsp;</p></th>
    <th width="105"><p>service id</p>
    <p>&nbsp;</p></th>
    <th width="127"><p>payment date</p>
    <p>&nbsp;</p></th>
    <th width="83">delete</th>
  </tr>
   <?php
  include("../dbconnect/dbconnection.php");
  $sl=1;
  $sql="select * from transportation_bill tb,transportation_provider tp,services s where tb.tp_id=tp.tp_id and tb.s_id=s.s_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  
  
  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['tp_name'];?></td>
    <td>&nbsp;<?php echo $row['pay_amt'];?></td>
    <td>&nbsp;<?php echo $row['s_name'];?></td>
    <td>&nbsp;<?php echo $row['pay_date'];?></td>
    <td><a href="transportation_bill_delete.php?bill_id=<?php echo $row['bill_id'];?>" onClick="return confirm('Are you sure want to delete?')" class="btn btn-danger">DELETE</a></td>
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