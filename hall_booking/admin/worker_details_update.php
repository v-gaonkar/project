<?php
include('../dbconnect/dbconnection.php');
$w_id=$_POST['w_id'];
$w_name=$_POST['w_name'];
$w_address=$_POST['w_address'];
$w_contno=$_POST['w_contno'];
$sql="update worker_detail set  w_name='$w_name',w_address='$w_address',w_contno='$w_contno' where w_id='$w_id'";
mysqli_query($conn,$sql);
//echo("updated...");
?>
<script>
alert("Worker Details Updated!");
document.location="worker_details_view.php";
</script>