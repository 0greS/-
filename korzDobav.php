<?php
session_start();
require_once 'db.php';
$name = $_POST['name'];
$price = $_POST['price'];
$type = $_POST['type'];
$pic = $_POST['img'];
var_dump($name);
mysqli_query($connect,"INSERT INTO `korz` (`id_zak`, `name_tov`, `price`, `type`,`pic`) VALUES (NULL, '$name', '$price', '$type', '$pic')");
header('Location: ../index.php');
?>
