<?php

$novo = $_POST['novo'];
$corpo = "
    Novo: "         . $_POST['novo'] . "
    Email:"         . $_POST['email'] . "
";

if (mail($novo, $corpo, 'From: facitebsb@facitewebdesign.com.br')) {
  header("location: ../inicio?msg=success");
  exit;
} else {
  header("location: ../inicio?msg=erroMsg");
  exit;
}
