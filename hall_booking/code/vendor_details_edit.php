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
            <h3 class="tile-title">VENDER DETAILS</h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>

<?php include('val.php');?>
<?php
include("../dbconnect/dbconnection.php");
$vendor_id =$_REQUEST['vendor_id'];
$sql="select * from vender_details where vendor_id ='$vendor_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" id="formID" action="vendor_details_update.php">
<input type="hidden" name="vendor_id" value="<?php echo $row['vendor_id'];?>">

  <table width="354" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Vendor details</div></td>
    </tr>
    <tr>
      <td width="188">vendor name </td>
      <td width="150"><input name="vendor_name" type="text" class=" form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['vendor_name'];?>"></td>
    </tr>
    <tr>
      <td>vendor address </td>
      <td><textarea name="vendor_address" class=" form-control validate[required,custom[onlyLetter]]" id="vendor_address"><?php echo $row['vendor_address'];?></textarea></td>
    </tr>
    <tr>
      <td>email id </td>
      <td><input name="email_id" type="text" id="email_id" class=" form-control validate[required,custom[email]]" value="<?php echo $row['email_id'];?>"></td>
    </tr>
    <tr>
      <td>contact no </td>
      <td><input name="contact_no" type="text" id="contact_no" class=" form-control validate[required,custom[mobile]]" value="<?php echo $row['contact_no'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
        <input name="Reset"  class="btn btn-danger"type="reset" id="Reset" value="Reset">
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
