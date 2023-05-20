<?php
include('../dbconnect/dbconnection.php');
$vendor_id =$_REQUEST['vendor_id'];
$sql="delete from vender_details where vendor_id='$vendor_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("deleted....");
document.location="vendor_details_view.php";
</script>