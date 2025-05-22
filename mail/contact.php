<?php
if(empty($_POST['Alberto Lucas']) || empty($_POST['678943265']) || empty($_POST['Tu proveedor de moda oficial']) || !filter_var($_POST['alberto.lucas02@umh.es'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['Alberto Lucas']));
$email = strip_tags(htmlspecialchars($_POST['alberto.lucas02@umh.es']));
$m_subject = strip_tags(htmlspecialchars($_POST['678943265']));
$message = strip_tags(htmlspecialchars($_POST['Tu proveedor de moda oficial']));

$to = "alberto.lucas02@umh.es"; // Change this email to your //
$subject = "$m_subject:  $name";
$body = "Contáctanos y te asesoraremos de forma totalmente gratuita.\n\n"."No lo pienses más:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";
$header = "From: $email";
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
