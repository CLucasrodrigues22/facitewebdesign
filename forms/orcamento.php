<?php

$novo = $_POST['novo'];
$corpo = "
    Nome: "         . $_POST['nome'] . "
    Email:"         . $_POST['email'] . "
    Telefone:"      . $_POST['telefone'] . "
    Empresa:"       . $_POST['empresa'] . "
    Servico:"      . $_POST['servico'] . "
";

if (mail($novo, $corpo, 'From: facitebsb@facitewebdesign.com.br')) {
  header("location: ../orcamento?msg=success");
  exit;
} else {
  header("location: ../orcamento?msg=erroMsg");
  exit;
}
