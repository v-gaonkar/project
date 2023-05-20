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
            <h3 class="tile-title">EVENT SERVICE  DETAILS </h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>
<?php include('val.php'); ?>

<?php include('val.php'); ?>
<?php
include("../dbconnect/dbconnection.php");
$services_id=$_REQUEST['services_id'];
$sql="select * from event_service_details where $services_id=services_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form action="service_details_update.php" id="formID" method="post" name="form1">
<input type="hidden" name="services_id" value="<?php echo $row['services_id'];?>">
  <table width="413" height="466" border="0" align="center">
    <tr>
      <td width="158">service name</td>
      <td width="239"><input name="services_name" type="text" id="services_name" class=" form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['services_name'];?>"></td>
    </tr>
    <tr>
      <td>service discription</td>
      <td><textarea name="services_discription" class=" form-control validate[required]" id="services_discription"><?php echo $row['services_discription'];?></textarea></td>
    </tr>
    <tr>
      <td>service price</td>
      <td><input name="service_price" type="text" class=" form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['service_price'];?>"></td>
    </tr>
   
    <tr>
      <td>Service Catagoery </td>
      <td><select name="services_category_id" id="services_category_id" class="form-control validate[required]">
        <option value="">Select name</option>
        <?php
	  include('../dbconnect/dbconnection.php');
  $sql1="select * from service_catagory_details";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
        <option value="<?php echo $row['service_catagory_id'];?>"<?php if($row1['service_catagory_id']==$row['service_catagory_id']) {?>selected<?php } ?>><?php echo $row1['service_catagory_name'];?></option>
        <?php
  }
  ?>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
          <input name="Reset" class="btn btn-danger" type="reset" id="Reset" value="Reset">
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit"class="btn btn-primary" name="Submit" value="Submit">
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
</body>
</html>
