<?php
require_once('config.php');
?>
<!DOCTYPE html>
<head>
<title>Payment Integration</title>
<meta name="viewport" content="width=device-width"> 
</head>
<body>
<form action="charge.php" method="POST"> 
    
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $razor_key_id;?>"
    data-amount="50000"
    data-currency="INR"
    data-buttontext="Pay with Razorpay"
    data-name="Sourav"
    data-description="Test transaction"
    data-image="https://your-awesome-site.com/your_logo.jpg"
    data-prefill.name="Gaurav Kumar"
    data-prefill.email="gaurav.kumar@example.com"
    data-prefill.contact="9999999999"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form> 
</body>
</html>
