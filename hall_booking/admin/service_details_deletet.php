<?php
include('../dbconnect/dbconnection.php');
$services_id=$_REQUEST['services_id'];
$sql="delete from event_service_details where services_id='$services_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("deleted....");
document.location="event_service_details_view.php";
</script>