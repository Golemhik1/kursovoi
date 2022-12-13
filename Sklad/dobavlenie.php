<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_sklad";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$data =$conn->prepare("SELECT * FROM ognestrel");
$data ->execute();
$result = $data ->fetchAll( PDO::FETCH_ASSOC);
if(isset($_GET['export']))
{
    //$filename = "Exsel.xls";
    $filename = "word.txt";
    header('Content-Encoding: UTF-8');
    header('Content-type: application/vnd.ms-exel; charset=UTF-8');
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $print = false;
    if (! empty($result))
    {
        foreach ($result as $exp){
            if(! $print){
                echo implode("\t", array_keys($exp)) . "\n";
                $print = true;
            }
            echo implode("\t", array_values($exp)) . "\n";
        }

    }
    exit();
}


?>
<!DOCTYPE>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stili.css.php">
    <title>Добавление картинок в BD</title>
</head>
<body class="bddobav">
<div class="dobav">
    <p class="p">Добавление Огнестрельного оружия и патронов</p>
<form  action="add.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <input type="text" name="text1" id="text1" placeholder="Введите наименование..." required>
    <input type="text" name="text2" id="text2" placeholder="Введите название..." required>
    <input type="text" name="text3" id="text3" placeholder="Введите страну..." required>
    <input type="text" name="text4" id="text4" placeholder="Введите марку..." required>
    <input type="text" name="text5" id="text5" placeholder="Введите общюю длину оружия..." required>
    <input type="text" name="text6" id="text6" placeholder="Введите калибр оружия/диаметр патрона..." required>
    <input type="text" name="text7" id="text7" placeholder="Введите длину ствола/патрона..." required>
    <input type="text" name="text8" id="text8" placeholder="Введите массу..." required>
    <input type="text" name="text9" id="text9" placeholder="Введите размер магазина/количество патрон в упаковке" required>
    <input type="text" name="text11" id="text11" placeholder="Введите цену..." required>
    <input class="submit1" type="submit" value="Добавить">
</form>
    <form  action="deleteFile.php" method="post" enctype="multipart/form-data">
        <input type="text" name="text10" id="text10" placeholder="Введите Название товара..." required>
        <input class="submit1" type="submit" value="Удалить">
    </form>
    <form>
        <input  class="submit1" type="submit" name="export" value="Экспорт Огнестрела">
    </form>
</div>
<div class="dobav">
    <p class="p">Добавление Бронежилетов</p>
    <form  action="add.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file1" id="file1">
        <input type="text" name="text12" id="text12" placeholder="Введите наименование..." required>
        <input type="text" name="text13" id="text13" placeholder="Введите название..." required>
        <input type="text" name="text14" id="text14" placeholder="Введите страну..." required>
        <input type="text" name="text15" id="text15" placeholder="Введите марку..." required>
        <input type="text" name="text16" id="text16" placeholder="Введите массу..." required>
        <input type="text" name="text17" id="text17" placeholder="Введите размер..." required>
        <input type="text" name="text18" id="text18" placeholder="Введите цену..." required>
        <input class="submit1" type="submit" value="Добавить">
    </form>
    <form  action="deleteFile.php" method="post" enctype="multipart/form-data">
        <input type="text" name="text19" id="text19" placeholder="Введите Название товара..." required>
        <input class="submit1" type="submit" value="Удалить">
    </form>
    <a href="index.php" class="glavnay">На главную</a>
</div>

</body>
</html>
