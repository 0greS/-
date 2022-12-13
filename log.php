<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<link href="reg.css" rel="stylesheet" type="text/css">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>
<div class="registration-cssave">
  <form action="inc/login.php" method="post">
    <h3 class="text-center">Вход в аккаунт</h3>
    <div class="form-group">
        <input class="form-control item" type="text" name="username" maxlength="15" minlength="4" pattern="^[a-zA-Zа-яА-Я0-9_.-]*$" id="username" placeholder="Логин" required>
    </div>
    <div class="form-group">
      <input class="form-control item" type="password" name="pass" minlength="6" id="password" placeholder="Пароль" required>
    </div>
    <div class="form-group">
      <input class="form-control item" type="email" name="email" id="email" placeholder="Email" required>
    </div>
    <div class="form-group">
      <button class="btn btn-primary btn-block create-account" type="submit">Вход в аккаунт</button>
    </div>
    <div class="form-group1">
      <a href="reg.php" class="netac">Нет аккаунта? Зарегистрируйтесь!</a>
    </div>
    <div class="form-group1">
      <a href="index.php" class="netac">Вернутся к просмотру сайта</a>
    </div>
      <?php
      if ($_SESSION['message1']==true){
          echo '<p class="msg">' . $_SESSION['message'] . '</p>';
      }

      ?>
  </form>
</div>
</body>
</html>