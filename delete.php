<?php
require_once 'db.php';

$id = $_GET['id'];

mysqli_query($connect,"DELETE FROM `tovar` WHERE `tovar`.`id_tovar` = '$id'");

header('Location: ../adminka.php');