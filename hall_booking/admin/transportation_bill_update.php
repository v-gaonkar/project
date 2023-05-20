<?php
include('../dbconnect/db_connect.php');
$bill_id=$_POST['bill_id'];
$tp_id=$_POST['tp_id'];
$pay_amt=$_POST['pay_amt'];
$s_id=$_POST['s_id'];
$pay_date=$_POST['pay_date'];
$sql="update transportation_bill set tp_id='$tp_id',pay_amt='$pay_amt',s_id='$s_id',pay_date='$pay_date' where bill_id='$bill_id'";
mysqli_query($conn,$sql);
//echo("updated...");
?>
<script>
alert("transportation bill details  updated!");
document.location="transport_bill_view.php";
</script>