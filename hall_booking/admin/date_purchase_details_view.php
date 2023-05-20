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
			 <?php include('cal.php'); ?>
						  <form name="form1" method="post" role="form" action="date_purchase_details_view.php" id="formID">

                                           <table class="table table-striped table-bordered table-hover">
         <tr>
           <td><label>Select From Date</label></td>
           <td><?php					
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("date1", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
           <td>&nbsp;</td>
           <td><label>Select To Date</label></td>
           <td><?php					
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("date2", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
         </tr>
         <tr>
           <td colspan="4"><label><button type="submit" class="btn btn-primary">Search</button></label></td>
           <td>&nbsp;</td>
         </tr>
       </table>
</form>
<?php
$date1=$_REQUEST['date1'];
$date2=$_REQUEST['date2'];

?>
<b>From Date : <font color="#0000FF"><?php echo $date1; ?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Date : <font color="#0000FF"><?php echo $date2; ?></font>&nbsp;</b>

              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
  <tr>
    <th width="41">Slno</th>
    <th width="98">Vendor name</th>
    <th width="104">Service Item Name</th>
    <th width="90">Quantity</th>
	<th width="90">Total</th>
    <th width="118">Purchse Rate </th>
    <th width="94">Purchase Date</th>
    <th width="67">Edit</th>
    <th width="80">Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php 
  include('../dbconnect/dbconnection.php');
  $sl_no=1 ;
  $tot=0;
  $sql="select * from  purchase_details pd,vender_details vd,service_items si where pd.vendor_id=vd.vendor_id and pd.service_item_id=si.service_item_id and pd.purchase_date between '$date1' and '$date2'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $tot=$tot+($row['quantity']*$row['purchase_rate']);
  ?>
  <tr>
    
	<td><?php echo $sl_no++ ;?></td> 
    <td><?php echo $row['vendor_name'];?></td>
    <td><?php echo $row['service_item_name'];?></td>
    <td><?php echo $row['quantity'];?></td>
    <td><?php echo $row['purchase_rate'];?></td>
	<td><?php echo ($row['quantity']*$row['purchase_rate']);?></td>
    <td><?php echo $row['purchase_date'];?></td>
    <td><a href="purchase_details_Edit.php?purchase_id=<?php echo $row['purchase_id'];?>" class="btn btn-primary">Edit</a></td>
    <td><a href="purchase_details_delete.php?purchase_id=<?php echo $row['purchase_id'];?>" class="btn btn-danger">Delete</a></td>
  </tr>
  </tbody>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Total Amount </strong></td>
    <td>&nbsp;<strong><?php echo $tot;?></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php 
  }
  ?>
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


