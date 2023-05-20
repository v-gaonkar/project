<?php
include('../dbconnect/dbconnection.php');
$service_name=$_POST['services_name'];
$services_discription=$_POST['services_discription'];
$service_price=$_POST['service_price'];

$services_photo=$_FILES['services_photo']['name'];
$tmp_location=$_FILES['services_photo']['tmp_name'];
$target="../images/".$services_photo;
move_uploaded_file($tmp_location,$target);

$services_category_id=$_POST['services_category_id'];
$sql="insert into event_service_details values(null,'$service_name','$services_discription','$service_price','$services_photo','$services_category_id')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted");
document.location="service_details_view.php";
</script>