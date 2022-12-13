<?php

    session_start();
    require_once 'db.php';

    $username = $_POST['username'];
    $pass = md5($_POST['pass']);
    $email = $_POST['email'];
    $_SESSION['message1'] = false;
$_SESSION["admin"]=false;

    $check_user = mysqli_query($connect,"SELECT * FROM `user` where `name` = '$username' and `pass`='$pass' and `mail`='$email'");

    if (mysqli_num_rows($check_user) > 0){

        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['message1'] = true;
        $_SESSION['user'] = [
            "id" =>$user['id'],
            "user_name" => $user['user_name'],
            "email" => $user['email']
        ];
        header('Location: ../index.php');
        if($user['id_user']==14){
            $_SESSION["admin"]=true;
        }
    }else{
        $_SESSION['message1'] = true;
        $_SESSION['message'] = 'Введены неверные данные';
        header('Location: ../log.php');
    }
    ?>
<pre>
    <?php
print_r($check_user);
print_r($user);
    ?>
</pre>