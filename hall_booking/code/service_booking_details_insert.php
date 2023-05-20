<?php
include('../dbconnect/dbconnection.php');
$services_id=$_POST['services_id'];
$user_id=$_POST['user_id'];
$book_date=$_POST['book_date'];
$booking_price=$_POST['booking_price'];
$booking_discription=$_POST['booking_discription'];
$booking_status=$_POST['booking_status'];
$sql="insert into service_booking_details values(null,'$services_id','$user_id','$book_date','$booking_price','$booking_discription','$booking_status')";
mysqli_query($conn,$sql);
?>
 <script>
 alert("values inserted");
 document.location="service_booking_details_view.php";
 </script>

