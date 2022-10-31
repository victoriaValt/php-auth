<?php

    session_start();

    if ($_SESSION['user']){
        header('Location: profile.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth and register on PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Form -->
    <form class="form" action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <div>
            <label>ФИО</label><br>
            <input type="text" name="full_name">
        </div>
        <div>
            <label>Логин</label><br>
            <input type="text" name="login">
        </div>
        <div>
            <label>Электронная почта</label><br>
            <input type="email" name="email">
        </div>
        <div>
            <label>Изображение профиля</label><br>
            <input type="file" name="avatar">
        </div>
        <div>
            <label>Пароль</label><br>
            <input type="password" name="password">
        </div>
        <div>
            <label>Подтверждение пароля</label><br>
            <input type="password" name="password_conf">
        </div>
        <button type="submit">Зарегистрироваться</button>
        <p>
            У вас есть аккаунт? <a href="/php-auth/index.php">Авторизоваться</a>
        </p>
        <p class="msg">
            <?php
                $_SESSION['message'];
                unset($_SESSION['message']); 
            ?>
        </p>
    </form>

</body>

</html>