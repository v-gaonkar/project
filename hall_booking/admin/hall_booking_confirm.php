<?php
include('../dbconnect/dbconnection.php');
$hall_booking_id=$_REQUEST['hall_booking_id'];
$sql="update hall_booking set booking_status='Confirmed' where hall_booking_id='$hall_booking_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Booking Confirmed....");
document.location="hall_booking_view.php";
</script>