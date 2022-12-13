<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_sklad";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['text1'],$_POST['text2'],$_POST['text3'],$_POST['text4'],$_POST['text5'],$_POST['text6'],$_POST['text7'],$_POST['text8'],$_POST['text9'],$_POST['text11'],$_FILES['file'])){
    $stmt = $conn->prepare("INSERT INTO ognestrel (naimenovanie,nazvanie,strana,marka,dlina,kalibr,dlina_stvola,ves,magasin,cena,img) VALUES (:naimenovanie,:nazvanie,:strana,:marka,:dlina,:kalibr,:dlina_stvola,:ves,:magasin,:cena,:img)");
    $stmt->execute(["naimenovanie" => ($_POST["text1"]), "nazvanie" => ($_POST["text2"]), "strana" => ($_POST["text3"]), "marka" => ($_POST["text4"]), "dlina" => ($_POST["text5"]),"kalibr" => ($_POST["text6"]),"dlina_stvola" => ($_POST["text7"]),"ves" => ($_POST["text8"]),"magasin" => ($_POST["text9"]),"cena" => ($_POST["text11"]),"img" => ($_FILES['file']['name'])]);
    header("Location: dobavlenie.php");
}
if(isset($_POST['text12'],$_POST['text13'],$_POST['text14'],$_POST['text15'],$_POST['text16'],$_POST['text17'],$_POST['text18'],$_FILES['file1'])) {
    $stmt = $conn->prepare("INSERT INTO ekipirovka (naimenovanie,nazvanie,strana,marka,ves,rasmer,cena,img) VALUES (:naimenovanie,:nazvanie,:strana,:marka,:ves,:rasmer,:cena,:img)");
    $stmt->execute(["naimenovanie" => ($_POST["text12"]), "nazvanie" => ($_POST["text13"]), "strana" => ($_POST["text14"]), "marka" => ($_POST["text15"]), "ves" => ($_POST["text16"]),"rasmer" => ($_POST["text17"]),"cena" => ($_POST["text18"]),"img" => ($_FILES['file1']['name'])]);
    header("Location: dobavlenie.php");
}
?>