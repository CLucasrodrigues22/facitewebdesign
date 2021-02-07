<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $tipoPlano = $_GET['plano'];

  $mail_to = "facitebsb@facitewebdesign.com.br";
  
  $nome = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["nome"])));
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $telefone = trim($_POST["telefone"]);
  $empresa = trim($_POST["empresa"]);
  $url = trim($_POST["url"]);
  $plano = trim($_POST["plano"]);
  
  $content = "Nome: $nome\n";
  $content .= "Email: $email\n\n";
  $content .= "Telefone:\n$telefone\n";
  $content .= "Empresa:\n$empresa\n";
  $content .= "url:\n$url\n";

  $headers = "From: $nome <$email>";

  $success = mail($mail_to, $plano, $content, $headers);
  if ($success) {
      http_response_code(200);
      header("location: ../criacao-de-site?msg=true");
      exit;
  } else {
      http_response_code(500);
      header("location: ../solicita-plano?plano=$tipoPlano&msg=errorMsg");
      exit;
  }

} else {
  http_response_code(403);
  header("location: ../criacao-de-site?msg=error");
  exit;
}

