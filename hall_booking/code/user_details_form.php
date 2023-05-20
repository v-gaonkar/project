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
            <h3 class="tile-title">USER DETAILS </h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>

<?php include('val.php');?>
<form name="form1" id="formID" method="post"  action="user_details_insert.php">
  <table width="345" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">User details</div></td>
    </tr>
    <tr>
      <td width="121">User name</td>
      <td width="208"><input name="user_name" type="text" id="user_name" class=" form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>User address </td>
      <td><textarea name="user_address" id="user_address" class=" form-control validate[required,custom[onlyLetter]]"></textarea></td>
    </tr>
    <tr>
      <td>Email id </td>
      <td><input name="email_id" type="email" id="email_id" class=" form-control validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td>Contact no </td>
      <td><input name="contact_no" type="text" id="contact_no" class=" form-control validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td>User city </td>
      <td><input name="user_city" type="text" id="user_city" class=" form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Location</td>
      <td><textarea name="location" id="location" class=" form-control validate[required,custom[onlyLetter]]"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input name="Reset" type="reset" id="Reset" value="Reset">
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
