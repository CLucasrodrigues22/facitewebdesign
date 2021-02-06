<?php

session_start();

// $host = "localhost";
// $user = "facite42_root";
// $pass = "L1n@d141P4uceK";
// $db = "facite42_facitewebdesign";

$host = "localhost";
$user = "facite42_root";
$pass = "hWO35A7PPUIdabA2";
$db = "facitewebdesign";


global $pdo;

try {
    $pdo = new PDO("mysql:dbname=" . $db . "; host=" . $host, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $E) {
    echo "ERRO: ".$e->getMessage();
    exit;
}

