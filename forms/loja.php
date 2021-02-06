<?php

$novo = $_POST['novo'];
$corpo = "
    Nome: "         . $_POST['nome'] . "
    Email:"         . $_POST['email'] . "
    Telefone:"      . $_POST['telefone'] . "
    Empresa:"       . $_POST['empresa'] . "
    Quantidade:"       . $_POST['qtd'] . "
";

if (mail($novo, $corpo, 'From: facitebsb@facitewebdesign.com.br')) {
  header("location: ../loja-virtual?msg=success");
  exit;
} else {
  header("location: ../loja-virtual?msg=erroMsg");
  exit;
}
