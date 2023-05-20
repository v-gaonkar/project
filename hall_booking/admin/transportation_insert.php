<?php
include('../dbconnect/dbconnection.php');
$tp_name=$_POST['tp_name'];
$tp_address=$_POST['tp_address'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$sql="insert into transportation_provider values(null,'$tp_name','$tp_address','$email_id','$contact_no')";
mysqli_query($conn,$sql);
echo("inserted...");
?>
<script>
alert("transportation provider details added!");
document.location="transportation_view.php";
</script>
