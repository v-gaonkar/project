<?php
include('../dbconnect/dbconnection.php');
$vendor_id=$_POST['vendor_id'];
$service_item_id=$_POST['service_item_id'];
$quantity=$_POST['quantity'];
$purchase_rate=$_POST['purchase_rate'];
$purchase_date=$_POST['purchase_date'];
$sql="insert into purchase_details values(null,'$vendor_id','$service_item_id','$quantity','$purchase_rate','$purchase_date')";
mysqli_query($conn,$sql);
?>
 <script>
 alert("values inserted");
 document.location="purchase_details_view.php";
 </script>