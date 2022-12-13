<?php
require_once 'db.php';

$id = $_GET['id'];

mysqli_query($connect,"DELETE FROM korz WHERE `korz`.`id_zak` = '$id'");

header('Location: ../korz.php');