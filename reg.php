<?php
    session_start();
$_SESSION['message'] = null;
?>
<!DOCTYPE html>
<html lang="en">
<link href="reg.css" rel="stylesheet" type="text/css">
<head>
  <meta charset="UTF-8">
  <title>Регистрация</title>
</head>
<body>
<div class="registration-cssave">
  <form action="inc/regis.php" method="post">
    <h3 class="text-center">Регистрация</h3>
    <div class="form-group">
      <input class="form-control item" type="text" name="username" maxlength="15" minlength="4" pattern="^[a-zA-Zа-яА-Я0-9_.-]*$" id="username" placeholder="Логин" required>
    </div>
    <div class="form-group">
      <input class="form-control item" type="number" name="telephone" maxlength="12" minlength="12" pattern="^[0-9]*$" id="telephone" placeholder="Номер телефона" required>
    </div>
    <div class="form-group">
      <input class="form-control item" type="password" name="pass" minlength="6" id="password" placeholder="Пароль" required>
    </div>
    <div class="form-group">
      <input class="form-control item" type="password" name="pass_confirm" minlength="6" id="password" placeholder="Подтвердите пароль" required>
    </div>
    <div class="form-group">
      <input class="form-control item" type="email" name="email" id="email" placeholder="Email" required>
    </div>
    <div class="form-group">
      <button class="btn btn-primary btn-block create-account" type="submit">Регистрация</button>
    </div>
    <div class="form-group1">
      <a href="log.php" class="netac">Есть аккаунт? Войдите!</a>
    </div>
    <div class="form-group1">
      <a href="index.php" class="netac">Вернутся к просмотру сайта</a>
    </div>
      <?php
          if ($_SESSION['message1']==true) {
              echo '<p class="msg">' . $_SESSION['message'] . '</p>';
          }
          else{
              echo '<p >' . $_SESSION['message'] . '</p>';
          }


      ?>

  </form>
</div>
</body>
</html>