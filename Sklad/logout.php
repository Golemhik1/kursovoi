<?php


// start a session
session_start();

// initialize a session variable
$_SESSION['name'] = '1';

// unset a session variable
unset($_SESSION['user']);
header("Location: /Sklad");
?>
