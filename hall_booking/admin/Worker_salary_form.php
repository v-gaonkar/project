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
          <h1><i class="fa fa-edit"></i>WORKER SALARY DETAILS </h1>
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
            
            <div class="tile-body">
			<?php include("cal.php"); ?>
<?php include('val.php');?>
<form name="form1" method="post" id="formID" enctype="multipart/form-data" action="worker_salary_insert.php">
  <table width="442" height="472" border="0" align="center">
    <tr>
      <td>Worker Name </td>
      <td><select name="w_id" id="w_id" class="validate[required]">
	  <option value="">Select Worker</option>
	   <?php
   include('../dbconnect/dbconnection.php');
   $sql="select * from worker_detail";
   $res=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($res))
   {
    ?>
  <option value="<?php echo $row['w_id'];?>"><?php echo $row['w_name'];?></option>
  <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>Working Days</td>
      <td><input name="work_days" type="text" id="work_days" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Salary Amount </td>
      <td><input name="sal_amt" type="text" id="sal_amt" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Salary Date </td>
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



	  $myCalendar = new tc_calendar("book_date", true, false);
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
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit"  class="btn btn-primary">
        <input name="reset" type="submit" id="reset" value="Reset"  class="btn btn-danger">
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
