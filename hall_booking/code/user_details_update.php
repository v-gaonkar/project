<?php
include('../dbconnect/dbconnection.php');
$user_id=$_POST['user_id'];
$user_name=$_POST['user_name'];
$user_add=$_POST['user_address'];
$email=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$user_city=$_POST['user_city'];
$location=$_POST['location'];
$sql="update user_details set user_name='$user_name',user_address='$user_add',email_id='$email',contact_no='$contact_no',user_city='$user_city',location='$location' where user_id ='$user_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values updated");
document.location="user_details_view.php";
</script>