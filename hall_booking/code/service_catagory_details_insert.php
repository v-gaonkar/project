<?php
include('../dbconnect/dbconnection.php');
$service_catagory_name	=$_POST['service_catagory_name	'];

$service_photo=$_POST['service_photo']['name'];
$tmp_location=$_FILES['services_photo']['tmp_name'];
$target="../images/".$services_photo;
move_uploaded_file($tmp_location,$target);

$sql="insert into service_catagory_details values(null,'$service_catagory_name','$service_photo')";
mysqli_query($conn,$sql);
 ?>
 <script>
 alert("values inserted ");
document.location="service_catagory_details_view.php";
 </script>
