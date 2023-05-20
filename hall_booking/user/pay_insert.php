<?php
include('../dbconnect/dbconnection.php');

$user_id=$_POST['user_id']; 
$rate=$_POST['rate'];
$service_type=$_POST['service_type'];
$date=date('Y-m-d');


$sql="insert into user_bill_details values(null,'$service_type','$rate','$date','$user_id')";
mysqli_query($conn,$sql);

$sql2="update  service_booking_details set booking_status='PAID' where user_id='$user_id' and booking_status='Confirmed'";
mysqli_query($conn,$sql2);
?>
<script>
alert("Payemnt Done Successfully");
document.location="user_bill_details_view.php";
</script>