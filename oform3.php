<?php
session_start();
require_once 'db.php';

$zak = mysqli_query($connect,"INSERT INTO zakaz(sum) SELECT sum(price) FROM korz;");
$zak = mysqli_query($connect,"DELETE from korz;");

header('Location: ../index.php');
?>