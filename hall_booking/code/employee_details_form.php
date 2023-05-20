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
            <p>EMPLOYEE DETAILS 
              <?php include("val.php");?>
            </p>
            <form name="form1" id="formID" method="post" action="employee_details_insert.php" >
  <table width="100" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Employee Details</div></td>
    </tr>
    <tr>
      <td width="231">employee name</td>
      <td width="180"><input name="employee_name" type="text" id="employee_name" class=" form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>date of joining</td>
      
	  <td><input name="date_of_joining" type="date" id="date_of_joining" class=" form-control validate[required,custom[date]]"></td>
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
	</tr>
	
    <tr>
     <td>gender</td>
	 <td><input name="gender" type="radio" value="radiobutton">
	   male 
       <input name="gender" type="radio" value="radiobutton">
       female</td>
    </tr>
    <tr>
      <td>email id</td>
      <td><input name="email_id"  type="email" id="email_id" class="form-control validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td>contact no</td>
      <td><input name="contact_no"  type="text" id="contact_no" class=" form-control validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td>employee salary</td>
      <td><input name="employee_salary" type="text" id="employee_salary" class=" form-control validate[required,custom[onlyNumber]]" ></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="Submit"class="btn btn-primary"  type="submit" id="Submit" value="Submit">
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
