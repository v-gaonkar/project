<?php
include('../dbconnect/dbconnection.php');
$tp_id=$_POST['tp_id'];
$tp_name=$_POST['tp_name'];
$tp_address=$_POST['tp_address'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$sql="update transportation_provider set tp_name='$tp_name',tp_address='$tp_address',
      email_id='$email_id',contact_no='$contact_no' where tp_id=$tp_id";
mysqli_query($conn,$sql);
//echo("updated...");
?>
<script>
alert("transportation details updated!");
document.location="transportation_view.php";
</script>