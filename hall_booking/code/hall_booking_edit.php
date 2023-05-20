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
            <h3 class="tile-title">HALL BOOKING DETAILS </h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>

<?php
include("../dbconnect/dbconnection.php");
$hall_booking_id=$_REQUEST['hall_booking_id'];
$sql="select * from hall_booking where hall_booking_id='$hall_booking_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" action="hall_booking_update.php">
<input type="hidden" name="hall_booking_id" value="<?php echo $row['hall_booking_id'];?>">
  <table width="400" height="305" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Hall Booking </div></td>
    </tr>
    <tr>
      <td><div align="center">Hall Name </div></td>
      <td><div align="center">
        <select name="hall_id" id="hall_id">
		<option="">select</option>
		<?php
		
	  include("../dbconnect/dbconnection.php");
	  $sql="select * from hall_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['hall_id']?>"<?php if($row['hall_id']==$row['hall_id']) { ?> selected <?php } ?>>
	  <?php echo $row['hall_name']?>
	  </option>
	  <?php
	  }
	  ?>
        </select>
</div></td>
    </tr>
    <tr>
      <td><div align="center">User Id </div></td>
      <td><div align="center">
        <input name="user_id" type="text" id="user_id" class=" form-control validate[required,custom[onlyLetter]]"value="<?php echo $row['user_id'];?>">
      </div></td>
    </tr>
    <tr>
      <td width="140"><div align="center">Booking date </div></td>
      <td width="165">        <div align="center">
        <input name="booking_date" type="date" id="booking_date" class=" form-control validate[required,custom[Date]]"value="<?php echo $row['booking_date'];?>">      
      </div></td>
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



	  $myCalendar = new tc_calendar("booking_date", true, false);
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
      <td><div align="center"> Booking discription </div></td>
      <td><div align="center">
        <textarea name="booking_discription" type="text" id="booking_discription" class=" form-control validate[required,custom[onlyLetter]]"><?php echo $row['booking_discription'];?></textarea>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Booking status </div></td>
      <td><div align="center">
        <input name="booking_status" type="text" id="booking_status" class=" form-control validate[required,custom[onlyLetter]]"  value="<?php echo $row['booking_status']?>">
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input name="Reset" type="reset" id="Reset" value="Reset">
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
<?php include('script.php');?>);?>
</body>
</html>
