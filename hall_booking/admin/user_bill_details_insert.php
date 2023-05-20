<?php
include('../dbconnect/dbconnection.php');
$service_booking_id=$_POST['service_booking_id'];
$bill_amount=$_POST['bill_amount'];
$bil_date=$_POST['bill_date'];
$gst=$_POST['gst'];
$total_amount=$_POST['total_amount'];
$bill_status=$_POST['bill_status'];
$sql="insert into user_bill_details values(null,'$service_booking_id','$bill_amount','$bil_date','$gst','$total_amount','$bill_status')";
mysqli_query($conn,$sql);
?>
<script language="javascript1.2">
alert("values inserted ");
document.location="user_bill_details_view.php";
</script>