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
            <h3 class="tile-title">TRANSPORTATION DETAILS </h3>
            <div class="tile-body">
			<?php include('val.php');?>
<form name="form1" id="formID" method="post" enctype="multipart/form-data" action="transportation_insert.php">
  <table width="407" height="353" border="0" align="center">
    <tr>
      <td height="54" colspan="2"> <div align="center" class="style1">Transportation Provider Details </div></td>
    </tr>
    <tr>
      <td width="206"><span class="style4">Name</span></td>
      <td width="200"><input name="tp_name" type="text" id="tp_name" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td height="104"><span class="style4">Address</span></td>
      <td><textarea name="tp_address" id="tp_address" class="validate[required]"></textarea></td>
    </tr>
    <tr>
      <td height="42"><span class="style4">Email id </span></td>
      <td><input name="email_id" type="email" id="email_id" class="validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td height="49"><span class="style4">contact number </span></td>
      <td><input name="contact_no" type="text" id="contact_no" maxlength=10 minlength=10 class="validate[required]"></td>
    </tr>
    <tr>
      <td height="53" colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
&nbsp;        
        <input name="reset" type="reset" class="btn btn-danger" id="reset" value="Reset"  >
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
