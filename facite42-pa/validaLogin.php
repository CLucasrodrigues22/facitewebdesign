<?php

if (empty($_POST['usuario']) && empty($_POST['senha'])) {
    $msg = "camposVazio";
    header("Location: login?msg=$msg");
    exit;
}

//configurações reCaptcha
if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
    $privatekey = "6LcB6BYaAAAAAKoQweKDGXjARn9DiGcBN6uCGfXV";
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => $privatekey,
        'response' => $captcha,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    );

    $curlConfig = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => $data
    );

    $ch = curl_init();
    curl_setopt_array($ch, $curlConfig);
    $response = curl_exec($ch);
    curl_close($ch);
}

$jsonResponse = json_decode($response);

if ($jsonResponse->success === true) {
    require 'Conexao.php';
    require 'Usuario.php';

    $u = new Usuario();

    $usuario = addslashes($_POST['usuario']);
    $senha = addslashes(md5($_POST['senha']));

    if ($u->login($usuario, $senha) == true) {
        if (isset($_SESSION['id'])) {
            $msg = "Loginsucesso";
            header("Location: front/inicio?msg=$msg");
            exit;
        }
    } else {
        $msg = "dadosInválidos";
        header("Location: login?msg=$msg");
        exit;
    }
} else {
    $msg = "reCaptchaVazio";
    header("Location: login?msg=$msg");
    exit;
}
