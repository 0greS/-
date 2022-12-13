<?php
session_start();
require_once 'inc/db.php';

$sum = $_SESSION['sum'];

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
                <input type="text" placeholder="Поиск...">
            </div>
        </div>

        <div class="topp2">

            <div class="righttop2">
                <div class="dropdown1">
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<main class="main">
    <div class="osn">
        <div>
            <table class="table">
                <tr>
                    <th>NAME</th>
                    <th>PRICE</th>
                </tr>
                <?php
                $products = mysqli_query($connect,"SELECT * FROM `korz`");
                $products = mysqli_fetch_all($products);
                foreach ($products as $product){
                    ?>
                    <tr>
                        <td><?=$product[1]?></td>
                        <td><?=$product[2]?>Р</td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
        <div class="obsh">
        <p>Общая сумма заказа: <?= implode('|', $sum[0]) ?>Р</p> <br>
            <p>Место выдачи</p>
        <select>
            <option>г.Иркутск, улица Ленина, 5а</option>
        </select> <br>
            <form action="inc/oform3.php" method="post">
                <button class="oforml" type="submit">Оформить заказ</button>
            </form>
        </div>
    </div>
</main>
</body>

</html>