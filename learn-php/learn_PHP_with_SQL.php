<?php

//Для соединения с сервером      -  (сервер, имя пользователя, пароль, название DB)
$connection = mysqli_connect('127.0.0.1', 'root', '', 'training_db');

if ($connection == false ){
    echo  'Не удалось подключиться' . '<br>';
    echo mysqli_connect_errno();                //для вывода ошибки подключения
    exit();                             // или die();   для остановки скрипта
} else{
    echo 'Соединение установлено!';
}


echo '<hr>';
/*--------------------------------------------------------------------*/

mysqli_query($connection, 'запрос : SELECT, DELETE...');    // произвести запрос к базе данных

$result = mysqli_query($connection, "SELECT * FROM `articles_categories`");


mysqli_num_rows( $result );   //  функция позволяющая получить количество записей которые вернула команда SELECT
if ( mysqli_num_rows( $result ) ==0 ){
    echo 'Категорий не найдено';
} else {
    // Вывести категории циклом while     ( пример ниже )
};



//mysqli_fetch_assoc();     для того что возвращается из БД нужно применить ф-цию

/*
$r1 = mysqli_fetch_assoc($result);
$r2 = mysqli_fetch_assoc($result);
$r3 = mysqli_fetch_assoc($result);
$r4 = mysqli_fetch_assoc($result);
$r5 = mysqli_fetch_assoc($result);

print_r($r5);
*/

    // Но, здесь нужно использовать цыкл

/*while ( ($record = mysqli_fetch_assoc($result)) ){
    //
     print_r($record);
    echo '<hr>';
}
*/
?>

    <ul>
       <?php
            while ( ($cat = mysqli_fetch_assoc($result)) ){
                echo '<li>' . $cat['title'] . '</li>';
            }
       ?>
    </ul>

<?php

echo '<hr>';
/*----------------------------------------------------------------------------------------*/

$result = mysqli_query($connection, "SELECT * FROM `articles_categories`");

mysqli_num_rows( $result );   //  функция позволяющая получить количество записей которые вернула команда SELECT
if ( mysqli_num_rows( $result ) ==0 ){
    echo 'Категорий не найдено';
} else {
                        // Вывести категории циклом while  c количеством статтей в ней      ( пример ниже )
                //  ==== Но у такого метода есть проблема с производительностью, ведь возвращает все категории  ====
                //    поетому нужно изменить запрос   ( пример ниже после разделителя )
};

?>

    <ul>
        <?php
            while ( ($cat = mysqli_fetch_assoc($result)) ){
                $articles_count = mysqli_query($connection, 'SELECT * FROM `articles` WHERE `categorie_id` = ' . $cat['id']);
                echo '<li>' . $cat['title'] . ' ('. mysqli_num_rows($articles_count) . ')' . '</li>';
            }
        ?>
    </ul>


<?php
echo '<hr>';
/*-----------------------========  Пример правильного запроса количества !!!!! ======------------------------*/

$result = mysqli_query($connection, "SELECT * FROM `articles_categories`");

mysqli_num_rows( $result );   //  функция позволяющая получить количество записей которые вернула команда SELECT
if ( mysqli_num_rows( $result ) ==0 ){
    echo 'Категорий не найдено';
} else {
    // Вывести категории циклом while  c количеством статтей в ней      ( пример ниже )
}

?>

    <ul>
        <?php
        while (($cat = mysqli_fetch_assoc($result))) {
            $articles_count = mysqli_query($connection, 'SELECT COUNT(`id`) AS `total_count` FROM `articles` WHERE `categorie_id` = ' . $cat['id']);
            $articles_count_result = mysqli_fetch_assoc( $articles_count );

            echo '<li>' . $cat['title'] . ' (' . $articles_count_result['total_count'] . ')' . '</li>';
        }
        ?>
    </ul>

<?php
    mysqli_close($connection);    // в конце рекомендуется закрывать соединение




echo '<hr>';
/*-----------------------========  Основы работы с датами в PHP ======------------------------*/
        //   Manual   -     http://php.net/manual/ru/function.date.php

echo date('d.m.Y');
echo '<br>';

echo date('d.m.Y H:i:s');
echo '<br>';

echo date('Y-m-d H:i:s');     // date like in data base
echo '<hr>';


                                 /*---------*/
// TimeStamp  -  ТаймСтэмп - время прошедшее c даты епохи основания UNIX - 1970.1.1
        //чтобы узнать сколько времени прошло от какой-то даты

echo time();    // количество секунд прошедшее с TimeStamp       || текущая дата
echo '<hr>';


//    ---==     Пример - узнать сколько прошло дней с заданой даты

$start_date = '2016-12-10';
$start_date_timestamp = strtotime($start_date);    // Функция позволяющая перевести дату в  TimeStamp

$diff = time() - $start_date_timestamp;        //  получаем разницу между датами в секундах

        //Чтобы превратить секунды в  дни нужно разделить на секунды, минуты и часы
        //   с помощью floor() - округлить в нижнюю сторону

$days_passed = floor((( $diff / 60) / 60 ) / 24);

echo "Между $start_date" . " и " . date('d-m-Y H:i:s') . ' прошло ' . $days_passed . ' дней!';




echo '<hr>';
/*-----------------------========  Основы работы с формами в PHP ======------------------------*/

?>

    <form method="POST" action="../learn-php/handle.php">
        <input type="text" placeholder="Ваш логин" name="login">
        <input type="text" placeholder="Ваш пароль" name="password"><br>
        <input type="submit" value="Отправить">
    </form>




<?php












