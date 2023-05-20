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
            <h3 class="tile-title">EMPLOYEE  DETAILS </h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>

<?php include("val.php");?>
<?php
include("../dbconnect/dbconnection.php");
$employee_id=$_REQUEST['employee_id'];
$sql="select * from employee_details where employee_id='$employee_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" id="formID" method="post" action="employee_details_update.php">
<input type="hidden" name="employee_id" value="<?php echo $row['employee_id'];?>">
  <table width="250" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Employee Details </div></td>
    </tr>
    <tr>
      <td width="231">employee name </td>
      <td width="180"><input name="employee_name" type="text" id="employee_name" class=class="validate[required,custom[onlyLetter]]" value="<?php echo $row['employee_name'];?>" placeholder="enter emp name"></td>
    </tr>
    <tr>
      <td>date of joining </td>
      <td><input name="date_of_joining" type="date" id="date_of_joining" class=class=" form-control validate[required,custom[date]]" value="<?php echo $row['date_of_joining'];?>"></td>
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



	  $myCalendar = new tc_calendar("date_of_joining", true, false);
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
      <td>gender      </td>
      <td><input name="gender" type="radio" value="Male">
        Male 
        <input name="gender" type="radio" value="Female">
        Female</td>
    </tr>
    <tr>
      <td>email id </td>
      <td><input name="email_id" type="email" id="email_id" class=" form-control validate[required,custom[email]]" value="<?php echo $row['email_id'];?>"></td>
    </tr>
    <tr>
      <td>cantact no </td>
      <td><input name="contact_no" type="text" id="contact_no" class=" form-control validate[required,custom[mobile]]" value="<?php echo $row['contact_no'];?>"></td>
    </tr>
    <tr>
      <td>employee salary</td>
      <td><input name="employee_salary" type="text" id="employee_salary" class=" form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['employee_salary'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="Submit" class="btn btn-primary" type="submit" id="Submit" value="Submit">
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
