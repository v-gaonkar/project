<?php
include('../dbconnect/dbconnection.php');
$hall_id=$_POST['hall_id'];
$user_id=$_POST['user_id'];
$booking_date=$_POST['booking_date'];
$booking_discription=$_POST['booking_discription'];

 $sql="select * from hall_booking where booking_date='$booking_date' and booking_status='Confirmed'  " ;
  $res=mysqli_query($conn,$sql);
  if($row=mysqli_fetch_array($res))
  {
  ?>
<script>
alert("Already Booked")
history.back();
</script>
<?php

  }
  else
  {
$sql="insert into hall_booking values(null,'$hall_id','$user_id','$booking_date','$booking_discription','Pending')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted")
document.location="hall_booking_view.php";
</script>
<?php
}
