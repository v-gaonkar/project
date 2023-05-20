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
            <h3 class="tile-title">VENDER DETAILS </h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>
 <form name="form1" id="formID" method="post" action="vendor_details_insert.php">
  <table width="330" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Vendor details</div></td>
    </tr>
    <tr>
      <td width="132">vendor name</td>
      <td width="188"><input name="vendor_name" type="text" id="vendor_name" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>vendor address</td>
      <td><textarea name="vendor_address" id="vendor_address" class=" form-control validate[required]" ></textarea></td>
    </tr>
    <tr>
      <td>email id</td>
  <td><input name="email_id" type="text" id="email_id" class=" form-control validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td>contact no</td>
      <td><input type="text"  name="contact_no" id="contact_no" class=" form-control validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit"  class="btn btn-primary" name="Submit" value="Submit">
        <input name="Reset"  class="btn btn-danger" type="reset" id="Reset" value="Reset">
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