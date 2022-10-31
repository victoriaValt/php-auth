<?php
    session_start();

    if (!$_SESSION['user']){
        header('Location: /');
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
    <form>
        <div>
            <img src="<?= $_SESSION['user']['avatar'] ?>" width="300px" alt="avatar img">
            <h2 style="margin: 10px 0; text-align: center"><?= $_SESSION['user']['full_name'] ?></h2>
            <a href="vendor/logout.php" class="exit">Выйти</a>
        </div>
    </form>

</body>

</html>