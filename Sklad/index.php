<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Склад оружия</title>
    <link rel="stylesheet" type="text/css" href="stili.css.php">
</head>
<body class="load" >
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
    <li><a>Каталог товаров</a>
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

<div class="logo" >
    <img class="img2" src="1.png" width="100%" height="100%">

    <div class="text1">
        <p>Добро пожаловать на наш сайт!</p>
        <h2>На сегодняшний день современное вооружение российской армии в части автоматов представлено моделью АК-12. Она лишена недостатков всех видов АК - в ней отсутствует щель между крышкой ствольной коробки и самой ствольной коробкой. Конструкция делает автомат удобным для использования как правшами, так и левшами.</h2><h2> Модель совместима с магазинами для АКМ, АК-74. Есть возможность крепления подствольного гранатомета и различных видов прицела. Точность стрельбы почти в 1,5 раза выше, чем у АК-74.</h2>
    </div>
</div>
<div class="information">
    <div class="left1">
        <p>Информация</p>
        <h2>Склад содержит огнестрельное оружие различного типа, боеприпасы и защитную экипировку в виде бронежилетов.</h2>
        <img class="img2" src="stelaj.jpg" style="width: 85%">
    </div>
    <div class="left1">
        <img class="img2" src="AKM-SH.png">
        <p>Актуальность</p>
        <h2>В нынешнее время стрелковое оружие продолжает использоваться и совершенствоваться, и по сей день. Сегодня, хорошее стрелковое оружие производят не многие страны. Исторически сложилось так, что в деле производства оружия, опираться нам приходится на собственный опыт его эксплуатации и применения.</h2><h2> Может быть поэтому, с середины XX века и до сих пор, российское оружие различного назначения, в большинстве своих образцов лучшее в мире.</h2>
    </div>
</div>
</body>
</html>