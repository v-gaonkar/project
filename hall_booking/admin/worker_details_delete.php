<?php
include('../dbconnect/dbconnection.php');
 $w_id=$_REQUEST['w_id'];
 $sql="delete from worker_detail where w_id='$w_id'";
 mysqli_query($conn,$sql);
 ?>
 <script>
 alert("values are deleted");
 document.location="worker_details_view.php";
 </script>