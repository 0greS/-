<?php
session_start();

$_SESSION['message1']=false;
$_SESSION["admin"]=false;
header('Location: ../index.php');