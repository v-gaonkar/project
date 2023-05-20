<?php
include('../dbconnect/dbconnection.php');
$ws_id=$_POST['ws_id'];
$w_id=$_POST['w_id'];
$work_days=$_POST['work_days'];
$sal_amt=$_POST['sal_amt'];
$sal_date=$_POST['sal_date'];
$sql="update worker_salary set w_id='$w_id', work_days='$work_days',sal_amt='$sal_amt',sal_date='$sal_date' where ws_id='$ws_id'";
mysqli_query($conn,$sql);
//echo("updated...");
?>
<script>
alert("worker salary details updated!");
document.location="worker_salary_view.php";
</script>