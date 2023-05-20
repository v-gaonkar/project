<?php session_start(); ?>
<?php

include("dbconnect/dbconnection.php");
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$dat=date('Y-m-d h:m:r');

$sql="select * from login where user_name='$username' and password='$password'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
$type=$row['type'];
$_SESSION['uname']=$username;

if($type=="admin")
{
header('location:admin/home.php');
}
else if($type=="user")
{
header('location:user/home.php');
}
}
else
{
?>
<script>
alert("Invalid Username Or Password");
history.back();
</script>
<?php
}

?>

