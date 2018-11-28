<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MS-treatment europe | Swiss Medica</title>
    
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url();?>favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url();?>favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url();?>favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>vendors/owl.carousel/css/owl.carousel.min.css">    
    <link rel="stylesheet" href="<?php echo base_url();?>vendors/owl.carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendors/flexslider/flexslider.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendors/bootstrap-datepicker/css/datepicker3.css" media="screen">
    
    <!--RS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendors/rs-plugin/css/settings.css" media="screen">
    
    <!--Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    
    <!--Mechanic Styles-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/default/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/responsive/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/callBack.css">
    <!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                    

    <!--PayPal Styles-->

    <?php 
        
        if(!empty($linksPaypal)){
            foreach($linksPaypal as $link){
                echo $link;
            }

            echo
            "<script>
                function updateTextInput(val) {
                    document.getElementById('textInput').value=val; 
                }
            </script>";
        }
        //echo isset($links) ? $links : '';
    ?>
    
  
    <!--[if lt IE 9]>
      <link rel="stylesheet" type="text/css" href="vendors/rs-plugin/css/settings-ie8.css" media="screen">     
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>      
    <![endif]-->
	
	<!--<script src='https://www.google.com/recaptcha/api.js?hl=it'></script>    -->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '1085142334850917');
fbq('track', "PageView");
fbq('track', 'ViewContent');
</script>



 <!-- Cookie Consent -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#aa0000",
      "text": "#ffdddd"
    },
    "button": {
      "background": "#ff0000"
    }
  },
  "position": "top"
})});
</script><!-- End Cookie Consent -->
</head>
<body class="default blog_page">
    
	<section class="row top_bar">
        <div class="container">
            <div class="row m0">
                <div class="fleft schedule"><div class="hidden-xs book"><a href="#" data-toggle="modal" data-target="#appointmefnt_form_pop">Request call from us</a></div> </div>
                <div class="fright contact_info">
                    <div class="fleft email"><img src="<?php echo base_url();?>images/icons/envelope.jpg" alt=""> consultant@startstemcells.com</div>
                    <div class="fleft phone"><i class="fa fa-phone"></i><i class="fab fa-whatsapp"></i><img src="<?php echo base_url();?>images/viber.png" alt="" /><strong>+381 62 256192</strong></div>
					<br>
					<div class="fright phone"><script src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script><a onclick="Skype.tryAnalyzeSkypeUri('call', '0');" href="skype:sonja.v3?call"><i class="fab fa-skype"></i>Free Call</a></div>
                </div>
            </div>
        </div>
    </section>
    
    <nav class="navbar navbar-default navbar-static-top navbar2">
        <!--<div class="container">-->
        <div class="my_container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo/3.png" alt=""></a>
				<div class="navbar-toggle call_mobile"><a href="tel:+38162256192" >+381 62 256192</a></div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="book-appointment.html" class="navbar-toggle visible-xs" data-toggle="modal" data-target="#appointmefnt_form_pop">Request call from us</a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->  
                      
			<div class="collapse navbar-collapse" id="main_nav">                
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo base_url();?>">Home</a></li>

                    <li class="dropdown">
                        <a href="cellule-staminali-sclerosi-multipla.html" class="dropdown-toggle" data-toggle="dropdown">About Multiple Sclerosis</a>
                        <ul class="dropdown-menu multi-level">
                            <li><a href="<?php echo base_url();?>about/about_ms">About Multiple Sclerosis</a></li>    
                            <li><a href="<?php echo base_url();?>about/difference_ms_stroke">Difference between MS and a Stroke</a></li>
                            
                            <li class="dropdown-submenu">
                                
                                <a class="test"  data-toggle="dropdown" role="button" aria-expanded="false" href="<?php echo base_url();?>about/live_with_ms">How to live with MS <!--<i class="fas fa-caret-right"></i>--></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url();?>about/living_with_ms_psychological">Psychological point of view</a></li>
                                    <li><a href="<?php echo base_url();?>about/living_with_ms_physiotherapy">Physiotherapy</a></li>
                                    <li><a href="<?php echo base_url();?>about/living_with_ms_psychological2">MS Psychological work and support</a></li>
                                </ul>
                            </li>

                            

                            <li><a href="<?php echo base_url();?>about/ms_signs_and_sypmtoms">Multiple Sclerosis signs and symptoms</a></li>
                            <li><a href="<?php echo base_url();?>about/early_signs_of_ms">Early signs of Multiple Sclerosis</a></li>
                            <li><a href="<?php echo base_url();?>about/ms_types">Multiple Sclerosis types</a></li>
                            <li><a href="<?php echo base_url();?>about/ms_risk_factor">Multiple Sclerosis risk factor</a></li>
                            <li><a href="<?php echo base_url();?>about/ms_cure">Can Multiple Sclerosis be cured?</a></li>
                            <li><a href="<?php echo base_url();?>about/diagnosing_ms">Diagnosing Multiple Sclerosis</a></li>
                            <li><a href="<?php echo base_url();?>about/ms_effects">Multiple Sclerosis effects</a></li>
                            <li><a href="<?php echo base_url();?>about/ms_stem_cells">Stem Cells- New treatment for MS</a></li>
                            <li><a href="<?php echo base_url();?>about/ms_statistic">Multiple Sclerosis statistic</a></li>
                            <li><a href="<?php echo base_url();?>about/ms_seizures_tremors">Multiple Sclerosis seizures, tremors</a></li>
                            <li><a href="<?php echo base_url();?>about/ms_quick_facts">Multiple Sclerosis quick facts</a></li>




                        </ul>
                    </li>
                    <li><a href="<?php echo base_url();?>about/treatment">About treatment</a></li>
                   <!-- <li class="dropdown">
						<a href="protocollo-di-trattamento.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Protocollo di trattamento</a>
						<ul class="dropdown-menu">							
                            <li><a href="protocollo-di-trattamento.html">Trattamento con le cellule staminali</a></li>
                            <li><a href="trattamento-neuroriabilitazione.html">Trattamento neuroriabilitazione</a></li>
                            <li><a href="ossigenoterapia.html">Ossigenoterapia</a></li>
                            <li><a href="terapia-di-disintossicazione.html">Terapia di disintossicazione</a></li>
							<li><a href="quali-malattie-possono-essere-curate.html">Quali malattie possono essere curate</a></li>
						</ul>
					</li>-->
                    <li><a href="<?php echo base_url();?>Case_Studies">MS case studies</a></li>
                    <li><a href="<?php echo base_url();?>News/all">News</a></li>
					<li class="dropdown">
						<a href="testimonianze.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Testimonials</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url();?>testimonials/all">Video</a></li>
							<!--<li><a href="testimonianze-storie.html">Storie</a></li>-->
						</ul>
					</li>                  
                    
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Locations</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url();?>locations/switzerland">Switzerland</a></li>
							<li><a href="<?php echo base_url();?>locations/austria">Austria</a></li>
							<li><a href="<?php echo base_url();?>locations/slovenia">Slovenia</a></li>
							<li><a href="<?php echo base_url();?>locations/serbia">Serbia</a></li>
							<li><a href="<?php echo base_url();?>locations/russia">Russia</a></li>
						</ul>
                    </li>
                    <!--<li><a href="contatti.html">Clinic</a></li>-->
                    <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
				</ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>