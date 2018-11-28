<!DOCTYPE html>
<html lang="en">
<head>
	<title>Paypal Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<script>
		function updateTextInput(val) {
			document.getElementById('textInput').value=val; 
		}
	</script>
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">

			<!--<form class="contact100-form validate-form" action='' method='POST'>-->
			<form action="checkout.php" method="POST" autocomplete="off">
				<span class="contact100-form-title">
                <p> <a href="/index.html"><img src="images/logo/3.png" alt=""/></a></p>
                <p>&nbsp;</p>
					<p>The patient is required to pay a fee of 1000 Euro for booking the date for treatment.</p>
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name" required>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate ="Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="email" name="email" placeholder="Enter Your Email" required>
				</div>

				<div class="wrap-input100 bg2 rs1-wrap-input100">
					<span class="label-input100">Phone</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Phone Number">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Needed Services - Booking *</span>
					<div>
						<select class="js-select2" name="service" required>
							<option>Please chooses</option>
							<option value='Inpatinet - 5 Days'>Inpatinet - 5 Days</option>
							<option value='Inpatinet - 12 Days'>Inpatinet - 12 Days</option>
							<option value='Outpatient - 5 Days'>Outpatient - 5 Days</option>
                            <option value='Outpatient - 12 Days'>Outpatient - 12 Days</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="w-full dis-none js-show-service">

					<div class="wrap-contact100-form-range">
						<span class="label-input100">Budget *</span><br/>
						<input type="range" name="rangeInput" min="1000" max="18600" value='1000' onchange="updateTextInput(this.value);">
						<input type="text" readonly name='tbPrice' id="textInput" class='tbPrice'  value="1000"> &euro;
					 </div>
					 
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..." required></textarea>

				</div>

				<div class="container-contact100-form-btn">
                	<input type="hidden" name="hosted_button_id" value="8HAU6YJRTSVKU">
                	<input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-medium.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">				
				</div>
				
			</form>
	
             <p style="text-align:center;">You will be taken to PayPal to complete your payment.</p>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<!--===============================================================================================-->

 


</body>
</html>
