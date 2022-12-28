<?php include("gateway-config.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
				<h1>Payment Form</h1>
<hr>
        <form action="<?php echo PAYPAL_URL; ?>" method="post" class="form-container price">
          <!-- Identify your business so that you can collect the payments. -->
          <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
          <!-- Specify a Buy Now button. -->
          <input type="hidden" name="cmd" value="_xclick">
          <!-- Specify details about the item that buyers will purchase. -->
          <input type="hidden" name="item_name" value="<?php echo $title;?> ">
          <input type="hidden" name="item_number" value="<?php echo $pid;?> ">
          <input type="hidden" name="amount" value="<?php echo $price; ?>">
          <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
          <!-- Specify URLs -->
          <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
          <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
          <input type="hidden" name="notify_url" value="<?php echo PAYPAL_NOTIFY_URL; ?>">
          <td><input type="hidden" class="form-control" value="<?php echo $firstname;?>" readonly/></td>
       <td><input type="hidden" class="form-control" value="<?php echo $lastname;?>" readonly/></td>
            <td><input type="hidden" class="form-control" value="<?php echo $email;?>" readonly/></td>
        <center><input type="submit" name="submit" class="paypal_button" value="Pay Now" ></center>

      </form>
          
				</div>
        
				</div>
		</div>

	</div>
	
</div>
<!-- Techno Smarter - https://technosmarter.com/php/tutorial -->
</body>
</html>