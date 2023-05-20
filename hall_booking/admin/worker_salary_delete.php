<?php
 include('../dbconnect/dbconnection.php');
 $ws_id=$_REQUEST['ws_id'];
 $sql="delete from worker_salary where ws_id='$ws_id'";
 mysqli_query($conn,$sql);
 ?>
 <script>
 alert("values are deleted");
 document.location="worker_salary_view.php";
 </script>