<?php
include('../dbconnect/dbconnection.php');
$tp_id=$_POST['tp_id'];
$pay_amt=$_POST['pay_amt'];

$pay_date=$_POST['pay_date'];
$sql="insert into transportation_bill values(null,'$tp_id','$pay_amt','$pay_date')";
mysqli_query($conn,$sql);

?>
<script>
alert("worker_details added!");
document.location="transportation_bill_view.php";
</script>
