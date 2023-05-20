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
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">TRANSPORTATION BILL DETAILS </h3>
            <div class="tile-body">
			
<?php include('cal.php');?>
<?php include('val.php');?>
<form name="form1" method="post" action="transportation_bill_insert.php">
  <table width="332" border="0" align="center">
    <tr>
      <td width="160">Transportation Provider Name </td>
      <td width="162"><select name="tp_id" id="tp_id" class="validate[required]">
	  <option value="">Select Transpotation</option>
	   <?php
   include('../dbconnect/dbconnection.php');
   $sql="select * from transportation_provider";
   $res=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($res))
   {
    ?>
   <option value="<?php echo $row['tp_id'];?>"><?php echo $row['tp_name'];?></option>
  <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>Payment Amount </td>
      <td><p>
        <input name="pay_amt" type="text" id="pay_amt">
      </p>
        </td>
    </tr>
    <tr>
      <td>Payment Date </td>
      <td><p><?php					
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
      </p>
        </td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <p>
  <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
    <input name="reset" type="submit" id="reset" value="Reset" class="btn btn-danger">
        </p>
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
