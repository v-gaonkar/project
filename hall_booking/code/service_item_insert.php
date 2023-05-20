<?php
include('../dbconnect/dbconnection.php');
$service_item_name=$_POST['service_item_name'];

$service_item_photo=$_POST['service_item_photo']['name'];
$tmp_location=$_FILES['services_photo']['tmp_name'];
$target="../images/".$services_photo;
move_uploaded_file($tmp_location,$target);

$service_item_discription=$_POST['service_item_discription'];
$sql="insert into service_items values(null,'$service_item_name','$service_item_photo','$service_item_discription')";
mysqli_query($conn,$sql);
?>
 <script language="javascript1.2">
 alert("values inserted ");
 document.location="service_items_view.php";
 </script>