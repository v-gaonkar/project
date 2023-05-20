<?php
include('../dbconnect/dbconnection.php');
$service_catagory_id=$_REQUEST['service_catagory_id'];
$sql="delete from service_catagory_details where $service_catagory_id =service_catagory_id";
mysqli_query($conn,$sql);
?>
<script>
alert("deleted....");
document.location="service_catagory_details_view.php";
</script>