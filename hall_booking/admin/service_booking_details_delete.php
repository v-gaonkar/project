<?php
include('../dbconnect/dbconnection.php');
$service_booking_id =$_REQUEST['service_booking_id'];
$sql="delete from service_booking_details where $service_booking_id =service_booking_id";
mysqli_query($conn,$sql);
?>
<script>
alert("deleted....");
document.location='service_booking_details_view.php';
</script>

