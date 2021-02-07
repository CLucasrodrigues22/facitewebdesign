<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $mail_to = "facitebsb@facitewebdesign.com.br";
  
  $nome = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["nome"])));
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $telefone = trim($_POST["telefone"]);
  $empresa = trim($_POST["empresa"]);
  $mensagem= trim($_POST["mensagem"]);
  
  $content = "Nome: $nome\n";
  $content .= "Email: $email\n\n";
  $content .= "Telefone:\n$telefone\n";
  $content .= "Empresa:\n$empresa\n";
  $content .= "Mensagem:\n$mensagem\n";

  $headers = "From: $nome <$email>";

  $success = mail($mail_to, $content, $headers);
  if ($success) {
      http_response_code(200);
      header("location: ../identidade-visual?msg=true");
      exit;
  } else {
      http_response_code(500);
      header("location: ../identidade-visual?msg=errorMsg");
      exit;
  }

} else {
  http_response_code(403);
  header("location: ../identidade-visual?msg=error");
  exit;
}



