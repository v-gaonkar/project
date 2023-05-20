<html>
<body>
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
  <table width="382" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">Service catagory details </div></td>
    </tr>
    <tr>
      <td width="174">service catagory name </td>
      <td width="192"><input name="service_catagory_name" type="text" id="service_catagory_name	" class=" form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['service_catagory_name'];?>"></td>
    </tr>
    <tr>
      <td>service photo </td>
      <td><input name="service_photo" type="file" id="service_photo"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input name="Reset" type="reset" id="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
</form>
