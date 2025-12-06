<?php

$destinatario = "joaohenrique.braga@outlook.com";

$email = $_POST["email"];
$nome = $_POST["name"];
$mensagem = $_POST["message"];

$to = $destinatario;
$subject = "Você recebeu um email do site";
$body = "Nome: $nome\nEmail: $email\nMensagem:\n$msg";
$headers = "From: $email";

mail($to, $subject, $body, $headers);

echo "Mensagem enviada";
?>