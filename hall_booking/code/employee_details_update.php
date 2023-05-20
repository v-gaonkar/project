<?php
include('../dbconnect/dbconnection.php');
$employee_id=$_POST['employee_id'];
$emp_name=$_POST['employee_name'];
$joining_date=$_POST['date_of_joining']; 
$gender=$_POST['gender'];
$email=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$salary=$_POST['employee_salary'];
$sql="update employee_details set employee_name='$emp_name',date_of_joining='$joining_date',gender='$gender',email_id='$email',contact_no='$contact_no',employee_salary='$salary' where employee_id ='$employee_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Values updated");
document.location="employee_details_view.php";
</script>