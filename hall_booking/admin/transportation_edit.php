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
$tp_id=$_REQUEST['tp_id'];
$sql="select * from transportation_provider where tp_id='$tp_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post"  id="formID" action="transportation_update.php">
<input type="hidden" value="<?php echo $row['tp_id'];?>" name="tp_id">
  <table width="580" height="458" border="0" align="center">
    <tr>
      <td colspan="2"> <div align="center" class="style1">Transporation Provider Deatils </div></td>
    </tr>
    <tr>
      <td width="290"><span class="style4">Name</span></td>
      <td width="274"><input name="tp_name" type="text" id="tp_name" value="<?php echo $row['tp_name'];?>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><span class="style4">Address</span></td>
      <td><textarea name="tp_address" id="tp_address" class="validate[required,custom[onlyLetter]]"><?php echo $row['tp_address'];?></textarea></td>
    </tr>
    <tr>
      <td><span class="style4">Email id </span></td>
      <td><input name="email_id" type="email" id="email_id" value="<?php echo $row['email_id'];?>" class="validate[required]"></td>
    </tr>
    <tr>
      <td><span class="style4">contact number </span></td>
      <td><input name="contact_no" type="text" maxlength=10 minlength=10 id="contact_no" value="<?php echo $row['contact_no'];?>" class="validate[required]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
&nbsp;        
<input name="reset" class="btn btn-danger" type="reset" id="reset" value="Reset">
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