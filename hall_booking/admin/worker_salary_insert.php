<?php
include('../dbconnect/dbconnection.php');
$w_id=$_POST['w_id'];
$work_days=$_POST['work_days'];
$sal_amt=$_POST['sal_amt'];
$sal_date=$_POST['sal_date'];
$sql="insert into worker_salary values(null,'$w_id','$work_days','$sal_amt','$sal_date')";
mysqli_query($conn,$sql);
echo("inserted...");
?>
<script>
alert("worker_salary_details added!");
document.location="worker_salary_view.php";
</script>
