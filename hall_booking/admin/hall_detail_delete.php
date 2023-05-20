<?php
include('../dbconnect/dbconnection.php');
$hall_id=$_REQUEST['hall_id'];
$sql="delete from hall_details where hall_id='$hall_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("deleted....");
document.location="hall_details_view.php";
</script>