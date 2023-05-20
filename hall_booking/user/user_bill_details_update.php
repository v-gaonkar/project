<?php
include('../dbconnect/dbconnection.php');
$user_bill_id =$_POST['user_bill_id'];
$service_booking_id=$_POST['service_booking_id'];
$bill_amount=$_POST['bill_amount'];
$bil_date=$_POST['bill_date'];
$gst=$_POST['gst'];
$total_amount=$_POST['total_amount'];
$bill_status=$_POST['bill_status'];
$sql="update user_bill_details set service_booking_id ='$service_booking_id',bill_amount='$bill_amount',bill_date='$bil_date',gst='$gst',total_amount='$total_amount',bill_status='$bill_status' where user_bill_id ='$user_bill_id '";
mysqli_query($conn,$sql);
?>
<script>
alert("Profile updated");
document.location="user_bill_details_edit.php";
</script>