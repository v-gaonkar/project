<!DOCTYPE html>
<html lang="en">
<style type="text/css">
<!--
.style3 {font-size: medium; font-style: italic; font-weight: bold; }
-->
</style>
  <?php include('meta_tag.php');?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
  <?php include('header.php');?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php'); ?>
    <main class="app-content">
  <div class="app-title">
    <div>
          <h1><i class="fa fa-edit"></i>Payments</h1>
      <!-- <p>Sample forms</p> -->
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
   
    </div>
      <div class="col-md-12"><div class="tile">
        <div class="tile-body">
			<p>
			   
  </p>
            <p>EMPLOYEE DETAILS 
              <?php include("val.php");?>
            </p>
			<?php
			
			$user_id=$_REQUEST['user_id'];
			$user_name=$_REQUEST['user_name'];
			$rate=$_REQUEST['rate'];
			
			$num1=rand(6,9);
			  $num2=date('Ysi');
			$contno=$num1.$num2.$num1;
			$firstname='SAN';
			$email_id='servicebooking@gmail.com';
			
			include 'razorpay-php/Razorpay.php';
 //$apiKey = "rzp_test_YxfkUbFXwfG4Vc";
 use Razorpay\Api\Api;


$keyId = 'rzp_test_fDmVzWIk43LrqG';
$secretKey = '2vqsxsdMHHdMpVrmvQoP5x5h';
$api = new Api($keyId, $secretKey);


$paise=$rate*100;

$order= $api->order->create(array(
'receipt'=>rand(1000,9999).'ORD',
'amount'=>$paise,
'payment_capture'=>1,
'currency'=>'INR',)
);

			?>
            <form name="form1" id="formID" method="post" action="pay_insert.php" >
			<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
			<input type="hidden" name="service_type" value="Booking Hall & Services">
  <table width="438" height="319" border="0" align="center">
    <tr>
      <td width="231">Customer Name</td>
      <td width="180"><input name="user_name" type="text" readonly="" value="<?php echo $user_name;?>" id="hall_name" class=" form-control"></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><input name="rate"  type="text" id="rate" readonly="" value="<?php echo $rate;?>" class="form-control"></td>
    </tr>
    
  </table>
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $keyId; ?>" // Enter the Test API Key ID generated from Dashboard ? Settings ? API Keys
    data-amount="<?php echo $order->amount; ?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ?299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-order_id="<?php echo $order->id ?>"//Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="HALL BOOKING"
    data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
    data-image="https://www.wedfine.com/images/vendor/Marriage_Halls.png"
    data-prefill.name="<?php echo $firstname;  ?>"
	data-prefill.contact="<?php echo $contno;  ?>"
    data-prefill.email="<?php echo $email_id ?>"
    data-theme.color="#790527"
></script>

</form>
</div>

           
          </div>
        </div>
        
</main>
	
	<?php include('footer.php');?>
    <!-- Essential javascripts for application to work-->
<?php include('script.php');?>
<?php include('val.php');?>


</body>
</html>
