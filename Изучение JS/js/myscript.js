// alert('Я – JavaScript!');

// var admin, name;
//     name = "Василий";
//     admin = name;
// alert(admin);

// var planet = Earth,
//     visitorName = 'MichaelOz';

// var x = - 1, y = 3;
// alert( y - x );

// var years = prompt('Сколько вам лет?', 100);
// alert('Вам ' + years + ' лет!');

// var isAdmin = confirm("Вы - администратор?");
// alert( isAdmin );

//  var Name = prompt('What is your name?', 'Name...');
// alert('Hello ' + Name + '!');

// var year = prompt('В каком году появилась спецификация ECMA-262 5.1?', '');
//     if (year < 2011) {
//         alert( 'Это слишком рано..' );
//     } else if (year > 2011) {
//         alert( 'Это поздновато..' );
//     } else {
//         alert( 'Да, точно в этом году!' );
//     }

// var age = prompt('возраст?', 18);
// var message = (age < 3) ? 'Здравствуй, малыш!' :
//     (age < 18) ? 'Привет!' :
//         (age < 100) ? 'Здравствуйте!' :
//             'Какой необычный возраст!';
// alert( message );

// var name = prompt('Каково «официальное» название JavaScript?', '');
// if (name == 'ECMAScript'){
//     alert('Верно!')
// } else {
//     alert('Не знаете? «ECMAScript»!')
// }

// var value = prompt('Введите число', '');
//     if (value > 0){
//         alert('1');
//     } else if(value < -1){
//         alert('-1');
//     } else {
//         alert('0');
//     }

// var loginName = prompt('Введите Логин', '');
//     if (loginName == 'admin'){
//         var pasword = prompt('Введите Пароль', '');
//
//             if (pasword == 'Чёрный Властелин'){
//                 alert('Welcome!')
//             } else if(pasword == null){
//                 alert ('Вход отменён!!');
//             } else {
//                 alert('Пароль неверен!')
//             }
//
//     } else if (loginName == null){
//         alert ('Вход отменён!');
//     } else {
//         alert('I dont know you!')
//     }

// if (a + b < 4) {
//     result = 'Мало';
// } else {
//     result = 'Много';
// }
//        /*The same*/
// (a + b < 4) ? 'Мало' : 'Много';


// var login = prompt('Login?', '');
//
// var message;
// if (login == 'Вася') {
//     message = 'Привет';
// } else if (login == 'Директор') {
//     message = 'Здравствуйте';
// } else if (login == '') {
//     message = 'Нет логина';
// } else {
//     message = '';
// }
//                 /* The same */
// var message = (login == 'Вася') ? 'Привет' :
//     (login == 'Директор') ? 'Здравствуйте' :
//         (login == '') ? 'Нет логина' :
//             '!!!';
//
// alert( message );

// alert( alert(1) || 2 || alert(3) );

// alert( 1 && null && 2 );

// alert( alert(1) && alert(2) );

// alert( null || 2 && 3 || 4 );

// var age = 15;
//
// if (age >= 14 && age <=90){
//     alert("Вам от 14 до 90 лет")
// }

// var age = prompt('You age', '');
//
// if (age < 14 || age >90){
//     alert("Вам лучше отказаться от тяжелой работы!")
// }

// var age = prompt('You age', '');
//
// if (!(age >= 14 && age <= 90)){
//     alert("Вам лучше отказаться от тяжелой работы!")
// }


// for (var i = 2; i <= 10; ++i){
//     if( i % 2 == 1 ) continue;
//     console.log(i);
// }
//             /*The same*/
// for (var i = 2; i <= 10; ++i) {
//     if (i % 2 == 0) {
//         console.log( i );
//     }
// }


// var i = 0;
// while (i < 3) {
//     console.log( "номер " + i + "!" );
//     i++;
// }
//             /*The same*/
// for (var i = 0; i < 3; i++) {
//     console.log( "номер " + i + "!" );
// }

// var num;
// do {
//     num = prompt("Введите число больше 100?", 0);
// } while (num <= 100 && num != null);

// if (browser == 'IE'){
//     alert( 'О, да у вас IE!' );
// } else  if(browser == 'Chrome'
//     || browser == 'Firefox'
//     || browser == 'Safari'
//     || browser == 'Opera' ) {
//     alert('Да, и эти браузеры мы поддерживаем');
// } else {
//     alert( 'Мы надеемся, что и в вашем браузере все ок!' );
// }

// var a = +prompt('a?', '');
// switch (a){
//     case 0:
//         alert(0);
//         break;
//     case 1:
//         alert(1);
//         break;
//     case 2:
//     case 3:
//         alert('2,3');
//         break;
// }


// function checkAge(age) {
//     if (age > 18) {
//         return true;
//     } else {
//         return confirm('Родители разрешили?');
//     }
// }
//
// function checkAge(age) {
//     return  (age > 18) ?  true : confirm('Родители разрешили?');
// }
//
// function checkAge(age) {
//     return (age > 18) || confirm('Родители разрешили?');
// }


// function min(a, b) {
//     if (a < b) {
//         return a;
//     } else {
//         return b;
//     }
// }
//
// function min(a, b) {
//     return a < b ? a : b;
// }


// var userName = 'Вася';
//
// function showMessage() {
//     userName = 'Петя'; // (1) присвоение во внешнюю переменную
//
//     var message = 'Привет, я ' + userName;
//      alert( message );
// }
//
// showMessage();
//
// alert( userName ); // Петя, значение внешней переменной изменено функцией

// function sum(a, b) {
//     var result = a + b;
//
//     return result;
// }
// // использование:
// alert( sum(25, 45) ); // 3

// var hello = "Привет, мир!";
//
// console.log( hello.toUpperCase() ); // "ПРИВЕТ, МИР!"


// var a = prompt('Введите число', ''),
//     b = prompt('Введите второе число', '');
// alert(+a + +b);

// var str = "Я - современный браузер!";
// console.log( str[0] ); // "Я"

// var str = 'string';
//     str = str.charAt(0).toUpperCase() + str.slice(1);
//
// console.log(str);

// var str = '$120';
//     str = +str.slice(1);
// console.log(str);

// var obj = {};
// obj.test = undefined;
//
// alert( "test" in obj ); // true
// alert( "blabla" in obj ); // false


// var person = {};
// person.age = 25;
// var key = 'age';
//
// alert( person[key] ); // выведет person['age']

// var user = {
//     name: "Таня",
//     age: 25,
//     size: {
//         top: 90,
//         middle: 60,
//         bottom: 90
//     }
// };
//
// console.log(user.name); // "Таня"
// console.log(user.size.top); // 90
// console.log(user.size);


// var person ={};
// console.log(person);
//     person.name = 'Вася';
// console.log(person);
//     person.surname = 'Петров';
// console.log(person);
//     person.name = 'Сергей';
// console.log(person);
//     delete person.name;
// console.log(person);


// var menu = {
//     width: 300,
//     height: 200,
//     title: "Menu"
// };
//
// for (var key in menu) {
//     // этот код будет вызван для каждого свойства объекта
//     // ..и выведет имя свойства и его значение
//
//     console.log( "Ключ: " + key + " значение: " + menu[key] );
// }


// function isEmpty(obj) {
//     for (var key in obj) {
//         return false;
//     }
//     return true;
// }
//
// var schedule = {};
//
// console.log( isEmpty(schedule) ); // true
//
// schedule["8:30"] = "подъём";
//
// console.log( isEmpty(schedule) ); // false

// "use strict";
//
// var salaries = {
//     "Вася": 100,
//     "Петя": 300,
//     "Даша": 250
// };
// var sum = 0;
// for (var name in salaries) {
//     sum += salaries[name];
// }
//
// console.log( sum );

// var a = [];
// a[0] = 0;
// a[5] = 5;
//
// alert( a );

// var goods = [];
//
// lastElement = goods[goods.length - 1];
// goods[goods.length] = 'something';


// var styles = ['Джаз', 'Блюз'];
// console.log(styles);
//
//     styles[styles.length] = 'Рок-н-Ролл';
// console.log(styles);
//
//     styles[styles.length - 2] = 'Классика';
// console.log(styles);
//
//     var firstElem = styles.shift();
// console.log(styles);
//
//     styles.unshift('Рэп', 'Регги');
// console.log(styles);


// var arr = ["Яблоко", "Апельсин", "Груша", "Лимон"];
//
// var rand = Math.floor(Math.random() * arr.length);
//
// alert( arr[rand] );

// var numbers = [];
//
// while (true) {
//
//     var value = prompt("Введите число", 0);
//
//     if (value === "" || value === null || isNaN(value)) break;
//
//     numbers.push(+value);
// }
// var sum = 0;
// for (var i = 0; i < numbers.length; i++) {
//     sum += numbers[i];
// }
//
// console.log( sum );


// var arr = ["Я", "иду", "домой"];
//
// delete arr[1]; // значение с индексом 1 удалено
//
// // теперь arr = ["Я", undefined, "домой"];
// console.log( arr[1]); // undefined


// var arr = ["Почему", "надо", "учить", "JavaScript"];
// var fullCopy = arr.slice();
//
// delete arr[1];
// delete arr[2];
// console.log(fullCopy);
// console.log(arr);

// var arr = ["Яблоко", "Апельсин", "Груша"];
//
// arr.forEach(function(item, i, arr) {
//     console.log( i + ": " + item + " (массив:" + arr + ")" );
// });















