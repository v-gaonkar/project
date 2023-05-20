<?php
include('dbconnect/dbconnection.php');
$user_name=$_POST['name'];
$user_add=$_POST['address'];
$email=$_POST['emai_id'];
$contact_no=$_POST['contactno'];
$user_city=$_POST['city'];
$location=$_POST['location'];
$password=$_POST['password'];

$sql="select * from user_details where email_id='$email'";
  $res=mysqli_query($conn,$sql);
  if($row=mysqli_fetch_array($res))
  {?>
  	<script>
	alert("Email id Exist");
	history.back();
	</script>
<?php
  }
  else
  {
  
$sql="insert into user_details values(null,'$user_name','$user_add','$email','$contact_no','$user_city','$location')";
mysqli_query($conn,$sql);

$sql2="insert into login values(null,'$email','$password','user','$Enter Your Email ID','$email','Active')";
mysqli_query($conn,$sql2);
?>
<script>
alert("Registerd Successfully");
document.location="login.php";
</script>
<?php } ?>