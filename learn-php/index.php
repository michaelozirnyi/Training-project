<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="width: 800px; margin: 25px auto">

    <h1>My first php page!</h1>

    <!--=======================    Learn PHP    ==========================-->
    <?php

    // Constants PHP
    define("PI", 3.14);
    echo "PI =" . " " . PI;

    /*--------------------------------------*/
    echo '<hr>';


    //  Переменные
    $my_variable = 100;

    //  Типы данных   (Основные)
    $a = 25;     // целое число  -  integer, int
    $b = 10.15;     // Дробь  -   float
    $c = 'Some string';     // сторока  - string, str
    $d = "Some any string";  // сторока  - string, str
    $e = array(1,2,3,4,5,6);  // Массив  - array      number start from 0!

    $f = array(                         // Ассоциативный массив
            'name' => 'Michael',
            'surname' => 'Oz',
            'age' => 22,
            'education' => array(           //   Моногоуровневый массив
                        'school in 2011',
                        'institute in 2017'
            )                    // Для вывода какого-то елемента второго уровня
                                 // echo $f['education'][0];
    );

    $j = true; // Boolean : true or false  -  bool

        array(
            'smoking' => false,
            'maried' => false,
            'geek' => true
        );
    /*--------------------------------------*/
    echo '<hr>';

    // Разница между двойными и одинарными кавычками:

    $z = 'My test string';
    echo 'test: $z';         // Обрабатівается как текст
    echo "test: $z";         // Выводится значение переменной

    /*--------------------------------------*/
    echo '<hr>';

    // Конкатынация строк      .
    $my_name = 'Michael';
    $my_surname = 'Oz';

    echo $my_name . ' ' . $my_surname;

    /*--------------------------------------*/
    echo '<hr>';

    // + - / * %       сложение,  вычитание,  деление,  умножение,  остаток от деления

    // Задать приоритетость выполнения - добавить скоки.
    echo (5 * (5 + 6) + 2 / 3) * 2;

    /*--------------------------------------*/
    echo '<hr>';

    // Условия
    $weather = 'ясно';  // снег, дождь, ясно, облачно
    if($weather == 'снег'){
        echo 'Погода плохая, лучше никуда не ехать';
    }
    if($weather == 'дождь'){
        echo 'Погода дождливая, лучше никуда не ехать';
    }
    if($weather == 'ясно'){
        echo 'Погода хорошая, можно ехать';
    }
    if($weather == 'облачно'){
        echo 'Ехать можно, но погода может ухудшиться';
    }
    /*------------------------------------*/
    echo '<hr>';

    $visitor_age = 20;

    // Пропуск в клуб*
    if( $visitor_age < 21 ){
        echo 'Вы еще слишком малы для клуба!';
    }else if( $visitor_age >= 21 ){
        echo 'Входите!';
    }

    echo '<hr>';

    // Операторы сравнения :    <, >, <=, >=, ==, !=

    $key = 10;
    if( $key != 34 ){
        echo 'Обычна цифра';
    }else {
        echo 'Необічная цифра';
    }
    /*--------------------------------------*/
    echo '<hr>';
    //   Оператоы И, ИЛИ    -  &&, ||

    $page_visitor = 'MoZ';
    $age_visitor = 20;

    if( $age_visitor < 21 and $page_visitor != 'MoZ' ){
        echo 'Тебе сюда нельзя, слишком маленький!';
    }else {
        echo 'Привет';
    }

    /*--------------------------------------*/
    echo '<hr>';

    $raiting = 27;

    if( $raiting >= 25 and $raiting <= 75 ){     // Проверка на булиев тип
        echo 'Nice raiting!';
    } else {
        echo 'You must work little more!';
    }

    /*----==============     Loop      ==================----*/
    echo '<hr>';

    //  ЦИКЛЫ   -  Loop                for,   while,   foreach

    //  for - Обычно для заданого количества итераций
    for( $i = 1; $i <= 10; $i++ ){          // I - секция обьявления, II - секция условия, III - секция изменения
        echo "test loop for - $i";            // тело цыкла

        if( $i % 2 == 0 ){
            echo ' Чётное число' . '<br>';
        }else{
            echo ' не чётное число' . '<br>';
        }
    }

    /*--------------------------------------*/
    echo '<hr>';

    // while -  Исполняется до тех пор пока условие есть истенным!

    $s_test = 25;
    while( $s_test <= 35 ){
        //блок кода
        echo 'Тест' . $s_test . '<br>';
        $s_test++;                           //без изменения переменной - бесконечный цыкл!
    }

    /*--------------------------------------*/
    echo '<hr>';

    // foreach -  виполняется для каждого елемента массива

    $some_names = array(
            'Jonny',
            'Abraham',
            'Wolker',
            'Michael',
            'Alex'
    );

    foreach ( $some_names as $v_name){
        echo$v_name . '<br>';
    }

    echo '<hr>';
    // Пример
    $t_numbers = array(1,2,5,8,6);

    foreach ( $t_numbers as $nub ){
        echo 'Квадрат числа' . $nub . ': ' . ($nub * $nub) . '<br>';     /*Математические операции лучше брать в скобки
                                                                                                    при конкатынации*/
    }


    echo '<hr>';
    /*----==============     Function      ==================----*/

    function myFunction(){           // обьявление функции
        //блок кода
        echo 'Test Function';
    }

    myFunction();                   // вызов функции
    echo '<br>';

            // ПРИМЕР вывести большее:
    function get_bigger($a, $b){
        if ($a > $b){
            echo $a;
        }else{
            echo $b;
        }

        echo '<br>';
    }

    get_bigger(10, 20);
    get_bigger(28, 13);
    get_bigger(75, 23);


    echo '<hr>';

            // return   -  для вовращения значения из функции.  если функция return была вызвана,
                                                     // функция прекращает жизнь, возвращает значение и уничтожается
    function get_big($a, $b){
        if ($a > $b){
            return $a;
        }else{
            return $b;
        }
    }

    $bigger_num = get_big(45, 50);

    echo $bigger_num;
    echo '<hr>';


    /*--------===  Некоторые поллезные математические ф-ции  ===--------*/
    // abs, round, ceil, floor, rand, min, max


    // abs   - возвращает абсолютное число
    echo abs(-180);
    echo '<br>';

    // round   - Округление по общим правилам
    echo round(5.55);
    echo '<br>';

    // ceil   - Округление всегда в большую сторону
    echo ceil(5.55);
    echo '<br>';

    // floor   - Округление всегда в меньшую сторону
    echo ceil(5.55);
    echo '<br>';

    // rand   - Генирация случайного числа
    echo rand(0, 100);
    echo '<br>';

    // min - для возвращения найменшего из аргументов
    echo min(8, 2, 5, 8, 25);
    echo '<br>';

    // max - для возвращения найбольшего из аргументов
    echo min(8, 2, 5, 8, 25);


    echo '<hr>';
    ?>

    <p>Today  is <?php echo date('d.m.y h:i');?></p>

    <?php
    /*  //echo 'Must work!';
        echo PHP_VERSION;
        echo "</br>";

        $array = array("Egg", "Tomato", "Beans" );
        $array[] = "Chips";
        echo $array[3];
    */?>


    <!-- == Functions PHP == -->
    <?php
    /* // Get the length of your own name
     // and print it to the screen!
     $length = strlen("Michael");
     echo $length;*/
    ?>



</body>
</html>

