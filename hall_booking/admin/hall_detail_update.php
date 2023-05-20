<?php
include('../dbconnect/dbconnection.php');
$hall_id=$_POST['hall_id'];
$hall_name=$_POST['hall_name'];
$hall_address=$_POST['hall_address'];
$owner_name=$_POST['owner_name'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];

$hall_discription=$_POST['hall_discription'];
$perday_cost=$_POST['perday_cost'];

echo $sql="update hall_details set hall_name='$hall_name',hall_address='$hall_address',owner_name='$owner_name',contact_no='$contact_no',email_id='$email_id',hall_discription='$hall_discription',perday_cost='$perday_cost' where hall_id ='$hall_id'";
mysqli_query($conn,$sql);
?>
<script>
//alert("values updated");
//document.location="hall_details_view.php";
</script>