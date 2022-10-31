<?php

    session_start();
    require_once 'connect_db.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_conf = $_POST['password_conf'];

    // var_dump($_POST);

    if ($password === $password_conf) {

        //$_FILES['avatar']['name'];
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке изображения!';
            header('Location: ../register.php');
        }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`full_name`, `login`, `email`, `password`, `avatar`) 
                                VALUES('$full_name', '$login', '$email', '$password', '$path')");

        

        header('Location: ../index.php');


    } else{
        $_SESSION['message'] = 'Пароли не совпадают!';
        header('Location: ../register.php');
    }
