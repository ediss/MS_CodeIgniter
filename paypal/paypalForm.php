<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" media="all" href="style.css" />
 
</head>

    <body>
 <div class="container">
<div class="row">
<div class="col-sm-4 col-sm-offset-4  text-center">
 <h2>Booking - Services Offered </h2>
  <p class="lead">The patient is required to pay a fee of 1000 Euro for booking the date for treatment.</p>
</div>
 
<div class="col-sm-6 col-sm-offset-3">
 
 <div class="form-group"> 
 
      <form action="checkout.php" method="POST" autocomplete="off">
       
                <div class="form-check">
                
                <input type='radio' name='rbPrice' value='1' checked='checked'> 1 dolar<br/>
                </div>
                 <div class="form-check">
                <input type='radio' name='rbPrice' value='100'> Inpatinet - 5days<br/>
                 </div>
                 <div class="form-check">
                <input type='radio' name='rbPrice' value='200'> Inpatient - 10days<br/>
                 </div>
                 <div class="form-check">
                <input type='radio' name='rbPrice' value='300'> Outpatient - 5days<br/>
                </div>
                 <div class="form-check">
                <input type='radio' name='rbPrice' value='400'> Outpatient - 10days<br/>
                </div>
                <br/><br/>
                
                <input type="hidden" name="hosted_button_id" value="8HAU6YJRTSVKU">

                <div class='paypalbtn'>
                <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-medium.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                </div>

                <!--<img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-medium.png" alt="Check out with PayPal" />-->
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                <!--<img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="PayPal" />-->
      </form>

              <p>You will be taken to PayPal to complete your payment.</p>
  </div>
      <hr/>
       
        
        </div>
</div>

 

</div>


    </body>
</html>