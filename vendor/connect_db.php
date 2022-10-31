<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'php-auth');

    if (!$connect) {
        die('Error connect to DB');
    }