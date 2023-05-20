<?php
include('../dbconnect/dbconnection.php');
$hall_booking_id=$_REQUEST['hall_booking_id'];
$sql="delete from hall_booking where $hall_booking_id='$hall_booking_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("deleted....");
document.location="hall_booking_view.php";
</script>