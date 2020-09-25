<?php


$headers = 'From: no-reply@proyectocirca.org' . "\r\n" .
    'Reply-To: contacto@proyectocirca.org' . "\r\n" .
    'Content-Type: text/html; charset=UTF-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$subs_name = utf8_decode($_POST['name']);
$subs_email = utf8_decode($_POST['email']);
$subs_option = utf8_decode($_POST['option']);
$subs_phone = utf8_decode($_POST['phone']);

$texto = "*Nombre de colaborador: ".$subs_name." *Correo: ".$subs_email." *Tipo de colaborador: ".$subs_option." *Tel: ".$subs_phone;

$file = fopen("miarchivo.txt", "a");
fwrite($file, $texto."\n");
fclose($file);

$msg = 'From:'.$subs_name."\n";
$msg.= $texto;

$to      = $subs_email;
$message = "Hola ".$subs_name." nos pondremos en contacto contigo para más detalles :)";
$subject = 'Saludos de Circa';
if(mail($to, $subject, $message, $headers)){
    mail("contacto@proyectocirca.org", "Registro", $texto, $headers);
    die('done');
}else{
    echo "<i class='fa fa-exclamation-triangle'></i> <span>Send message error.</span>";
    die;
}


?>