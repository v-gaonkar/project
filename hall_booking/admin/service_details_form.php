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
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">EVENT SERVICE DETAILS </h3>
            <div class="tile-body">
			<?php include("cal.php"); ?>
<?php include('val.php'); ?>
<form action="service_details_insert.php" method="post" enctype="multipart/form-data" id="formID" name="form1">
  <table width="413" height="559" border="0" align="center">
    <tr>
      <td width="158">Service name </td>
      <td width="239"><input name="services_name" id="services_name" type="text" id="services_name" class=" form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Service Discription </td>
      <td><textarea name="services_discription" id="services_discription" class=" form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td>Service Price </td>
      <td><input type="text" name="service_price" class=" form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Service photo </td>
      <td><input name="services_photo" type="file" id="services_photo"></td>
    </tr>
    <tr>
      <td>Service Catagoery </td>
      <td><select name="services_category_id" id="services_category_id" class="form-control validate[required]">
        <option value="">Select name</option>
        <?php
	  include('../dbconnect/dbconnection.php');
  $sql="select * from service_catagory_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row['service_catagory_id'];?>"><?php echo $row['service_catagory_name'];?></option>
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