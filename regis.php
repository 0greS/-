<?php

    session_start();
    require_once 'db.php';


    $username = $_POST['username'];
    $telephone = $_POST['telephone'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $pass_confirm = $_POST['pass_confirm'];
$_SESSION['message1'] = false;
    if ($pass === $pass_confirm){

        $pass = md5($pass);

        mysqli_query($connect,"INSERT INTO `user` ( `name`, `telephone`, `pass`, `mail`) VALUES ('$username', '$telephone', '$pass', '$email')");
        $_SESSION['message1'] = true;
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../log.php');

    } else{
        $_SESSION['message1'] = true;
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../reg.php');
    }

?>



