<?php
include('../dbconnect/dbconnection.php');
$vendor_id=$_POST['vendor_id'];
$vendor_name=$_POST['vendor_name'];
$vendor_add=$_POST['vendor_address'];
$email=$_POST['esmail_id'];
$contact_no=$_POST['contact_no'];
$sql="update vender_details set vendor_name='$vendor_name',vendor_address='$vendor_add',email_id='$email',contact_no='$contact_no' where vendor_id='$vendor_id'";
mysqli_query($conn,$sql);
 ?>
<script>
alert("values updated");
document.location="vendor_details_view.php";
</script>
