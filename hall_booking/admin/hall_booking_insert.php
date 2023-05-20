<?php
include('../dbconnect/dbconnection.php');
$hall_id=$_POST['hall_id'];
$user_id=$_POST['user_id'];
$booking_date=$_POST['booking_date'];
$booking_discription=$_POST['booking_discription'];
$booking_status=$_POST['booking_status'];
$sql="insert into hall_booking values(null,'$hall_id','$user_id','$booking_date','$booking_discription','$booking_status')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted")
document.location="hall_booking_view.php";
</script>