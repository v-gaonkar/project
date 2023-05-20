<?php
include('../dbconnect/dbconnection.php');
$w_name=$_POST['w_name'];
$w_address=$_POST['w_address'];
$w_contno=$_POST['w_contno'];
$sql="insert into worker_detail values(null,'$w_name','$w_address','$w_contno')";
mysqli_query($conn,$sql);
echo("inserted...");
?>
<script>
alert("worker_details added!");
document.location="worker_details_view.php";
</script>
