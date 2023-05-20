<?php
include('../dbconnect/dbconnection.php');
$hall_booking_id=$_POST['hall_booking_id'];
$hall_id=$_POST['hall_id'];
$user_id=$_POST['user_id'];
$booking_date=$_POST['booking_date'];
$booking_discription=$_POST['booking_discription'];
$booking_status=$_POST['booking_status'];
$sql="update hall_booking set hall_id='$hall_id',user_id='$user_id',booking_date='$booking_date',booking_discription='$booking_discription',booking_status='$booking_status' where hall_booking_id='$hall_booking_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values updated")
document.location="hall_booking_view.php";
</script>