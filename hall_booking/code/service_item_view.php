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
	  <a href="service_items_form.php" class="btn btn-primary">ADD NEW</a><hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>

  <tr>
    <th width="27">Slno</th>
    <th width="73">Service Item Name </th>
    <th width="84">Service Item photo</th>
    <th width="83">Service Item Discription</th>
    <th width="79">Delete</th>
    <th width="84">Edit</th>
  </tr>
  </thead>
  <tbody>
  <?php
  include('../dbconnect/dbconnection.php');
  $sl_no=1;
  $sql="select * from service_items" ;
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $sl_no++ ; ?></td>
    <td><?php echo $row['service_item_name'];?></td>
    <td><img src="../images/<?php echo $row['service_item_photo'];?>width="100" height="200"></td>
    <td><?php echo $row['service_item_discription'];?></td>
    <td><a href="service_item_delete.php?service_item_id=<?php echo $row['service_item_id']?>">Delete</a></td>
    <td><a href="service_item_edit.php?service_item_id=<?php echo $row['service_item_id']?>">edit</a></td>
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



