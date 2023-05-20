<?php
include('../dbconnect/dbconnection.php');
$service_item_id=$_REQUEST['service_item_id'];
$sql="delete from service_items where $service_item_id='$service_item_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("deleted....");
document.location="service_item_view.php";
</script>