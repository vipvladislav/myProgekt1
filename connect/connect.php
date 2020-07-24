<?php

//  подключаемся к базе данных
$connect = mysqli_connect('db', 'root', 'test1_root', 'crud');

//  проверяем подключение

if (!$connect){
//    echo 'Error connect to database!';
    die('Error connect to database!');
}
