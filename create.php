<?php
require_once 'db.php';

$name = $_POST['name'];
$price = $_POST['price'];
$type = $_POST['type'];
$pic = 'img/' . $_FILES['pic']['name'];

mysqli_query($connect,"INSERT INTO `tovar` (`id_tovar`, `name_tov`, `price`, `type`,`pic`) VALUES (NULL, '$name', '$price', '$type', '$pic')");

header('Location: ../adminka.php');
?>