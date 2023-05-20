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
          <h1><i class="fa fa-edit"></i>Transportation Bill Details</h1>
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
            
            <div class="tile-body">
<?php
include('../dbconnect/dbconnection.php');
 $w_id=$_REQUEST['w_id'];
 $sql="select * from worker_detail where w_id='$w_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
 ?>
<form name="form1" method="post" id="formID" action="worker_details_update.php">
 <input type="hidden" value="<?php echo $row['w_id'];?>" name="w_id">
  <table width="304" height="508" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Worker Datails </div></td>
    </tr>
    <tr>
      <td>Worker Name </td>
      <td><input name="w_name" type="text" id="w_name" value="<?php echo $row['w_name'];?>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="w_address" id="w_address" class="validate[required]"><?php echo $row['w_address'];?></textarea></td>
    </tr>
    <tr>
      <td>Contact Number </td>
      <td><input name="w_contno" type="text" maxlength=10 minlength=10 id="w_contno" value="<?php echo $row['w_contno'];?>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
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