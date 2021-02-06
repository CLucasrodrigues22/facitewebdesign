<?php

$novo = $_POST['novo'];
$corpo = "
    Nome: "         . $_POST['nome'] . "
    Email:"         . $_POST['email'] . "
    Telefone:"      . $_POST['telefone'] . "
    Empresa:"       . $_POST['empresa'] . "
    Mensagem:"       . $_POST['mensagem'] . "
";

if (mail($novo, $corpo, 'From: facitebsb@facitewebdesign.com.br')) {
  header("location: ../identidade-visual?msg=success");
  exit;
} else {
  header("location: ../identidade-visual?msg=erroMsg");
  exit;
}
