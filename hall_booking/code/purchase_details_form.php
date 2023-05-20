<!DOCTYPE html>
<html lang="en">
<style type="text/css">
<!--
.style3 {font-size: medium; font-style: italic; font-weight: bold; }
-->
</style>
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Activity</h1>
          <!-- <p>Sample forms</p> -->
        </div>
       <!--  <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul> -->
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">PURCHASE DETAILS </h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>

<?php include('val.php');?>
<form name="form1" method="post" id="formID" action="purchase_details_insert.php">
  <table width="250" height="239" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Purchase Details </div></td>
    </tr>
    <tr>
      <td><div align="center">Vendor Name</div></td>
      <td><select name="vendor_name" id="vendor_name" class=" form-control validate[required]">
	  <option value="">select name</option>
	  <?php
	  include('../dbconnect/dbconnection.php');
	  $sql="select * from vender_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
?>
<option value="<?php echo $row['vendor_id'];?>"><?php echo $row['vendor_name'];?></option>
<?php
}
?>
      </select></td>
    </tr>
    <tr>
      <td><div align="center">Service_Item_name</div></td>
      <td><select name="service_item_name" id="service_item_name" class=" form-control validate[required]">
	 <option value="">select name</option>
	  <?php
	  include("../dbconnect/dbconnection.php");
	  $sql1="select * from service_items";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
	  <option value="<?php echo $row1['service_item_id']?>"><?php echo $row1['service_item_name']?>
	  </option>
	  <?php
	  }
	  ?>
	  </select></td>
    </tr>
    <tr>
      <td width="161"><div align="center">quantity</div></td>
      <td width="158"><input name="quantity" type="text" id="quantity" class=" form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><div align="center">purchase rate </div></td>
      <td><input name="purchase_rate" type="text" id="purchase_rate" class=" form-control validate[required,custom[onlyNumber]]"></td>
    </tr><?php					
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("purchase_date", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?> 
    <tr>
      <td><div align="center">purchase date </div></td>
      <td><input name="purchase_date" type="date" id="purchase_date" class=" form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit"  class="btn btn-primary" name="Submit" value="Submit">
        <input name="Reset" class="btn btn-danger" type="reset" id="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
</form>
</div>

           
          </div>
        </div>
        
</main>
	
	<?php include('footer.php');?>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
<?php include('val.php');?>


</body>
</html>
