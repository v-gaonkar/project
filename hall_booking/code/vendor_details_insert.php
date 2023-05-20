<?php
include('../dbconnect/dbconnection.php');
$vendor_name=$_POST['vendor_name'];
$vendor_address=$_POST['vendor_address']; 
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$sql="insert into vender_details values(null,'$vendor_name','$vendor_address','$email_id','$contact_no')";
mysqli_query($conn,$sql);
?>
<script>
alert("Values inserted");
document.location="vendor_details_view.php";
</script>