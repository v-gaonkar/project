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
          <h1><i class="fa fa-edit"></i>Service Booking Details</h1>
          <!-- <p>Sample forms</p> -->
        </div>
       <!--  <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul> -->
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">SEVICE BOOKING   DETAILS </h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>
<?php include('val.php');?>
<form name="form1" method="post" id="formID" action="service_booking_details_insert.php">
  <label><table width="487" height="565" border="0" align="center">
    <tr>
      <td>Services name</td>
      <td><select name="services_id" id="services_id" class="form-control validate[required]">
	  
	  <?php
	  include('../dbconnect/dbconnection.php');
	  $services_id=$_REQUEST['services_id'];
  $sql="select * from event_service_details where services_id='$services_id'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <option value="<?php echo $row['services_id'];?>"><?php echo $row['services_name'];?></option>
  <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>User Name </td>
      <td><select name="user_id" id="user_id" class="form-control">
	 
	  <?php
	$uname=$_SESSION['uname'];
  $sql1="select * from user_details where email_id='$uname'";
  $res1=mysqli_query($conn,$sql1);
  while($row=mysqli_fetch_array($res1))
  {
  ?>
  <option value="<?php echo $row['user_id'];?>"><?php echo $row['user_name'];?></option>
  <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td width="194">Book date </td>
      <td width="153"><?php					
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
	  ?> </td>
    </tr>
    <tr>
      <td>Booking price </td>
      <td><input name="booking_price" readonly="" class="form-control" value="<?php echo $_REQUEST['service_price'];?>" type="text" id="booking_price" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Booking discription </td>
      <td><textarea name="booking_discription" class="form-control" id="booking_discription"  class="validate[required]"></textarea></td>
    </tr>
   
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit"  class="btn btn-primary" name="Submit" value="Submit">
        <input name="Reset" class="btn btn-danger" type="reset" id="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
  </label>
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