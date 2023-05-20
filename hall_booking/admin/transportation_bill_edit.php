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
            <h3 class="tile-title">Tansportation Bill DETAILS </h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>
<?php include('val.php'); ?>

<?php
include('../dbconnect/dbconnection.php');
$bill_id=$_REQUEST['bill_id'];
$sql="select * from transportation_bill where bill_id='$bill_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" action="transportation_bill_update.php">
<input type="hidden" value="<?php echo $row['bill_id'];?>" name="bill_id">

  <table width="512" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">Transportation Bill Details </div></td>
    </tr>
    <tr>
      <td width="232">transportation provider name </td>
      <td width="264"><select name="tp_id" id="tp_id" class="validate[required]">
        <option value="">select transportation provider</option>
        <?php
  
  $sql1="select * from transportation_provider";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
        <option value="<?php echo $row1['tp_id'];?>" <?php if($row1['tp_id']==$row['tp_id']) { ?> selected <?php } ?> > <?php echo $row1['tp_name'];?></option>
        <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>payment amount </td>
      <td><input name="pay_amt" type="text" id="pay_amt" value="<?php echo $row['pay_amt'];?>"></td>
    </tr>
    <tr>
      <td>service name </td>
      <td><select name="service_catagory_id " id="service_catagory_id " class="validate[required]">
        <option value="">select service</option>
        <?php
  
  $sql2="select * from service_catagory_details";
  $res2=mysqli_query($conn,$sql2);
  while($row2=mysqli_fetch_array($res2))
  {
  ?>
        <option value="<?php echo $row2['service_catagory_id '];?>" <?php if($row2['service_catagory_id ']==$row['service_catagory_id ']) { ?> selected <?php } ?> > <?php echo $row2['service_catagory_name'];?></option>
        <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td>payment date </td>
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
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
      </div></td>
    </tr>
  </table>
  <div align="center"></div>
</form>
</div>
          </div>
                      </div>
                    </div>
                     <!-- End Form Elements -->
              <?php include('footer.php'); ?>  </div>
            </div>
                <!-- /. ROW  -->
               
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->

    <?php include('val.php'); ?>



</body>

</html>
