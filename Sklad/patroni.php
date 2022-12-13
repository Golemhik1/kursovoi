<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_sklad";



$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$data =$conn->prepare("SELECT * FROM `ognestrel`");
$data ->execute();
$result = $data ->fetchAll();
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Склад оружия</title>
    <link rel="stylesheet" type="text/css" href="stili.css.php">
    <script src="jquery-3.6.1.min.js"></script>
    <script src="korzina.js"></script>
</head>
<body>
<?php
if (isset($_SESSION["user"])) {
    echo "<input type='hidden' value='".$_SESSION['user']['id']."' id='sesionid'>";
} else {
    echo "<input type='hidden' value='-1' id='sesionid'>";
}
?>
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
                    <li><a href="vintovki.php">Винтовки</a></li>
                    <li><a href="droboviki.php">Дробовики</a></li>
                    <li><a href="pistoleti.php">Пистолеты</a></li>
                    <li><a href="bronijeleti.php">Бронижелеты</a></li>
                    <li><a href="patroni.php">Патроны</a></li>
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
    </div>
<form class="form2" action="vintovki.php">
    <input class="inputText" type="text" id="post" placeholder="Поиск">
</form>
<script type="text/javascript" src="naiti.js"></script>
    <main>
        <section>
            <article class="post">
                <?php
                foreach( $result as $img){
                    if ($img['naimenovanie'] == 'Патрон'  ){
                        echo "<div class='f1'>";
                        $foto= $img['img'];
                        $nasvanie=$img['nazvanie'];
                        $strana=$img['strana'];
                        $marka=$img['marka'];
                        $dlina=$img['dlina'];
                        $kalibr=$img['kalibr'];
                        $dlina_stvola=$img['dlina_stvola'];
                        $ves=$img['ves'];
                        $magasin= $img['magasin'];
                        $cena=$img['cena'];
                        echo"<img src='$foto' class='img3'>";
                        echo "<span class='podpisi'>Название: $nasvanie<br>Производитель:$strana<br>Марка: $marka<br>Калибр: $kalibr <br> Масса: $ves <br>Количество в упаковке: $magasin<br><span class='cena'>Цена:$cena</span></span><br><input type='button' class='st11' value='В корзину' data-id='".$img['id']."'>";
                        echo "</div>";
                    }
                }
                ?>
            </article>
        </section>
    </main>

</body>
</html>