<?php
            /*----     Файл для приёма данных с формы     ------*/


//   $_GET,  $_POST   - cупер-глобальный массив

//print_r($_POST);   // То что возвращает метот POST - массив
//print_r($_GET);   // То что возвращает метот GET - массив


echo 'Ваш логин: '. $_POST['login'] . '<br>';
echo 'Ваш пароль: '. $_POST['password'];

echo '<hr>';



    /*-----------====   Пример скрипта авторизации   ====-----------*/

include('includes/db.php');      // правильное подключение внешних файлов.   копировать куски кода - плохо
                                        //   подключение к DB

$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if( mysqli_num_rows($count) == 0 ){

    echo 'Вы не заренистрированы!';
} else{

    echo 'Привет ' . $login . '!';

}