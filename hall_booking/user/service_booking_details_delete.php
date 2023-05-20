<?php
include('../dbconnect/dbconnection.php');
$service_booking_id =$_REQUEST['service_booking_id'];
$sql="update service_booking_details set booking_status='Cancled' where service_booking_id =service_booking_id";
mysqli_query($conn,$sql);
?>
<script>
alert("Service Cancled....");
document.location='service_booking_details_view.php';
</script>

