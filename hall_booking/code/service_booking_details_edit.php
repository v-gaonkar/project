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
            <h3 class="tile-title">SEVICE BOOKING   DETAILS </h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>

<?php
include("../dbconnect/dbconnection.php");
$service_booking_id=$_REQUEST['service_booking_id'];
$sql="select * from service_booking_details where service_booking_id='$service_booking_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" id="formID" action="service_booking_details_update.php">
<input type="hidden" name="service_booking_id" class=" form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['service_booking_id'];?>">
  <label><table width="363" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Service booking details</div></td>
    </tr>
    <tr>
      <td>Service name </td>
      <td><select name="services_id"  class=" form-control validate[required]" id="services_id">
        <option>select name</option>
	  <?php
		
	  include("../dbconnect/dbconnection.php");
	  $sql="select * from event_service_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['services_id']?>"<?php if($row['services_id']==$row['services_id']) { ?> selected <?php } ?>>
	  <?php echo $row['services_name']?>
	  </option>
	  <?php
	  }
	  ?>

      </select></td>
    </tr>
    <tr>
      <td>User name </td>
      <td><select name="user_name"  class=" form-control validate[required]" id="user_name">
        <option>select name</option>
		<?php
		
	  include("../dbconnect/dbconnection.php");
	  $sql="select * from user_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['user_id']?>"<?php if($row['user_id']==$row['user_id']) { ?> selected <?php } ?>>
	  <?php echo $row['user_name']?>
	  </option>
	  <?php
	  }
	  ?>

      </select></td>
    </tr>
    <tr>
      <td width="194">Book date </td>
      <td width="153"><input name="book_date" type="date" id="book_date" class=" form-control validate[required,custom[date]]" value="<?php echo $row['book_date'];?>"></td>
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



	  $myCalendar = new tc_calendar("book_date", true, false);
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
      <td>Booking price </td>
      <td><input name="booking_price" type="text" id="booking_price" class=" form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['booking_price'];?>"></td>
    </tr>
    <tr>
      <td>Booking discription </td>
      <td><textarea name="booking_discription" class=" form-control validate[required,custom[onlyLetter]]" id="booking_discription"><?php echo $row['booking_discription'];?></textarea></td>
    </tr>
    <tr>
      <td>Booking status </td>
      <td><input name="booking_status" type="text" id="booking_status" class=" form-control validate[required,custom[onlyLetter]]"value="<?php echo $row['booking_status'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit"  class="btn btn-primary" name="Submit" value="Submit">
        <input name="Reset"  class="btn btn-danger" type="reset" id="Reset" value="Reset">
      </div></td>
    </tr>
  </table></label>
  <em></em>
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
