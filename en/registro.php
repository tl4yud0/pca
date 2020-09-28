<?php


$subs_name = utf8_decode($_POST['name']);
$subs_email = utf8_decode($_POST['email']);
$subs_option = utf8_decode($_POST['option']);
$subs_phone = utf8_decode($_POST['phone']);

$texto = "*Nombre de colaborador: ".$subs_name."    *Correo electronico: ".$subs_email."   *Tipo de colaboracion: ".$subs_option."    *Telefono: ".$subs_phone;

$file = fopen("miarchivo.txt", "a");
fwrite($file, $texto. PHP_EOL);
fclose($file);

$from = "test@circa.com";

//$to = $subs_email;
//$subject = "Saludos de Circa ";
//$message = "Hola ".$subs_name." nos pondremos en contacto contigo para mas detalles :)";
//$headers = "From:" . $from;
//$email = mail($to,$subject,$message, $headers);
//var_dump($email);exit(); 
//echo "The email message was sent.";

$to      = 'sparck_me@hotmail.com';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$msg = 'From:'.$subs_name."\n";
$msg.= $texto;
$subject = 'Email contact';
if(mail($to, $subject, $content, $headers)){
    die('done');
}else{
    echo "<i class='fa fa-exclamation-triangle'></i> <span>Send message error.</span>";
    die;
}


?>