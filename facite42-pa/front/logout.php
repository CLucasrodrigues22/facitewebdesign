<?php

session_start();
session_destroy();
$msg = "finalizada";
header("Location: ../login?msg=$msg");
exit;