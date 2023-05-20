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
            <h3 class="tile-title">SEVICE CATAGORY DETAILS </h3>
            <div class="tile-body">
<?php include("val.php");?>
<?php
include("../dbconnect/dbconnection.php");
$service_catagory_id=$_REQUEST['service_catagory_id'];
$sql="select * from service_catagory_details where service_catagory_id='$service_catagory_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" id="formID" action="service_catagory_details_update.php">
<input type="hidden" name="service_catagory_id" value="<?php echo $row['service_catagory_id'];?>">
<form action="" method="post" name="form1">
  <table width="705" height="276" border="0" align="center">
    <tr>
      <td width="245">service catagory name </td>
      <td width="602"><input name="service_catagory_name" type="text" id="service_catagory_name	" class="validate[required,custom[onlyLetter]]" value="<?php echo $row['service_catagory_name'];?>"></td>
    </tr>
    <tr>
      <td>service photo </td>
      <td><input name="service_photo" type="file" id="service_photo"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input name="Reset" type="reset" id="Reset" value="Reset" class="btn btn-danger">
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
