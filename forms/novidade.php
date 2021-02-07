<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $mail_to = "facitebsb@facitewebdesign.com.br";
  $mark = "Email para marketing";

  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  
  $content = "Email Marketing: $mark\n";
  $content .= "Email: $email\n\n";

  $headers = "From: $mark <$email>";

  $success = mail($mail_to, $content, $headers);
  if ($success) {
      http_response_code(200);
      header("location: ../inicio?novidade=true");
      exit;
  } else {
      http_response_code(500);
      header("location: ../inicio?novidade=false");
      exit;
  }

} else {
  http_response_code(403);
  header("location: ../inicio?novidade=error");
  exit;
}

