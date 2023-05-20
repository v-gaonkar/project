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
            <h3 class="tile-title">HALL DETAILS </h3>
            <div class="tile-body">
			

<?php include('val.php');?>
<form action="hall_detail_insert.php" method="post" enctype="multipart/form-data" id="formID" name="form1">
  <table width="552" height="877" border="0" >
    <tr>
      <td width="282"><div align="center">Hall name </div></td>
      <td width="271"><div align="center">
        <input name="hall_name" type="text" id="hall_name" class=" form-control validate[required,custom[onlyLetter]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Hall address</div></td>
      <td><div align="center">
        <textarea name="hall_address" id="hall_address" class=" form-control validate[required]"></textarea>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Owner name</div></td>
      <td><div align="center">
        <input name="owner_name" type="text" id="owner_name" class=" form-control validate[required,custom[onlyLetter]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Contact no</div></td>
      <td><div align="center">
        <input name="contact_no" type="text" id="contact_no" class=" form-control validate[required,custom[mobile]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Email id</div></td>
      <td><div align="center">
        <input name="email_id" type="email" id="email_id" class=" form-control validate[required,custom[email]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Hall Photos</div></td>
      <td><div align="center">
        <input name="hall_photos" type="file" id="hall_photos">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Hall discription</div></td>
      <td><div align="center">
        <textarea name="hall_discription" id="hall_discription" class=" form-control validate[required]"></textarea>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Perday cost</div></td>
      <td><div align="center">
        <input name="perday_cost" type="text" id="perday_cost" class=" form-control validate[required,custom[onlyNumber]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Types of 
          
      hall</div></td>
      <td><div align="center">
        <select name="types_of_hall" id="types_of_hall" class="validate[required] form-control">
          <option>Select</option>
          <option>Non AC</option>
          <option>AC</option>
          <option>AC and Non AC</option>
          <option>Genral</option>
        </select>
</div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
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
</html>
