<?php
include('../dbconnect/dbconnection.php');
$service_booking_id=$_POST['service_booking_id'];
$service_id=$_POST['service_id'];
$user_id=$_POST['user_id'];
$book_date=$_POST['book_date'];
$booking_price=$_POST['booking_price'];
$booking_discription=$_POST['booking_discription'];
$booking_status=$_POST['booking_status'];
$sql="update service_booking_details set service_id='$service_id', user_id='$user_id',book_date='$book_date',booking_price='$booking_price',booking_discription='$booking_discription',booking_status='$booking_status' where service_booking_id ='$service_booking_id'";
mysqli_query($conn,$sql);
?>
 <script>
 alert("values inserted");
 document.location="service_booking_details_form.php";
 </script>

