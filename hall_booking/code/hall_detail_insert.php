<?php
include('../dbconnect/dbconnection.php');
$hall_name=$_POST['hall_name'];
$hall_address=$_POST['hall_address'];
$owner_name=$_POST['owner_name'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];

$hall_photos=$_POST['hall_photos']['name'];
$tmp_location=$_FILES['services_photo']['tmp_name'];
$target="../images/".$services_photo;
move_uploaded_file($tmp_location,$target);

$hall_discription=$_POST['hall_discription'];
$perday_cost=$_POST['perday_cost'];
$types_of_hall=$_POST['types_of_hall'];
$sql="insert into hall_details values(null,'$hall_name','$hall_address','$owner_name','$contact_no','$email_id','$hall_photos','$hall_discription','$perday_cost','$types_of_hall')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted");
document.location="hall_details_view.php";
</script>