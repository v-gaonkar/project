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
            <h3 class="tile-title">EVENT SERVICE DETAILS </h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>
<?php include('val.php'); ?>
<form action="event_service_details_insert.php" method="post" enctype="multipart/form-data" id="formID" name="form1">
  <table width="413" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Event Service Details </div></td>
    </tr>
    <tr>
      <td width="158">service name </td>
      <td width="239"><input name="services_name" type="text" id="services_name" class=" form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>service discription </td>
      <td><textarea name="services_discription" id="services_discription" class=" form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td>service price </td>
      <td><input type="text" name="service_price" class=" form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>service photo </td>
      <td><input name="services_photo" type="file" id="services_photo"></td>
    </tr>
    <tr>
      <td>Service Catagoery id </td>
      <td><input type="text" name="service_catagory_id" class=" form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
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
<?php include('script.php');?>);?>

  </body>
</html>
<?php include('val.php');?>