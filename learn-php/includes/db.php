<?php

$connection = mysqli_connect('127.0.0.1', 'root', '', 'training_db');

if ($connection == false ){
    echo  'Не удалось подключиться' . '<br>';
    echo mysqli_connect_errno();                //для вывода ошибки подключения
    exit();                             // или die();   для остановки скрипта
}