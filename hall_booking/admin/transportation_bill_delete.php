<?php
 include('../dbconnect/dbconnection.php');
 $bill_id=$_REQUEST['bill_id'];
 $sql="delete from transportation_bill where bill_id='$bill_id'";
 mysqli_query($conn,$sql);
 ?>
 <script>
 alert("values are deleted");
 document.location="transportation_bill_view.php";
 </script>