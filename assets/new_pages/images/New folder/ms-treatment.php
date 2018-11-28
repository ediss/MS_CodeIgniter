<?php 
$your_email ='belgradeclinic@gmail.com';// <<=== update to your email address

session_start();
$errors = '';
$name = '';
$visitor_email = '';
$user_message = '';

if(isset($_POST['submit']))
{
    
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $user_message = $_POST['message'];
    ///------------Do Validations-------------
    if(empty($name)||empty($visitor_email))
    {
        $errors .= "\n Name and Email are required fields. ";   
    }
    if(IsInjected($visitor_email))
    {
        $errors .= "\n Bad email value!";
    }
    if(empty($_SESSION['6_letters_code'] ) ||
      strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
    {
    //Note: the captcha code is compared case insensitively.
    //if you want case sensitive match, update the check above to
    // strcmp()
        $errors .= "\n The captcha code does not match!";
    }
    
    if(empty($errors))
    {
        //send the email
        $to = $your_email;
        $subject="Form submission http://www.heroindetoxeurope.com/drug-addiction-treatment.php";
        $from = $your_email;
        $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
        
        $body = "A user  $name submitted the contact form on web page http://www.heroindetoxeurope.com/drug-addiction-treatment.php:\n".
        "Name: $name\n".
        "Email: $visitor_email \n".
        "Message: \n ".
        "$user_message\n".
        "IP: $ip\n";    
        
        $headers = "From: $visitor_email \r\n";
        $headers .= "Reply-To: $visitor_email \r\n";
        
        mail($to, $subject, $body,$headers);
        
        header('Location: http://www.heroindetoxeurope.com/thankyou/');
    }
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="noindex, nofollow"/>
    <link href="/favicon.png" rel="shortcut icon"/>
    <link href="assets/new_pages/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/new_pages/css/style.css" rel="stylesheet"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="assets/new_pages/js/jquery-1.10.2.min.js"></script>
    <script src="assets/new_pages/js/bootstrap.min.js"></script>
    <script src="assets/js/libs/jquery.cookie.js"></script>
    <script src="assets/js/jquery.activity.min.js"></script>
    <script src="assets/new_pages/js/slider/jquery.slides.min.js"></script>
    <script src="assets/new_pages/js/jqueryslider/vulsaiSlider.min.js"></script>
    <script src="assets/new_pages/js/script_nark_stac.js"></script>
    <!-- a helper script for vaidating the form-->
<script language="JavaScript" src="assets/forms/scripts/gen_validatorv4.js" type="text/javascript"></script> 
	<script src="assets/new_pages/js/jquery.bxslider.min.js"></script>
   
    <style type="text/css">
        .error{border:1px solid #FF0000 !important;}
    </style>
    <title>Inpatient drug addiction treatment</title>
<script type="text/javascript">
        var page = {
            init: function(){
                $('.close_popup').on('click', function(){
                    $(this).parents('.popup').hide();
                    $('#fade').hide();
                });
                $('#fade').on('click', function(){
                    $(this).hide();
                    $('.popup:visible').find('.close_popup').trigger('click');
                });
                $('.box-please-call-back, .guaranteed-conclusion .call-box, .box-consultation, .bespl-consult').find('.btn').on('click', function(){
                    if ( $(this).parents('.bespl-consult').length ){
                        if ( $('#inputYourName').val() != '' && $('#inputContactPhone').val() != '' ){
                            $('#fade, #to-order-call').show();
                            $('#to-order-call .form-horizontal').hide();
                            $('#to-order-call .text').show();
                        }
                    } else {
                        $('#fade, #to-order-call').show();
                        $('#to-order-call .form-horizontal').show();
                        $('#to-order-call .text').hide();
                        $('#name-input').val(''); 
                        $('#telephone-input').val('');
                    }
                });
                $('#to-order-call .btn').on('click', function(){
                    if ( $('#name-input').val() != '' && $('#telephone-input').val() != '' ){
                        $('#to-order-call .form-horizontal').hide();
                        $('#to-order-call .text').show();
                    }
                });
                $('.tabs .btn-group .btn').on('click', function(){
                    var index = $(this).parent().find('.btn').index($(this));
                    $(this).addClass('selected').siblings('.btn').removeClass('selected');
                    $(this).parents('.tabs').find('.tab-content').hide().eq(index).show();
                });
                
                var topMenu = $(".top-menu"),
                    menuItems = topMenu.find(".scroll-link"),
                    scrollItems = menuItems.map(function() {
                        var item = $('#' + $(this).data("id-scroll"));
                        if (item.length) { return item; }
                    });
                
                $(window).scroll(function(){
                    if ( $(this).scrollTop() > 165){
                        $('.navbar-fixed-top').addClass('scroll');
                    } else {
                        $('.navbar-fixed-top').removeClass('scroll');
                    }
                    
                    var fromTop = $(this).scrollTop() + $('.navbar-fixed-top').outerHeight() + 120;
                    var cur = scrollItems.map(function() {
                        if ($(this).offset().top < fromTop)
                            return this;
                    });
                    cur = cur[cur.length - 1];
                    var id = (cur && cur.length) ? cur.prop('id') : "";
                    menuItems.removeClass("selected").filter("[data-id-scroll='" + id + "']").addClass("selected");
                });
                $('#patients-reviews-slider ul').vulsaiSlider({
                    infinite: true, 
                    transition: 'fades',
                    prev: '#btn-prev-slide', 
                    next: '#btn-next-slide'
                });
                $('.our-specialists .link').on('click', function(){
                    if ( $(this).parents('.our-specialists').hasClass('active')){
                        $(this).find('span').html('All specialists');
                        $(this).parents('.our-specialists').removeClass('active');
                    } else {
                        $(this).parents('.our-specialists').addClass('active')
                        $(this).find('span').html('Roll up');
                    }
                });
                
                $('.scroll-link').on('click', function(event){
                        //event.preventDefault();
                        var sectionID = $(this).attr("data-id-scroll");
                        scrollToID('#' + sectionID, 750);
                });
                function scrollToID(id, speed){
                        var offSet = 113;
                        if($('body.head-with-action').length > 0)
                            offSet += 50;
                        var targetOffset = $(id).offset().top - offSet;
                        var mainNav = $('#main-nav');
                        $('html,body').animate({scrollTop: targetOffset}, speed);
                        if (mainNav.hasClass("open")) {
                                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                                mainNav.removeClass("open");
                        }
                }
                $('.location-dropdown .dropdown-menu li a').on('click', function(){
                    $(this).parents('.location-dropdown').removeClass('open');
                    var index = $(this).parents('.location-dropdown').find('li a').index($(this));
                    phonenumber_locationUpdate($(this).parents('.location-dropdown').find('li').eq(index).attr('id'));
                    $('.location-dropdown').each(function(){
                        $(this).find('.t').text($(this).find('li').eq(index).find('a').attr('data-text'));
                    });
                });
                $('#step-slider').bxSlider({
                    pagerCustom: '#step-slider-pager',
                    onSlideBefore: function($slideElement, oldIndex, newIndex){
                        $('#step-slider-pager > a').removeClass('active-prev');
                        if (newIndex > 0){
                            $('#step-slider-pager > a').eq(newIndex-1).addClass('active-prev');
                        }
                    }
                });
                $('.step-slide .link a').on('click', function(){
                    $('.step-slider-pager > a').eq($(this).attr('data-next')).trigger('click');
                    return false;
                });
                $('#revocation-slide').bxSlider({
                    pagerCustom: '#revocation-slide-pager',
                    mode: 'fade',
                    speed: 1200,
                    auto: true,
                    pause: 3000,
                });
                $(window).load(function() {
                    if (window.location.hash != '') {
                        if ($('#scroll-box-' + window.location.hash.substr(1)).length === 1)
                            scrollToID('#scroll-box-' + window.location.hash.substr(1), 1);
                    }
                });
                
                $('.b-patient-nav').ibslider({
                    next: '.arrow-next',
                    prev: '.arrow-prev',
                    container: '.patient-list',
                    width: $('.patient-list li').width()
                });
                
                $(".patient-list a").click(function (e) {
                    e.preventDefault();
                    var oldslide = $(".patient-list a.active").data('slide') - 1;
                    $("#player"+oldslide).get(0).contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
                    $(".patient-list a.active").removeClass('active');
                    $(this).addClass('active');
                    var slide = $(this).data('slide') - 1;
                    $(".b-video-slide.active").removeClass('active');
                    $(".b-video-slide").eq(slide).addClass('active');
                });
            }
        }
        $(document).ready(function() {
            page.init();
        });
         (jQuery);
    </script>

</head>



<body page-narkom>
	<div class="wrapper-page scroll-header-on">
		<header class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="top-line">
				<div class="container">
					<div class="row">
						<p class="navbar-text">MS Stem Cells Treatment</p>
						<ul class="top-nav-right navbar-nav navbar-right">
							<li><a href="mailto:consultant@mstreatment-europe.com">consultant@mstreatment-europe.com</a></li>
							<li class='scroll-link' data-id-scroll='scroll-box-contacts'><a href="#contact" title="Contact form">CONTACT</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row logo_consultation">
					<a class="navbar-brand" href="/"><img src="assets/new_pages/images/logo.png"/></a>
					<div class="navbar-right box-consultation">
						<div class="text fl">
							<p>fill out the contact form and our team will contact you </p>
							<img src="assets/new_pages/images/phone.jpg"/>
						</div>
						<button class="btn btn-call">Request a Call from Us</button>
					</div>
				</div>
				<div class="row">
					<ul class="nav navbar-nav top-menu">
						<li class='scroll-link' data-id-scroll='scroll-box-c-steps'>
							<a href='#c-steps'><span>Stages of treatment</span></a>
						</li>
						<li class='scroll-link' data-id-scroll='scroll-box-anonim'>
							<a href='#anonim'><span>Anonymity</span></a>
						</li>
						<li class='scroll-link' data-id-scroll='scroll-box-methods'>
							<a href='#methods'><span>Methods of treatment</span></a>
						</li>
						<li class='scroll-link' data-id-scroll='scroll-box-approach'>
							<a href='#approach'><span>Our approach</span></a>
						</li>
						<li class='scroll-link' data-id-scroll='scroll-box-reviews'>
							<a href='#reviews'><span>Reviews</span></a>
						</li>
						<li class='scroll-link' data-id-scroll='scroll-box-doctors'>
							<a href='#doctors'><span>Doctors</span></a>
						</li>
						<li class='scroll-link' data-id-scroll='scroll-box-clinic'>
							<a href='#clinic'><span>Our clinics</span></a>
						</li>
						<li class='scroll-link' data-id-scroll='scroll-box-contacts'>
							<a href='#contact'><span>Contact</span></a>
						</li>
					</ul>
				</div>
			</div>
		</header>
		

<div class="rehab">
            <div class="container">
                <div class="head">
                    <h2>Multiple sclerosis clinic</h2>
                    <p>Treatment with your own stem cells</p>
                </div>
                <div class="left-text">
                    <ul class="list-tick">
                        <li>Stem cells can ‘self renew’ – making new cells to replace those that get damaged or die</li>
                        <li>Stem cells might assist in rebuilding lost nerve fibres</li>
                        <li>Remyelination – repairing the myelin sheath that has already been damaged</li>
                    </ul>
                    <p>
                         Based on the diagnosis, physical state of the patient and other medical factors, our medical
team will decide whether to perform stem cell extraction from adipose tissue (fat) and bone
marrow, or to perform two bone marrow liquid extractions.
                    </p>
                    
                </div>
                <div class="slider">
                    <div id="slides">
                        <img src="assets/new_pages/images/img_28.png"/>
                    </div>
                </div>
            </div>

<div class="rehab2">
            <div class="container">
                <div class="head">
                    <h2>Stem cells treatment</h2>
                    <p>How could stem cells help in treating MS?</p>
                </div>
                <div class="left-text">
                    <ul class="list-tick">
                        <li>Immunomodulation - prevent the immune system from attacking the nerve cells, or reduce the amount of damage done</li>
                        <li>Remyelinating - repairing the myelin sheath that has already been damaged</li>
                        <li>Patients consider that stem cell treatment for MS improved their symptoms (on average) by
81,6 %.</li>
                    </ul>
                    <p>
                         Based on cumulative results, we
can conclude that all of the symptoms improved significantly. Most improved symptoms were:
Focus , eye pain , memory , speech problems , sickness,
pain , weakness , muscle stiffness and headaches . Click to see our <a href="img/Statistical-report-MS-treatment-with-Stem-Cells.pdf">cumulative statistical report</a>
                    </p>
                
                        



                </div>
                <div class="slider">
                    <div id="slides">
                        <img src="assets/new_pages/images/stem-cells-treatment.jpg"/>
                    </div>
                </div>
            </div>


<div class="container our-clinic" id="scroll-box-clinic">
            <div class="head">
                <h2>Our clinic </h2>
            </div>
			<a class="fancybox" href="assets/new_pages/images/img-1.jpg" data-fancybox-group="gallery" title=" "><img src="assets/new_pages/images/img-1.jpg" alt=" "></a>
            <div class="tabs">
                <div class="btn-group">
                    <button type="button" class="btn selected btn-default">Medical equipement </button>
                    <button type="button" class="btn btn-default">Villa</button>
                </div>
                <div class="tab-content first">
                    <ul class="list-cliniks">
                        <li>
                            <a href="#">
                                <div class="img"><img src="assets/new_pages/images/stem-cell-medical-equipement.jpg"/></div>
                                
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <div class="tab-content">
                    <ul class="list-cliniks">
                        <li>
                            <a class="fancybox" href="assets/new_pages/imgagesimages/plasma-rico-en-plaquetas-para-las-celulas-madre.jpg" data-fancybox-group="gallery" title=" "><img src="images/plasma-rico-en-plaquetas-para-las-celulas-madre.jpg" alt=" "></a>
                        </li>
                        <li>
                            <a href="http://www.heroindetoxeurope.com/clinic/clinics-abroad">
                                <div class="img"><img src="assets/new_pages/images/clinik_img_2.png"/></div>
                                Clinic in Krasnodar
                            </a>
                        </li>
                        <li>
                            <a href="http://www.heroindetoxeurope.com/clinic/clinics-abroad">
                                <div class="img"><img src="assets/new_pages/images/clinik_img_3.png"/></div>
                               Clinic in Pyatigorsk 
                            </a>
                        </li>
                        <li>
                            <a href="http://www.heroindetoxeurope.com/clinic/clinics-abroad">
                                <div class="img"><img src="assets/new_pages/images/clinik_img_4.png"/></div>
                                Clinic in Rostov-on-Don
                            </a>
                        </li>
                    </ul>
                    <ul class="list-cliniks">
                        <li>
                            <a href="http://www.heroindetoxeurope.com/clinic/clinics-abroad">
                                <div class="img"><img src="assets/new_pages/images/clinik_img_6.png"/></div>
                                Клиника в Мехико, Мексика
                            </a>
                        </li>
                        <li>
                            <a href="http://www.heroindetoxeurope.com/clinic/clinics-abroad">
                                <div class="img"><img src="assets/new_pages/images/clinik_img_7.png"/></div>
                                Представительство в Дубаи, ОАЭ
                            </a>
                        </li>
                        <li>
                            <a href="http://www.heroindetoxeurope.com/clinic/clinics-abroad">
                                <div class="img"><img src="assets/new_pages/images/clinik_img_8.png"/></div>
                                Представительство в Бейруте, Ливан
                            </a>
                        </li>                       
                    </ul>
                </div>
            </div>


<div class="container features" id="scroll-box-approach">
            <div class="head">
                <h2>Testimonials</h2>
                <p>True stories with patients after treatment procedure</p>
            </div>
            <ul>
                <li class="clearfix right">
                    <div class="img fr">
                        <iframe width="409" height="230" src="https://www.youtube.com/embed/Ua-LAehNdKI" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <h3>Patient from UK</h3>
                    <p>What else can I say? I am very very happy with all the care that I received and I recommend this treatment to anybody who want to give it a go. Come and have an open mind and meet these wonderful people who will treat you gently and with respect. I’ll always be grateful. Thank you</p>
                </li>
                <li class="clearfix">
                    <div class="img fl">
                        <iframe width="409" height="230" src="https://www.youtube.com/embed/TVoxE8sUAyE" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <h3>Patient from Portugal</h3>
                    <p>In December 2012 his condition gets worst.He started using wheelchairs,he couldn't walk,he couldn't see.</p>
                    <p>Then he found Swiss Medica Stem Cell Clinic. Stem cells treatment starts immediately.One month later he could walk again</p>
                </li>
                <li class="clearfix right">
                    <div class="img fr">
                        <iframe width="409" height="230" src="https://www.youtube.com/embed/5Z-jmkvCRnE" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <h3>Patient from France</h3>
                    <p>There are no words to describe it, because everything is done naturally and pleasantly here. Actually I do not feel sick, it is the most important thing – during these 12 days I haven’t felt sick. I didn’t have the impression that I was treated like a patient. I was treated like a normal person, it is true I take medicines, receive infusions and still have some pain, but I never felt like I was in the hospital.</p>
                </li>
                <li class="clearfix">
                    <div class="img fl">
                        <iframe width="409" height="230" src="https://www.youtube.com/embed/5ZAijLL65fs" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <h3>Patient from Italy</h3>
                    <p>I deeply believe in this treatment and in this treatment method and I am quite sure that my instinct brought me here. </p>
                    <p>I got to like all these people here, because they are all smiling, and they do everything with great positivity, which in itself, in my opinion, could be enough to improve my situation and I don’t says this only for the sake of saying it but I really, truly mean this.</p>
                </li>
            </ul>


<div class="head">
                    <h2>Stem cells treatment procedure</h2>
                    <p>Treatment procedure can be done in couple of hours</p>
                </div>
		<div class="container steps-narko" id="scroll-box-c-steps">
			<ul class="clearfix">
				<li class="s1">
					<div class="n">
						1<span> Harvest</span>
					</div>
					<div class="text">This procedure is similar to liposuction</div>
				</li>
				<li class="s2">
					<div class="nD">
						2<span>Separation</span>
					</div>
					<div class="textD">Fat cells and stem cells are separated with centrifuge</div>
				</li>
				<li class="s3">
					<div class="n">
						3<span>Activation</span>
					</div>
					<div class="text">AdiLight machine where they are photo activated</div>
				</li>
				<li class="s4">
					<div class="n">
						4<span>Treatment</span>
					</div>
					<div class="text">Via standard IV drip</div>
				</li>
			</ul>
		</div>
		<div class="container features">
		<iframe width="1000" height="563" src="//www.youtube.com/embed/hFTJfb17ido" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="container treatment-methods detox-methods">
			<div class="head">
				<h2>New inovative methods for boosting stem cells treatment results</h2>
				<p>revitalizing and regenerating procedures that can augment treatment result</p>
			</div>
			<div class="box-methods box-methods-1 fl">
				<div class="h">
					OXYVEN 
				</div>
				<p>
					We clean the body with infusions and medicines selected to a particular narcotic. We carry out the procedure of opioid detoxification and intravenous blood irradiation.
				</p>
				<p>
					We use individual therapy to restore normal function of organs which were affected by narcotics.
				</p>
				<div class="imgs">
					<img src="assets/new_pages/images/img_21.png"/>
				</div>
			</div>
			<div class="box-methods box-methods-2 fr">
				<div class="h">
					LASER BLOOD STIMULATION
				</div>
				<p>
					We practice individual approach to every patient to reduce the withdrawal symptoms according to the type of narcotics, duration of drug abuse, risk factors.
				</p>
				<p>
					We are doing our best to make the first days of the treatment painless.
				</p>
				<div class="imgs">
					<img src="assets/new_pages/images/img_25.png"/>
				</div>

			</div>
<div class="container treatment-methods detox-methods">
            
            <div class="box-methods box-methods-1 fl">
                <div class="h">
                  PLASMAPHERESIS
                </div>
                <p>
                    We clean the body with infusions and medicines selected to a particular narcotic. We carry out the procedure of opioid detoxification and intravenous blood irradiation.
                </p>
                <p>
                    We use individual therapy to restore normal function of organs which were affected by narcotics.
                </p>
                <div class="imgs">
                    <img src="assets/new_pages/images/img_29.png"/>
                </div>
            </div>
            <div class="box-methods box-methods-2 fr">
                <div class="h">
                    PHYSIOTHERAPY
                </div>
                <p>
                    We practice individual approach to every patient to reduce the withdrawal symptoms according to the type of narcotics, duration of drug abuse, risk factors.
                </p>
                <p>
                    We are doing our best to make the first days of the treatment painless.
                </p>
                <div class="imgs">
                    <img src="assets/new_pages/images/img_26.png"/>
                </div>








                
            </div>





		</div>
			

		
		</div>
	 
		</div>		
		<div class="container our-specialists" id="scroll-box-doctors">
			<div class="head">
				<h2>Our staff</h2>
				<p>Doctors with minimum 15 years of work experience</p>
			</div>
			<ul class="clearfix">
				<li>
					<div class="img"><img src="assets/new_pages/images/ava_1.png"/></div>
					<div class="text">
						<p>Nikolay Vasilevich Vorobiev</p>
						<p>Head of the Clinic, academician of The Academy of Medical and Technical Sciences</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="assets/new_pages/images/igor.png"/></div>
					<div class="text">
						<p>Dr Igor Bolbukh</p>
						<p>Clinic administrator, anaesthesiologist - reanimatologist - narcolog</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="assets/new_pages/images/aleksej.png"/></div>
					<div class="text">
						<p>Dr Aleksey Elistratov</p>
						<p>Anaesthesiologist - reanimatologist</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="assets/new_pages/images/valerij.png"/></div>
					<div class="text">
						<p>Dr Valery Klemenko</p>
						<p>Anaesthesiologist - reanimatologist</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="assets/new_pages/images/eduardo.png"/></div>
					<div class="text">
						<p>Dr Eduard Khmelnytskyy</p>
						<p>Anaesthesiologist - reanimatologist</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="assets/new_pages/images/kastel.png"/></div>
					<div class="text">
						<p>Dr Kastel Pavle</p>
						<p>Neuropsychiatrist - psychotherapist</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="assets/new_pages/images/dragana2.png"/></div>
					<div class="text">
						<p>Dr Dragana Žorić</p>
						<p>Neuropsychiatrist - psychotherapist</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="assets/new_pages/images/kaca.png"/></div>
					<div class="text">
						<p>Dr Ekaterina Tyurina</p>
						<p>Psychiatrist</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/ivan.png"/></div>
					<div class="text">
						<p>Ivan Janjević</p>
						<p>Physiotherapist</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/inna.png"/></div>
					<div class="text">
						<p>Inna Ignjatović</p>
						<p>Chief Nurse</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/dragana.png"/></div>
					<div class="text">
						<p>Dragana Djikić</p>
						<p>Nurse</p>
					</div>
				</li>				
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/nutella.png"/></div>
					<div class="text">
						<p>Natela Savić</p>
						<p>Nurse</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/julija.png"/></div>
					<div class="text">
						<p>Julija Novičić</p>
						<p>Nurse</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/aleksandra.png"/></div>
					<div class="text">
						<p>Aleksandra Konjević</p>
						<p>Nurse</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/goca.png"/></div>
					<div class="text">
						<p>Gordana Dimitrić</p>
						<p>Nurse</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/vladimir.png"/></div>
					<div class="text">
						<p>Vladimir Obradović</p>
						<p>Nurse</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/irina.png"/></div>
					<div class="text">
						<p>Irina Khmelnytskyy</p>
						<p>Nurse</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/lena.png"/></div>
					<div class="text">
						<p>Elena Ivantsova</p>
						<p>Chief psychologist</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/jelena.png"/></div>
					<div class="text">
						<p>Jelena Joković</p>
						<p>Psychologist</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/mira.png"/></div>
					<div class="text">
						<p>Mira Ilić</p>
						<p>Psychologist</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/jelena2.png"/></div>
					<div class="text">
						<p>Jelena Krstić</p>
						<p>Psychologist</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/daniela.png"/></div>
					<div class="text">
						<p>Daniela Sarajlić</p>
						<p>Translator</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/visnja.png"/></div>
					<div class="text">
						<p>Vranić Višnja</p>
						<p>Cafeteria lady</p>
					</div>
				</li>
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/spremacica.png"/></div>
					<div class="text">
						<p>Milica Gagić</p>
						<p>Cleaning Lady</p>
					</div>
				</li>			 
				<li class="none">
					<div class="img"><img src="assets/new_pages/images/dimitrije.png"/></div>
					<div class="text">
						<p>Dimitar Zdravevski</p>
						<p>Security</p>
					</div>
				</li>
			</ul>
			<a href="javascript:void(0);" class="link"><span>All Specialists</span></a>
		</div>
		 
		</div>


    



		<div class="container bespl-consult" id="scroll-box-contacts">
			<div class="head">
				<h2>Please fill out the contact form and our team will contact you as soon as possible</h2>	  
				<div class="tel">+381 <span>62-256-192</span></div>
			</div>
			<div id='contact_form_errorloc' class='form-inline'></div>
			<form method="POST" class="form-inline" name="contact_form" 
			action="form-test2.php"> 
				<fieldset>
					<div class="form-group"><p>
						<label for='name'>Name: </label>
						<div class="input-text">
							<input type="text" name="name" value='<?php echo htmlentities($name) ?>'></p>
						</div>
					</div>
					<div class="form-group"><p>
						<label for='email'>Email: </label>
						<div class="input-text">
							<input type="text" name="email" value='<?php echo htmlentities($visitor_email) ?>'></p>
						</div>
					</div>
					<div class="form-group"><p>
						<label for='message'>Message or phone number:</label> 
						<div class="input-text">
							<textarea name="message" cols="25" rows="2" ><?php echo htmlentities($user_message) ?></textarea></p>
						</div>
					</div>
					<p>
						<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
						<label for='message'>Enter the code above here :</label><br>
						<input id="6_letters_code" name="6_letters_code" type="text"><br>
						<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
					</p>
					<input type="submit" value="Submit" name='submit'>
				</fieldset>
			</form>
			<br>
		</div>
	 
		</div>
		<div class="footer">
			<div class="container">
					<div class="col-md-3 first">
						<div>© 2001-2014 — "Dr Vorobiev Clinic"</div>
						<div>Belgrade, Sremskih Boraca, </div>
						<div>2e, Zemun</div>						
					</div>
					<div class="col-md-7 nav-footer">
							<ul>
							   <li><a href="http://www.heroindetoxeurope.com/clinic">Clinic</a></li>
							   <li><a href="http://www.heroindetoxeurope.com/stationary-clinic-drug-detoxification-treatment-condition-of-stay">Condition of your stay</a></li>
							   <li><a href="http://www.heroindetoxeurope.com/prices">Prices</a></li>
							   <li><a href="http://www.heroindetoxeurope.com/contact">Contact</a></li>
							</ul>						   
							<ul>
								<li><a href="http://www.heroindetoxeurope.com/prices/standard-detoxification-from-opioids-5-days">5 day treatment</a></li>
								<li><a href="http://www.heroindetoxeurope.com/prices/prolonged-detoxification-from-opioids-7-days">7 day treatment</a></li>
								<li><a href="http://www.heroindetoxeurope.com/prices/full-addiction-treatment-14-days">14 days FULL addiction treatment</a></li>
								<li><a href="http://www.heroindetoxeurope.com/testimonials">Testimonials</a></li>
							</ul>							
					</div>
					<div class="col-md-2 last">
						<div>heroindetoxeurope.com</div>
						<a href="mailto:belgradeclinic@gmail.com" class="email">belgradeclinic@gmail.com</a>
						<div class="tel">
							00 381 63-24-7777
						</div>
					</div>
			</div>		
		</div>
	</div>	 
	<div id="fade"></div>
	<div class="popup" id="to-order-call">
		<div class="close_popup"></div>
		<h3>Request a Call</h3>
		<?php
		if(!empty($errors)){
		echo "<p class='err'>".nl2br($errors)."</p>";
		}
		?>
		<div id='contact_form_errorloc' class='form-horizontal'></div>
			<form method="POST" class="form-horizontal" name="contact_form" 
			action="form-test1.php"> 
				<fieldset>
					<div class="form-group"><p>
						<label for='name'>Name: </label>
						<div class="input-text">
						<input type="text" name="name" value='<?php echo htmlentities($name) ?>'></p>
						</div>
					</div>
					<div class="form-group"><p>
						<label for='email'>Email: </label>
						<div class="input-text">
						<input type="text" name="email" value='<?php echo htmlentities($visitor_email) ?>'></p>
						</div>
					</div>
					<div class="form-group"><p>
						<label for='message'>Message or phone number:</label> 
						<div class="input-text">
						<textarea name="message" rows=8 cols=30><?php echo htmlentities($user_message) ?></textarea></p>
						</div>
					</div>
					
					<p>
						<img src="captcha_code_file_small.php?rand=<?php echo rand(); ?>" id='captchaimgsmall' ><br>
						<label for='message'>Enter the code above here :</label><br>
						<input id="6_letters_code_small" name="6_letters_code_small" type="text"><br>
						<small>Can't read the image? click <a href='javascript: refreshCaptchasmall();'>here</a> to refresh</small>
					</p>
					
					<input type="submit" value="Submit" name='submit'>
				</fieldset>
			</form>






	</div>
			
		<script language="JavaScript">
		// Code for validating the form
		// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
		// for details
		var frmvalidator  = new Validator("contact_form");
		//remove the following two lines if you like error message box popups
		frmvalidator.EnableOnPageErrorDisplaySingleBox();
		frmvalidator.EnableMsgsTogether();

		frmvalidator.addValidation("name","req","Please provide your name"); 
		frmvalidator.addValidation("email","req","Please provide your email"); 
		frmvalidator.addValidation("email","email","Please enter a valid email address"); 
		frmvalidator.addValidation("6_letters_code","req","Please provide code from picture");
		</script>
		<script language='JavaScript' type='text/javascript'>
		

		function refreshCaptcha()
		{
			var img = document.images['captchaimg'];
			img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
		}
		function refreshCaptchasmall()
		{
			var img = document.images['captchaimgsmall'];
			img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
		}
		</script>
		
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65909818-1', 'auto');
  ga('send', 'pageview');

</script>

<!--Fancybox-->
	<script type="text/javascript" src="assets/new_pages/fancybox/lib/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="assets/new_pages/fancybox/source/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/new_pages/fancybox/source/jquery.fancybox.css" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});


		});
	</script>
	</body>
	</html>

 
        