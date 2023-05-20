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
<?php include('val.php');?>
<form name="form1" method="post" action="hall_booking_insert.php" id="formID">
  <table width="400" height="305" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Hall Booking </div></td>
    </tr>
    <tr>
      <td><div align="center">Hall Name </div></td>
      <td><select name="hall_id" id="hall_id" class=" form-control validate[required,custom[onlyLetter]]">
	  <option value="">select</option>
	  <?php
	  include("../dbconnect/dbconnection.php");
	  $sql="select * from hall_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['hall_id']?>">
	  <?php echo $row['hall_name']?>
	  </option>
	  <?php
	  }
	  ?>
	  </select></td>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">User Name </div></td>
        <td><select name="user_id" id="user_id" class=" form-control validate[required,custom[onlyLetter]]">
	  <option value="">select</option>
	  <?php
	  include("../dbconnect/dbconnection.php");
	  $sql="select * from user_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['user_id']?>">
	  <?php echo $row['user_name']?>
	  </option>
	  <?php
	  }
	  ?>
	  </select></td>
 
      </div></td>
    </tr>
    <tr>
      <td width="140"><div align="center">Booking date</div></td>
      <td width="165">        
        <input name="booking_date" type="date"   id="booking_date" class=" form-control validate[required,custom[date]]">      
     </td><?php					
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
    </tr>
    <tr>
      <td><div align="center"> Booking discription </div></td>
      <td><textarea name="booking_discription" class=" form-control validate[required]" id="booking_discription"></textarea>
      </td>
    </tr>
    <tr>
      <td><div align="center">Booking status </div></td>
      <td>
        <input name="booking_status" type="text"  id="booking_status" class=" form-control validate[required,custom[onlyLetter]]">
      </td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
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
