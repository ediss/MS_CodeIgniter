<?php
$_email = 'contact@cellulestaminali-clinica.com';
$_name = $_POST['name'];
$_mail = $_POST['mail'];
$_birth = $_POST['birth'];
$_weight = $_POST['weight'];
$_diagnosis=$_POST['diagnosis'];
$_howlong=$_POST['howlong'];
$_medications = $_POST['medications'];
$_headinjury = $_POST['headinjury'];
$_heart=$_POST['heart'];
$_hearttxt=$_POST['hearttxt'];
$_lungs=$_POST['lungs'];
$_lungstxt=$_POST['lungstxt'];
$_liver=$_POST['liver'];
$_livertxt=$_POST['livertxt'];
$_digestive=$_POST['digestive'];
$_digestivetxt=$_POST['digestivetxt'];
$_muscular = $_POST['muscular'];
$_musculartxt = $_POST['musculartxt'];
$_other=$_POST['other'];
$_problemstxt=$_POST['problemstxt'];
$_assistance=$_POST['assistance'];
$_phone=$_POST['phone'];
$_sex=$_POST['sex'];
$_allergytxt = $_POST['allergytxt'];
$_treatedtxt = $_POST['treatedtxt'];
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();



$mail_to = 'consultant@startstemcells.com, swiss.medica.bg.form@gmail.com';
$subject = 'cellulestaminali-clinica.com Online upitnik od '.$_name;
$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
$geoplugin->locate();

$body_message .= 'Nome e Cognome: '.$_name."\n";
$body_message .= 'E-mail: '.$_mail."\n";
$body_message .= 'Telefono: '.$_phone."\n";
$body_message .= "Country: {$geoplugin->countryName}\n";
$body_message .= "IP: $ip\n";
$body_message .= '1. Data di nascita: '.$_birth."\n";
$body_message .= '2. Genere: '.$_sex."\n";
$body_message .= '3. Qual è il Suo peso, altezza: '.$_weight."\n";
$body_message .= '4. Qual è la Sua diagnosi (malattia): '.$_diagnosis."\n";
$body_message .= '5. Da quanto tempo soffre di malattia indicata? '.$_howlong."\n";
$body_message .= '6. Che tipo di farmaci utilizza attualmente? '.$_medications."\n";
$body_message .= '7. Ha (o ha avuto in passato) altre malattie coesistenti? '.$_headinjury."\n";
$body_message .= '8. Soffre di malattia di uno dei seguenti organi: '."\n";
$body_message .= '  a) Cuore: '.$_heart."\n";
$body_message .= '    '.$_hearttxt."\n";
$body_message .= '  b) Polmoni: '.$_lungs."\n";
$body_message .= '    '.$_lungstxt."\n";
$body_message .= '  c) Fegato: '.$_liver."\n";
$body_message .= '    '.$_livertxt."\n";
$body_message .= '  d) Apparato digerente: '.$_digestive."\n";
$body_message .= '    '.$_digestivetxt."\n";
$body_message .= '  e) Sistema Muscolare: '.$_muscular."\n";
$body_message .= '    '.$_musculartxt."\n";	
$body_message .= '  f) Altro: '.$_other."\n";
$body_message .= '9. Si prega di descrivere se ha dei problemi relativi a: respirazione, movimenti, parlare, dormire, ... '."\n";
$body_message .= '  '.$_problemstxt."\n";
$body_message .= '10. Ha bisogno di assistenza per svolgere le attività giornaliere? '.$_assistance."\n";
$body_message .= '11. E’ allergico/a a qualcosa? '.$_allergytxt."\n";
$body_message .= '12. E’ stato trattato/a con cellule staminali prima? '.$_treatedtxt."\n";


$headers = "From: $_name <contact@cellulestaminali-clinica.com> \r\n";
$headers .= 'Reply-To: '.$_mail."\r\n";

if (@mail($mail_to, $subject, $body_message, $headers)) { ?>
	<script language="javascript" type="text/javascript">
		window.location = 'http://cellulestaminali-clinica.com/grazie.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		window.location = 'questionario.html';
	</script>
<?php
}
?>