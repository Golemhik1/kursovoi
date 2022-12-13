<?php
session_start();
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_sklad";
$text ="";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST["name"], $_POST["pass"], $_POST["email"],$_POST["name2"])){
    $email = $_POST["email"];
    $query = $conn->prepare("SELECT * FROM user WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() > 0) {
        $text ="<p1 class='h3'>Этот адрес уже зарегистрирован!</p1><style>.h3 {color: white;}</style>";
    }
    else{
        $stmt = $conn->prepare("INSERT INTO user (email, name, name2,password) VALUES (:email, :name,:name2, :password)");
        $stmt->bindParam("email", $email, PDO::PARAM_STR);
        $stmt->execute(["email" => $_POST["email"], "name" => $_POST["name"], "password" => ($_POST["pass"]), "name2" => $_POST["name2"]]);
        header("Location: vhod.php");
    }
}
?>
<!DOCTYPE>
<html>
<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
  <title>Склад оружия</title>
  <link rel="stylesheet" type="text/css" href="stili.css.php">
</head>
<body>
<div class="verh">

        <div class="panel">
            <div class="side-title">
                <?php
                if (isset($_SESSION['user']['name']))
                    echo ("<h3>".$_SESSION['user']['name']." ".$_SESSION['user']['name2']."</h3>");
                else echo "<h3>Войдите в аккаунт</h3>";

                ?>
            </div>
            <?php
            if (isset($_SESSION['user']['name'])){
                echo "<div><form action='logout.php' style='color: #FFFFFF'><button class='vhod'>Выход</button></form></div>";
            }
            else
                echo " <div ><form action='vhod.php' style='color: #FFFFFF'><button class='vhod'>Вход</button></form></div>
        <div><form action='registraciy.php' style='color: #FFFFFF'><button class='registr'>Регистрация</button></form></div>"
            ?>
        </div>
  <ul>
    <a href="index.php"><img class="img1" src="1.png"></a>
    <li><a href="#">Контакты</a>
      <ul>
        <li><a href="#">Viber:+7149162377</a></li>
        <li><a href="https://vk.com/arturkvasyuk">Вконтакте</a></li>
          <li><a href="https://t.me/+aUoRSkBqKvBhNGFi">Telegram</a></li>
      </ul>
    </li>
    <li><a href="#">Каталог товаров</a>
      <ul>
        <li><a href="avtomati.php">Автоматы</a></li>
        <li><a href="">Винтовки</a></li>
        <li><a href="#">Дробовики</a></li>
        <li><a href="#">Пистолеты</a></li>
        <li><a href="#">Бронижелеты</a></li>
        <li><a href="#">Патроны</a></li>
      </ul>
      <li><a href="korzina.php">Корзина</a></li>

      </li>
  </ul>
  <div class="information">
    <div class="left1" >
    <img class="img2" src="1.png" width="100%" height="100%">
  </div>
    <div class="block">
      <form action="" method="post" class="pop">
        <input type="email" name="email" id="email"placeholder="Введите email..." required>
        <input type="text" name="name" id="name"placeholder="Введите Имя..."required>
        <input type="text" name="name2" id="name2"placeholder="Введите Фамилию..."required>
        <input type="password" name="pass" id="pass"placeholder="Введите пароль..."required>
          <?php
          echo $text;
          ?>
        <input class="submit1" type="submit"  value="Зарегистрироваться">
      </form>

    </div>
  </div>
</div>

</body>
</html>
