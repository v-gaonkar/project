

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
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
    <!--  <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul> -->
    </div>
      <div class="col-md-6"><div class="tile">
        <div class="tile-body">
			<p>
			    <?php include("cal.php"); ?>
  </p>
            <p>USER BILL DETAILS
              <?php include("val.php");?>
            </p>
<form name="form1" method="post" id="formID" action="user_bill_details_insert.php">
  <table width="373" border="0" align="center">
    <tr> </tr>
    <tr>
      <td><div align="left">Service Id </div></td>
      <td><option value="">
        <input name="service_id" type="text" id="service_id" class=" form-control validate[required,custom[onlyNumber]]">
      </option></td>
      <?php
	  include("../dbconnect/dbconnection.php");
	  $sql="select * from service_booking_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
      <option value="<?php echo $row['service_booking_id']?>"> <?php echo $row['service_id']?> </option>
      <?php
	  }
	  ?>
    </tr>
    <tr>
      <td width="179">Bill amount
          <div align="left"></div></td>
      <td width="178"><div align="left">
          <input name="bill_amount" type="text" id="bill_amount" class=" form-control validate[required,custom[onlyNumber]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="left">Bill date </div></td>
      <td><div align="left">
          <input name="bill_date" type="date" id="bill_date" class=" form-control validate[required,custom[date]]">
      </div></td>
    </tr>
    <?php					
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("bill_date", true, false);
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
      <td><div align="left">Gst</div></td>
      <td><div align="left">
          <input name="gst" type="text" id="gst" class=" form-control validate[required,custom[onlyNumber]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="left">Total amount </div></td>
      <td><div align="left">
          <input name="total_amount" type="text" id="total_amount" class=" form-control validate[required,custom[onlyNumber]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="left">Bill status </div></td>
      <td><div align="left">
          <input name="bill_status" type="text" id="bill_status" class=" form-control validate[required,custom[onlyLetter]]">
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
          <input name="Reset"class="btn btn-danger" type="reset" id="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
  <div align="center"></div>
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
