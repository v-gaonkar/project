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
            <h3 class="tile-title">SEVICE BOOKING   DETAILS </h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>

<?php include('val.php');?>
<form action="service_item_insert.php" enctype="multipart/form-data" id="formID" method="post" name="form1">
  <table width="372" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Service items</div></td>
    </tr>
    <tr>
      <td width="138">service item name </td>
      <td width="218"><input name="service_item_name" type="text" id="service_item_name" class=" form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>service item photo </td>
      <td><input name="service_item_photo" type="file" id="service_item_photo"></td>
    </tr>
    <tr>
      <td>service item discription </td>
      <td><textarea name="service_item_discription" id="service_item_discription" class=" form-control validate[required,customer[onlyLetter]]"></textarea></td>
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

