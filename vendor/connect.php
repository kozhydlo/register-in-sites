<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'рейстрація');

    if (!$connect) {
        die('Error connect to DataBase');
    }