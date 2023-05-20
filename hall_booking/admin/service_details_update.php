<?php
include('../dbconnect/dbconnection.php');
$services_id=$_POST['services_id'];
$service_name=$_POST['services_name'];
$services_discription=$_POST['services_discription'];
$service_price=$_POST['service_price'];

//$services_photo=$_POST['services_photo']['name'];
//$tmp_location=$_FILES['services_photo']['tmp_name'];
//$target="../images/".$services_photo;
//move_uploaded_file($tmp_location,$target);

$service_catagory_id=$_POST['service_catagory_id'];
$sql="update event_service_details set services_name='$service_name',services_discription='$services_discription',service_price='$service_price',service_catagory_id='$service_catagory_id' where services_id='$services_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("service details updated!");
document.location="service_details_view.php";
</script>