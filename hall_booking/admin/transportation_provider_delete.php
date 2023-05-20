<?php
include('../dbconnect/dbconnection.php');
$tp_id=$_REQUEST['tp_id'];
$sql="delete from transportation_provider where tp_id='$tp_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted...");
document.location="transportation_view.php"


</script>