<footer class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6 col-lg-5 footer_menuList">
                    <div class="heading row m0"><img src="images/logo/1.png" alt=""></div>
                    <div class="row menuList">
                        <ul class="firstOrderList nav">
                            <li><a href="<?php echo base_url();?>">home</a></li>
                            <!--<li><a href="cosa-sono-le-cellule-staminali.html">cellule staminali</a></li>-->
                            <li><a href="protocollo-di-trattamento.html">trattamento</a></li>
                            <li><a href="visualizzare-tutt-le-malattie.html">malattie</a></li>
                            <li><a href="<?php echo base_url();?>/Testimonials">testimonials</a></li>
                        </ul>
                        <ul class="secondOrderList nav">
                            <li><a href="<?php echo base_url();?>/Doctors">our doctors</a></li>
                            <li><a href="<?php echo base_url();?>/News">News</a></li>
                            <li><a href="<?php echo base_url();?>/Contact">contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-3 footer_address">
                    <div class="heading row m0"></div>
                    <div class="row address m0">
                        <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-envelope"></i></div>
                            <div class="media-body address_text">consultant@startstemcells.com</div>
                        </div>
                        <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-phone"></i></div>
                            <div class="media-body address_text">+381 62 256682</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 newsletter">
                    <div class="heading row m0">
                        <h3>Subscribe to our newsletter</h3>
                    </div>
                    <form action="//startstemcells.us11.list-manage.com/subscribe/post?u=b4e2f26270a3fb0e660d11e4a&amp;id=1b280e92e3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="row m0 newsletterForm">
                        <input type="text" class="form-control" placeholder="Your name" name="FNAME" id="mce-FNAME">
                        <input type="email" class="form-control" placeholder="example@gmail.com" name="EMAIL" id="mce-EMAIL" required>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_b4e2f26270a3fb0e660d11e4a_1b280e92e3" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </form>
                </div>
                <script src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                <script type='text/javascript'>
                    (function ($) {
                        window.fnames = new Array(); window.ftypes = new Array(); fnames[1] = 'FNAME'; ftypes[1] = 'text'; fnames[0] = 'EMAIL'; ftypes[0] = 'email'; /*
 * Translated default messages for the $ validation plugin.
 * Locale: IT
 */
                        $.extend($.validator.messages, {
                            required: "Campo obbligatorio.",
                            remote: "Controlla questo campo.",
                            email: "Inserisci un indirizzo email valido.",
                            url: "Inserisci un indirizzo web valido.",
                            date: "Inserisci una data valida.",
                            dateISO: "Inserisci una data valida (ISO).",
                            number: "Inserisci un numero valido.",
                            digits: "Inserisci solo numeri.",
                            creditcard: "Inserisci un numero di carta di credito valido.",
                            equalTo: "Il valore non corrisponde.",
                            accept: "Inserisci un valore con un&apos;estensione valida.",
                            maxlength: $.validator.format("Non inserire pi&ugrave; di {0} caratteri."),
                            minlength: $.validator.format("Inserisci almeno {0} caratteri."),
                            rangelength: $.validator.format("Inserisci un valore compreso tra {0} e {1} caratteri."),
                            range: $.validator.format("Inserisci un valore compreso tra {0} e {1}."),
                            max: $.validator.format("Inserisci un valore minore o uguale a {0}."),
                            min: $.validator.format("Inserisci un valore maggiore o uguale a {0}.")
                        });
                    }(jQuery)); var $mcj = jQuery.noConflict(true);</script>
            </div>
            <div class="row m0 footer_bottom">
                <div class="fright copyright">
                    &copy; Copyright <a href="<?php echo base_url();?>">Swiss Medica</a> 2017. | <a href="regole-sulla-privacy-le-condizioni-del-sito.pdf">Privacy policy - terms & conditions</a> | <a href="dichiarazione-sulla-limitazione-responsabilita.pdf">Responsability limitation</a>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="appointmefnt_form_pop" tabindex="-1" role="dialog" aria-labelledby="appointmefnt_form_pop">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <form method="POST" action="<?php echo base_url();?>Handler/pop_up" class="row m0 appointment_home_form2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <h2 class="title">Request <br><br/>call from us<br/><br/></h2>
                    
                    <div class="form_inputs row m0">

                        <div class="row m0 input_row">
                            <label for="app_fname">Name</label>
                            <input type="text" class="form-control" id="app_fname" name="name" placeholder="Full Name" required>
                        </div>

                        <div class="row m0 input_row">
                            <label for="app_email">E-mail</label>
                            <input type="email" class="form-control" id="app_email" name="email" placeholder="Your e-mail address">
                        </div>

                        <div class="row m0 input_row">
                            <label for="app_texts">Messagge</label>
                            <textarea id="app_texts" name="message" class="form-control" placeholder="Your message here" required></textarea>
                        </div>

                        <div class="row m0  security_captcha">
                            <div class="col-sm-12">
                                <?php echo $widget;?>
                                <?php echo $script;?>                                
                            </div>
                        </div>

                        <input type='hidden' name='hiddenTag' value='Dusan'><input type="submit" class="form-control" value="Send">
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <div id="jCall_phone" class="jc_green jc_static" data-toggle="modal" data-target="#appointmefnt_form_pop">
        <div class="jc_ph-circle"></div>
        <div class="jc_ph-circle-fill"></div>
        <div class="jc_ph-img-circle"></div>
    </div>
    <!--jQuery, Bootstrap and other vendor JS-->
    <!--jQuery-->
    <script src="<?php echo base_url();?>js/jquery-2.1.3.min.js"></script>

    <!--Bootstrap JS-->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

    <!--Owl Carousel-->
    <script src="<?php echo base_url();?>vendors/owl.carousel/js/owl.carousel.min.js"></script>

    <!--Counter Up-->
    <script src="<?php echo base_url();?>vendors/counterup/jquery.counterup.min.js"></script>

    <!--Waypoints-->
    <script src="<?php echo base_url();?>vendors/waypoints/waypoints.min.js"></script>

    <!--Bootstrap Date-->
    <script src="<?php echo base_url();?>vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!--FlexSlider-->
    <script src="<?php echo base_url();?>vendors/flexslider/jquery.flexslider-min.js"></script>


    <!--RV-->
    <script src="<?php echo base_url();?>vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url();?>vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!--Strella JS-->
    <script src="<?php echo base_url();?>js/theme.js"></script>
    <script src="<?php echo base_url();?>js/revs.js"></script>
    

    <!--Fancybox-->
    <?php echo isset($links) ? $links : " ";  ?>
    <script type="text/javascript">
        $(document).ready(function () {
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
                    title: {
                        type: 'outside'
                    },
                    overlay: {
                        speedOut: 0
                    }
                }
            });

            // Set custom style, close if clicked, change title type and overlay color
            $(".fancybox-effects-c").fancybox({
                wrapCSS: 'fancybox-custom',
                closeClick: true,

                openEffect: 'none',

                helpers: {
                    title: {
                        type: 'inside'
                    },
                    overlay: {
                        css: {
                            'background': 'rgba(238,238,238,0.85)'
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
				    openEffect: 'none',
				    closeEffect: 'none',
				    prevEffect: 'none',
				    nextEffect: 'none',

				    arrows: false,
				    helpers: {
				        media: {},
				        buttons: {}
				    }
				});


        });
    </script>
    
    <!--Paypal scripts-->

    <?php
        if(!empty($scripts)){
            foreach($scripts as $script){
                echo $script;
            }
    ?>
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
    <?php
        }
    ?>


    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-69262085-1', 'auto');
        ga('send', 'pageview');

    </script>
 <!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'N7Iw1UKU0m';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>