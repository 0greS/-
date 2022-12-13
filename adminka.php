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
    <title>V.Igre - интенет магазин периферийных устройств</title>
</head>

<body>
<div class="vv">
    <div class="top">

        <div class="top1">
            <a class="a" href="img/irk.png" class="r">Иркутск</a>
            <a class="a" href="" class="r">Иркутск</a>
            <a class="a" href="" class="r">Иркутск</a>
        </div>

        <div class="top2">
            <a class="a" href="" class="r">Иркутск</a>
            <a class="a" href="" class="r">О компании</a>
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
                <th>TYPE</th>
                <th>PICTURE</th>
            </tr>

            <?php
                $products = mysqli_query($connect,"SELECT * FROM `tovar`");
                $products = mysqli_fetch_all($products);
                foreach ($products as $product){
                    ?>

                        <tr>

                            <td><?=$product[1]?></td>
                            <td><?=$product[2]?>Р</td>
                            <td><?=$product[3]?></td>
                            <td><?=$product[4]?></td>
                            <td><a class="au" href="update.php?id=<?=$product[0]?>">UPDATE</a></td>
                            <td><a class="ad" href="inc/delete.php?id=<?=$product[0]?>">DELETE</a></td>
                        </tr>

                    <?php
                }
            ?>
        </table>
        </div>
        <div class="add">
        <h3>Add new product</h3>
        <form action="inc/create.php" method="post" enctype="multipart/form-data">
            <p>NAME</p>
            <input type="text" name="name">
            <p>PRICE</p>
            <input type="number" name="price">
            <p>TYPE</p>
            <select name="type">
                <option>Мышь</option>
                <option>Клавитура</option>
                <option>Наушники</option>
            </select>
            <p>PICTURE</p>
            <input type="file" name="pic"> <br> <br>
            <button type="submit">Add</button>
        </form>
        </div>
    </div>
</main>
</body>

</html>