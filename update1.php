<?php
require_once 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$type = $_POST['type'];
$pic = 'img/' . $_FILES['pic']['name'];

mysqli_query($connect,"UPDATE `tovar` SET `name_tov` = '$name', `price` = '$price', `type` = '$type', `pic` = '$pic' WHERE `tovar`.`id_tovar` = '$id';");

header('Location: ../adminka.php');