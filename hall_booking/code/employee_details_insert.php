<?php
include('../dbconnect/dbconnection.php');
$emp_name=$_POST['employee_name'];
$joining_date=$_POST['date_of_joining']; 
$gender=$_POST['gender'];
$email=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$salary=$_POST['employee_salary'];
$sql="insert into employee_details values(null,'$emp_name','$joining_date','$gender','$email','$contact_no','$salary')";
mysqli_query($conn,$sql);
?>
<script>
alert("Values inserted");
document.location="employee_details_view.php";
</script>