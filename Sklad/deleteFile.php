<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_sklad";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['text10'])){
    $stmt = $conn -> prepare(" DELETE  FROM ognestrel where nazvanie like '%".$_POST['text10']."%'");
    $stmt -> execute();
    $result = $stmt->fetchAll();
    header("Location: dobavlenie.php");
}
if (isset($_POST['text19'])){
    $stmt = $conn -> prepare("DELETE  FROM ekipirovka where nazvanie like '%".$_POST['text19']."%'");
    $stmt -> execute();
    $result = $stmt->fetchAll();
    header("Location: dobavlenie.php");
}
?>
