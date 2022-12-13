<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_sklad";
$text = "";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (isset($_POST["email"], $_POST["pass"])) {
    $name = trim($_POST["email"]);
    $password = trim($_POST["pass"]);

    $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
    $stmt->execute(["email" => $name]);

    if ($stmt != ["email"])
    {
        $text = "<p1 class='h3'>Проверьте правильность введёных вами данные и попробуйте снова!
                                Или попробуйте зарегистрироваться снова!</p1><style>.h3 {color: white;}</style>";
    }
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if ($password == $user["password"]) {
            $_SESSION["user"] = $user;
            header("Location: /Sklad");
        }

    };
};
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
        <?php
        if (isset($_SESSION['user']['id'])){
            if ($_SESSION['user']['id'] == '7'){  //kvasuk_artur@mail.ru   qwerty
                echo "<li><a href='dobavlenie.php'>Администратор</a></li>";
            }

        }
        else {
            echo
            "";
        }
        ?>
        </li>
    </ul>
    <div class="information">
        <div class="left1" >
            <img class="img2" src="1.png" width="100%" height="100%">
        </div>
        <div class="block">
            <form action="" method="post" class="pop">
                <input type="email" name="email" id="email"placeholder="Введите email..." required>
                <input type="password" name="pass" id="pass"placeholder="Введите пароль..."required>
                <?php
                echo $text;
                ?>
                <input class="submit1" type="submit"  value="Войти">

            </form>

        </div>
    </div>
</div>
