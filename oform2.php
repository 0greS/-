<?php
session_start();
require_once 'db.php';

$name = $_POST['name'];
$price = $_POST['price'];

$sum = mysqli_query($connect,"SELECT SUM(price) FROM `korz`");
$sum = mysqli_fetch_all($sum);
$_SESSION['sum'] = $sum;
header('Location: ../oform.php');
?>