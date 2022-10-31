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
    <form class="form" action="vendor/signin.php" method="post">
        <div>
            <label>Логин</label><br>
            <input type="text" name="login">
        </div>
        <div>
            <label>Пароль</label><br>
            <input type="password" name="password">
        </div>
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? <a href="/php-auth/register.php">Зарегистрироваться</a>
        </p>
        <?php
            if ($_SESSION['message']){
                echo '<p class="msg">' . $SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>

</html>