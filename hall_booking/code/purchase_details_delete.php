<?php
include('../dbconnect/dbconnection.php');
$purchase_id=$_REQUEST['purchase_id'];
$sql="delete from purchase_details where $purchase_id ='$purchase_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("deleted....");
document.location="purchase_details_view.php";
</script>