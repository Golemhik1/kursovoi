<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_sklad";



$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (isset($_GET["id"])) {
    if($_GET['userid'] == -1)
        return;
    $id = $_GET["id"];
    $query = $conn->prepare("SELECT * FROM korzina WHERE iduser = :iduser");
    $query->execute(['iduser' => $id]);
    if ($query->rowCount()) {
        $text ="<p class='p'>Вы добавили уже этот товар в корзину!</p><style>.p {color: white;}</style>";

    }
    else{
        $stmt = $conn->prepare("INSERT INTO korzina (iduser,idtovar) VALUES (:iduser,:idtovar)");
        $stmt->execute(["iduser" => $_GET['userid'], 'idtovar'=>$id]);
        echo json_encode(['code' =>'ok']);
    }

}

?>

