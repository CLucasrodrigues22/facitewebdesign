<?php
session_start();
if (empty($_SESSION['id'])) {
    $msg = "finalizada";
    header("Location: ../login?msg=$msg");
    exit;
}
