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
	  <a href="purchase_details_form.php" class="btn btn-primary">ADD NEW</a><hr>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
		  
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
  <tr>
    <td width="41">Slno</td>
    <td width="98">Vendor name</td>
    <td width="104">Service Item Name</td>
    <td width="90">Quantity</td>
    <td width="118">Purchse Rate </td>
    <td width="94">Purchase Date</td>
    <td width="67">Edit</td>
    <td width="80">Delete</td>
  </tr>
  </thead>
  <tbody>
  <?php 
  include('../dbconnect/dbconnection.php');
  $sl_no=1 ;
  $sql="select * from  purchase_details pd,vender_details vd,service_items si where pd.vendor_id=vd.vendor_id and pd.service_item_id=si.service_item_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    
	<td><?php echo $sl_no++ ;?></td> 
    <td><?php echo $row['vendor_name'];?></td>
    <td><?php echo $row['service_item_name'];?></td>
    <td><?php echo $row['quantity'];?></td>
    <td><?php echo $row['purchase_rate'];?></td>
    <td><?php echo $row['purchase_date'];?></td>
    <td><a href="purchase_details_Edit.php?purchase_id=<?php echo $row['purchase_id'];?>">Edit</a></td>
    <td><a href="purchase_details_delete.php?purchase_id=<?php echo $row['purchase_id'];?>">Delete</a></td>
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


