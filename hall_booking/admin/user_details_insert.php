<?php
include('../dbconnect/dbconnection.php');
$user_name=$_POST['user_name'];
$user_add=$_POST['user_address'];
$email=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$user_city=$_POST['user_city'];
$location=$_POST['location'];
$sql="insert into user_details values(null,'$user_name','$user_add','$email','$contact_no','$user_city','$location')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted");
document.location="user_details_view.php";
</script>