<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Swiss Medica Clinic</title>

		<meta name="description" content="Swiss Medica Clinic Virtual tour" />

		<meta name="keywords" content="Swiss Medica Clinic" />
		<meta name="medium" content="mult" />
		<meta name="video_height" content="480"></meta>
		<meta name="video_width" content="640"></meta>
		<link rel="image_src" href="<?php echo base_url();?>js/thumbnail.jpg" />
		<!-- <meta name="directory" content="PATH/"></meta> -->
		<!-- <link rel="target_url" href="tour.html" /> -->

		<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="default">

		

		<script src="<?php echo base_url();?>js/jquery-2.1.3.min.js"></script>
		

		



		<style type="text/css">
			@-ms-viewport { width: device-width; }
			@media only screen and (min-device-width: 800px) { html { overflow:hidden; } }
			* { padding: 0; margin: 0; }
			html { height: 100%; }
			body { height: 100%; overflow:hidden; }
			div#container { height: 100%; min-height: 100%; width: 100%; margin: 0 auto; }
			div#tourDIV {
				height:100%;
				position:relative;
				overflow:hidden;
			}
			div#panoDIV {
				height:100%;
				position:relative;
				overflow:hidden;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-o-user-select: none;
				user-select: none;
			}
		</style>

				<!--[if !IE]><!-->

		<!--<![endif]-->
		<!--[if lte IE 8]>
		<script type="text/javascript" src="tourdata/lib/jquery-1.11.1.min.js"></script>
		<![endif]-->
		<!--[if gt IE 8]>
		<script type="text/javascript" src="tourdata/lib/jquery-2.1.1.min.js"></script>
		<![endif]-->


		<style type="text/css">
			div#panoDIV.cursorMoveMode {
				cursor: move;
				cursor: url(tourdata/graphics/cursors_move_html5.cur), move;
			}
			div#panoDIV.cursorDragMode {
				cursor: grab;
				cursor: -moz-grab;
				cursor: -webkit-grab;
				cursor: url(tourdata/graphics/cursors_drag_html5.cur), default;
			}
		</style>
<script>

</script>
		<script type="text/javascript">
			function webglAvailable() {
				try {
					var canvas = document.createElement("canvas");
					return !!window.WebGLRenderingContext && (canvas.getContext("webgl") || canvas.getContext("experimental-webgl"));
				} catch(e) {
					return false;
				}
			}
			function getWmodeValue() {
				var webglTest = webglAvailable();
				if(webglTest){
					return 'direct';
				}
				return 'opaque';
			}
			function readDeviceOrientation() {
				// window.innerHeight is not supported by IE
				var winH = window.innerHeight ? window.innerHeight : jQuery(window).height();
				var winW = window.innerWidth ? window.innerWidth : jQuery(window).width();
				//force height for iframe usage
				if(!winH || winH == 0){
					winH = '100%';
				}
				// set the height of the document
				jQuery('html').css('height', winH);
				// scroll to top
				window.scrollTo(0,0);
			}
			jQuery( document ).ready(function() {
				if (/(iphone|ipod|ipad|android|iemobile|webos|fennec|blackberry|kindle|series60|playbook|opera\smini|opera\smobi|opera\stablet|symbianos|palmsource|palmos|blazer|windows\sce|windows\sphone|wp7|bolt|doris|dorothy|gobrowser|iris|maemo|minimo|netfront|semc-browser|skyfire|teashark|teleca|uzardweb|avantgo|docomo|kddi|ddipocket|polaris|eudoraweb|opwv|plink|plucker|pie|xiino|benq|playbook|bb|cricket|dell|bb10|nintendo|up.browser|playstation|tear|mib|obigo|midp|mobile|tablet)/.test(navigator.userAgent.toLowerCase())) {
					if(/iphone/.test(navigator.userAgent.toLowerCase()) && window.self === window.top){
						jQuery('body').css('height', '100.18%'); 
					}
					// add event listener on resize event (for orientation change)
					if (window.addEventListener) {
						window.addEventListener("load", readDeviceOrientation);
						window.addEventListener("resize", readDeviceOrientation);
						window.addEventListener("orientationchange", readDeviceOrientation);
					}
					//initial execution
					setTimeout(function(){readDeviceOrientation();},10);
				}
			});
			
			function accessWebVr(){
				unloadPlayer();

				setTimeout(function(){ loadPlayer(true); }, 100);
			}
			function accessStdVr(){
				unloadPlayer();

				setTimeout(function(){ loadPlayer(false); }, 100);
			}
			function loadPlayer(isWebVr) {

				var base_url = "<?php echo base_url();?>";
				if (isWebVr) {
					embedpano({
						id:"krpanoSWFObject"
						,xml:"http://msci.swissmedicacrm.com/js/tour_vr.xml"
						,target:"panoDIV"
						,passQueryParameters:true
						,bgcolor:"#000000"
						,html5:"only+webgl"
						,vars:{skipintro:true,norotation:true}
					});
				} else {
					embedpano({
						id:"krpanoSWFObject"

						,xml:"http://msci.swissmedicacrm.com/js/tour.xml"

						,target:"panoDIV"
						,passQueryParameters:true
						,bgcolor:"#000000"

						,html5:"only"


					});
				}
				//apply focus on the visit if not embedded into an iframe
				if(top.location === self.location){
					kpanotour.Focus.applyFocus();
				}
			}
			function unloadPlayer(){
				if(jQuery('#krpanoSWFObject')){
					removepano('krpanoSWFObject');
				}
				
				
			}
			
		    function isVRModeRequested() {
				var querystr = window.location.search.substring(1);
				var params = querystr.split('&');
				for (var i=0; i<params.length; i++){
					if (params[i].toLowerCase() == "vr"){
						return true;
					}
				}
				return false;
			}
		</script>
	<!-- Facebook Pixel Code --> <script> !function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window,document,'script', 'https://connect.facebook.net/en_US/fbevents.js');  fbq('init', '595057094029888');  fbq('track', 'PageView'); </script> <noscript>  <img height="1" width="1"  src="https://www.facebook.com/tr?id=595057094029888&ev=PageView &noscript=1"/> </noscript> <!-- End Facebook Pixel Code --> </head>
	<body>
		<div id="container">
			<div id="tourDIV">
				<div id="panoDIV">
					<noscript>

						You must activate javascript to visualize the Virtual Tour : Swiss Medica Clinic.

					</noscript>
				</div>
				
				
				<script src="<?php echo base_url()?>js/tour.js"></script> 

				<!--<script src="http://msci.swissmedicacrm.com/tourdata/tour.js"></script> -->
				
				

				
				<script type="text/javascript">
					if (isVRModeRequested()){
						accessWebVr();
					}else{
						accessStdVr();
					}
				</script>
			</div>
		</div>
	</body>
</html>