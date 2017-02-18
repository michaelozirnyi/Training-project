<?php

$connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
);

if ($connection == false ){
    echo  'Не удалось подключиться' . '<br>';
    echo mysqli_connect_errno();                //для вывода ошибки подключения
    exit();                             // или die();   для остановки скрипта
}