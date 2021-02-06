<?php

$novo = $_POST['novo'];
$corpo = "
    Nome: "         . $_POST['nome'] . "
    Email:"         . $_POST['email'] . "
    Telefone:"      . $_POST['telefone'] . "
    Empresa:"       . $_POST['empresa'] . "
    Exemplo:"       . $_POST['url'] . "
    Plano:"         . $_POST['plano'] . "
";

if (mail($novo, $corpo, 'From: facitebsb@facitewebdesign.com.br')) {
  header("location: ../solicita-plano?msg=success");
  exit;
} else {
  header("location: ../solicita-plano?msg=erroMsg");
  exit;
}
