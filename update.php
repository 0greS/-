<?php
session_start();
require_once 'inc/db.php';
$product_id = $_GET['id'];
$product = mysqli_query($connect,"SELECT * FROM `tovar` WHERE `id_tovar` = '$product_id'");
$product = mysqli_fetch_assoc($product);

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
    <title>V.Igre - интенет магазин периферийных устройств</title>
</head>

<body>
<div class="vv">
    <div class="top">

        <div class="top1">
            <a class="a" href="img/irk.png" class="r">Иркутск</a>
        </div>

        <div class="top2">
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
                    <a href="#">Клавиатуры</a>
                    <a href="#">Мыши</a>
                    <a href="#">Наушники</a>
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

        <h3>Update product</h3>
        <form action="inc/update1.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$product['id_tovar'] ?>">
            <p>NAME</p>
            <input type="text" name="name" value="<?=$product['name_tov'] ?>">
            <p>PRICE</p>
            <input type="number" name="price" value="<?=$product['price'] ?>">
            <p>TYPE</p>
            <input type="text" name="type" value="<?=$product['type'] ?>">
            <p>PICTURE</p>
            <input type="file" name="pic" value="<?=$product['pic'] ?>"> <br> <br>
            <button type="submit">Update</button>
        </form>

    </div>
</main>
</body>

</html>