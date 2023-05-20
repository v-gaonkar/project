<?php
include('../dbconnect/dbconnection.php');
$user_bill_id=$_REQUEST['user_bill_id'];
$sql="delete from user_bill_details where $user_bill_id='$user_bill_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("deleted....");
document.location="user_bill_details_view.php";
</script>