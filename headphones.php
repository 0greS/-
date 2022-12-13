<?php

session_start();
require_once 'inc/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<style>
    * {
        margin: 0;
        padding: 0;
    }
</style>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>V.Igre - интернет магазин периферийных устройств</title>
</head>

<body>
<div class="vv">
    <div class="top">

        <div class="top1">
            <a class="a" href="img/irk.png" class="r">Иркутск</a>
        </div>

        <div class="top2">
            <?php
            if ($_SESSION["admin"]==true) {
                echo '<a class="a" href="adminka.php" class="r">Админка</a>';
            }
            else{
                echo '';
            }

            ?>
            <a class="a" href="tel:+78005353535" class="r"><img src="img/phone.png"> 8-800-535-35-35</a>
        </div>

    </div>

    <div class="topp">

        <div class="logo">
            <a href="index.php"><img src="img/logo.png" width="50px" height="50px"></a>
        </div>

        <div class="topp3">
            <div class="dropdown">
                <button class="dropbtn">Каталог</button>
                <div class="dropdown-content">
                    <a href="klav.php">Клавиатуры</a>
                    <a href="mouse.php">Мыши</a>
                    <a href="headphones.php">Наушники</a>
                </div>
            </div>
        </div>

        <div class="topp1">
            <div class="topnav">
                <input type="text" id="post" placeholder="Поиск...">
            </div>
        </div>
        <script type="text/javascript" src="poisk.js"></script>
        <div class="topp2">
            <div class="righttop">
                <a href="korz.php"><img src="img/korzina.png" width="50px" height="50px"></a>
            </div>

            <div class="righttop2">
                <div class="dropdown1">
                    <button class="dropbtn1"><img src="img/profile.png" width="50px" height="50px"></button>
                    <div class="dropdown-content1">
                        <?php
                        if ($_SESSION['message1']==true) {
                            echo '<a href="inc/exite.php">Выход</a>';
                        }
                        else{
                            echo '<a href="log.php">Авторизация</a>
                    <a href="reg.php">Регистрация</a>';
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<main class="main">
    <div class="title">Наушники</div>
    <div class="osn">
        <?php
        $products = mysqli_query($connect,"SELECT * FROM `tovar` where `type` = 'Наушники'");
        $products = mysqli_fetch_all($products);
        foreach ($products as $product){
        ?>
        <form action="inc/korzDobav.php" method="post">
            <div class="all">
                <div class="tov">
                    <div class="tov1" >
                        <img class="pic" src="<?=$product[4]?>">
                    </div>
                    <div class="tov2">
                        <div class="tov22">
                            <p class="name" ></b><?=$product[1]?></p> <br>
                            <p class="price" ><?=$product[2]?>Р</p>
                        </div>

                        <button class="vkorz" type="submit" value="<?= $product[0];?>" name="id">В корзину</button>

                    </div>

                    <input type="hidden" name="type" value="<?=$product[3]?>">
                    <input type="hidden" name="name" value="<?=$product[1]?>">
                    <input type="hidden" name="price" value="<?=$product[2]?>">
                    <input type="hidden" name="img" value="<?=$product[4]?>">

        </form>

    </div>
    </div>
    <?php
    }
    ?>

    </div>
</main>
</body>

</html>