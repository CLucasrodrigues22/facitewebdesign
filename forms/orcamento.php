<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $mail_to = "facitebsb@facitewebdesign.com.br";

  $nome = str_replace(array("\r", "\n"), array(" ", " "), strip_tags(trim($_POST["nome"])));
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $telefone = trim($_POST["telefone"]);
  $empresa = trim($_POST["empresa"]);
  $servico = trim($_POST["servico"]);

  $content = "Nome: $nome\n";
  $content .= "Email: $email\n\n";
  $content .= "Telefone:\n$telefone\n";
  $content .= "Empresa:\n$empresa\n";
  $content .= "Tipo de Serviço:\n$servico\n";

  $headers = "From: $nome <$email>";

  $success = mail($mail_to, $content, $headers);
  if ($success) {
    http_response_code(200);
    header("location: ../orcamento?orcamento=true");
    exit;
  } else {
    http_response_code(500);
    header("location: ../orcamento?msg=errorMsg");
    exit;
  }
} else {
  http_response_code(403);
  header("location: ../inico?msg=error");
  exit;
}
