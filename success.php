<?php  include("gateway-config.php");
sleep(2);
if(!empty($_GET['tx']) && !empty($_GET['amt']) && !empty($_GET['cc']) && !empty($_GET['st'])){
    // Get transaction information from URL
    $item_number = $_GET['item_number']; 
    $txn_id = $_GET['tx'];
    $payment_gross = $_GET['amt'];
    $currency_code = $_GET['cc'];
    $payment_status = $_GET['st'];
      //count transaction row in database using txn id
        // check duplicacy
    if($pay_count > 0){
     // fetch all data from the database using txn_id
    foreach($rows as $paymentRow){
        $payid= $paymentRow['payid'];
        $amount = $paymentRow['amount'];
        $status = $paymentRow['status'];
            $email = $paymentRow['payer_email'];
            $firstname = $paymentRow['firstname'];
            $lastname = $paymentRow['lastname'];
            //$payer_id = $paymentRow['payer_id'];
          $currency = $paymentRow['currency'];
          $dbdate = $paymentRow['payment_date'];
          $pid= $paymentRow['pid'];
    }
    }/*else{
        // You can insert transaction data here without IPN
    }*/
}

      ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
                <h1>Payment Status</h1>
<hr>

            <?php

if(!empty($payid)) // database payment id column
{
$subject='Your payment has been successful..';
  if($txn_id!=''){
        echo ' <h2 style="color:#33FF00";>'.$subject.'</h2>   <hr>';

        echo '<table class="table">'; 
        echo '<tr> '; 
echo '<tr>  
          <th>Transaction ID:</th>
        <td>'.$txn_id.'</td> 
    </tr>
     <tr> 
        <th>Paid Amount:</th>
        <td>'.$amount.' '. $currency.'</td> 
    </tr>
    <tr>
       <th>Payment Status:</th>
        <td>'.$status.'</td> 
   </tr>
   <tr> 
       <th>Payer Email:</th>
       <td>'.$email.'</td> 
   </tr>
    <tr> 
       <th>Name:</th>
       <td>'.$firstname.' '.$lastname.'</td>
   </tr>

   <tr> 
       <th>Address:</th>
       <td>'.$address.'</td>
   </tr>

   <tr>
       <th>Date :</th>
       <td>'.$dbdate.'</td> 
  </tr>
  </table>';
}

}
else
{
    $html = "<p><div class='errmsg'>Invalid Transaction. Please Try Again</div></p>
             ";
            
}
if(isset($html)){
echo $html;
}
?>     
<!-- Techno Smarter - https://technosmarter.com/php/tutorial -->   
</body>
</html>