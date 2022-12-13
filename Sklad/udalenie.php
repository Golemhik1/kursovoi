<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_sklad";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn -> prepare(" DELETE FROM korzina WHERE iduser = ".$_GET['userid']." AND idtovar = ".$_GET['id'] );
$stmt -> execute();
$result = $stmt->fetchAll();
?>


