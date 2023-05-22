<?php

session_start();
session_destroy();
header("Location:/greatevent/recuperar/login.php");
?>