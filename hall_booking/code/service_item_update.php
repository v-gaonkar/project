<?php
include('../dbconnect/dbconnection.php');
$service_item_id=$_POST['service_item_id']; 
$service_item_name=$_POST['service_item_name'];

$service_item_photo=$_POST['service_item_photo']['name'];
$tmp_location=$_FILES['services_photo']['tmp_name'];
$target="../images/".$services_photo;
move_uploaded_file($tmp_location,$target);

$service_item_discription=$_POST['service_item_discription'];
$sql="update service_items set service_item_name='$service_item_name',service_item_photo='$service_item_photo',service_item_discription='$service_item_discription' where service_item_id ='$service_item_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values updated");
document.location="service_item_view.php";
</script>