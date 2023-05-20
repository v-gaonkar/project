<?php
include('../dbconnect/dbconnection.php');
$purchase_id=$_POST['purchase_id'];
$vendor_id=$_POST['vendor_id'];
$service_item_id=$_POST['service_item_id'];
$quantity=$_POST['quantity'];
$purchase_rate=$_POST['purchase_rate'];
$purchase_date=$_POST['purchase_date'];
$sql="update purchase_details set vendor_id='$vendor_id',service_item_id='$service_item_id',quantity='$quantity',purchase_rate='$purchase_rate',purchase_date='$purchase_date'";
mysqli_query($conn,$sql);
?>
 <script>
 alert("values updated");
 document.location="purchase_details_view.php";
 </script>