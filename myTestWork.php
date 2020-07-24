<?php
session_start();
//phpinfo();
//echo "ky-ky";
//$a = 10;
//$b = 2.23;
//$c = [10, 22, 'ky-ky', 3 => 2.88, 4 => true];
////$c[] = 'qwertyu';
//if (is_string($a)){
//    $a += 5;
//}else $a += 1;
//echo $a;
//print $c;
//print_r($c);
//var_dump ($c);
//echo $c;
//echo $b,"  ",  123,'  ', 2109;
//print $b + $b + $a;
//var_dump(25/7);         // float(3.5714285714286)
//var_dump((int) (25/7)); // int(3)
//var_dump(round(25/7));
//echo (int) ( (0.1+0.7) * 10 );
//$x = 8 - 6.4;// which is equal to 1.6
/////($x);
//$y = 1.6;
//var_dump($x == $y); // is not true


//$expand = 1;
//$either = 2;
//echo <<<AAA
//'Переменные {$expand} также {$either} не разворачиваются'
//AAA;

//var_dump(array(<<<EOD
//foobar!
//EOD
//));


//$array = array(1, 2, 3, 4, 5);
//print_r($array);
//foreach ($array as $i => $value){
//    unset($array[$i]);
//}
////print_r($array);
//$array[] = 6;
//print_r($array);
//
//$array = array_values($array);
//$array[] = 7;
//print_r($array);


//class A {
//    private $A; // Это станет '\0A\0A'
//}
//
//class B extends A {
//    private $A; // Это станет '\0B\0A'
//    public $AA; // Это станет 'AA'
//}
//
//var_dump((array) new B());

//$a = array();
//$a['color'] = 'red';
//$a['taste'] = 'sweet';
//$a['shape'] = 'round';
//$a['name']  = 'apple';
//$a[]        = 4;
//var_dump($a);

//$colors = array('red', 'blue', 'green', 'yellow');
//
//foreach ($colors as $color) {
//    echo "Вам нравится $color?";
//}


//$d = 1;
//$d += $d++ + ++$d;
//var_dump($d);

//$arr['Language'] = 'php';
//$str = " I am learning {$arr['Language']}";
//$final = `dir`;
////$str1 = $final . 'I am learning' . $arr['Language'];
//$final .= $str;
//
////var_dump($str1);
//var_dump($final);



//class Fother {
//    public $daughter1 = 'Ann';
//    public $daughter2 = 'Anastasia';
//    public $son = 'Niki';
//};
//
//$femyli = new Fother;
////echo $femyli;
//foreach($femyli as $elm) {
//    echo $elm/* . ''*/ . '<br>';
//}


//$a =array(1);
//$b = 2;
//$c = 3;
//
//switch (true){
//    case $b == 1:
//        echo 1;
//        break;
//
//    case $b === 2:
//        echo 2;
//        break;
//
//    case $b ===3:
//        echo 3;
//        break;
//
//    default:
//        echo 'default';
//        break;
//}

//===============  FOR
//$a = array(1);
//$b = 2;
//$c = 3;

//for ($i = 0; $i < 10; $i++){
//    echo 2 .  '<br>';
//}

//$i = 0;
//for (; $i < 10; ){
//    echo 2 .  '<br>';
//    $i++;
//}

//for (;;){
//    echo 2 .  '<br>';
//    $i++;
//    if ($i === 10)break;
//}


//===================  WHILE

//$i = 10;
//while ($i < 10){
//    echo 2 . '<br>';
//}

// =================== DO WHILE один раз сработает все равно
//do {
//    echo 'и того: -3' . '<br>';
//    $i++;
//}while($i < 10);



//  =================== ARRAY perebor
//$meshok = [
//    'koshelek' => 750,
//    'bloknot' => 'vajnie zapisi',
//    'chehol' => true,
//    'barsetka' => ['iphone', 'mcbook', ['info', 'files']]
//];

//dlia zifrovih massivov!!!
//for ($i = 0; $i < count($meshok['barsetka']); $i++){
//    var_dump($meshok['barsetka'][$i]) . '<br>';
//}
//
//foreach($meshok as $key => $item){
//
////    $key .= '!!!';
//    echo '$key -';
//    var_dump($key) . '<br>';
//
////    $item .= '!!!';
//    echo '$item -';
//    var_dump($item) . '<br>';
//}
//var_dump($meshok);
//var_dump($meshok['barsetka']);


//$x =10;
//$x = $x + 5;
//unset($x);
//ini_set('display_errors', 0);
//var_dump($x);


//================== Function ===============

//foo('My ');
//function foo($str){
//    echo $str;
//}
//foo(' name');


//foo('foo1');
//function foo($num){
//
//    $num++;
//    echo $num;
//}
//foo(' name');// !!!!!!!!!!


//foo(1);
//function foo($num){
//
//    $num++;
//    echo $num . '<br>';
//}
//foo(50);


//$a = foo(1);
//function foo($num){
//
//    $num++;
//    return $num . '<br>';
//}
//$b = foo(50);
//echo $a, $b;
//echo foo(50);


//$a = foo(1, 1, 1);
//echo $a;
//function foo($num, $num1, $num2){
//
//       return $num + $num1 + $num2 . '<br>';
//}
//echo foo(50, 50, 50);


//$a = foo(5);
//echo $a;
//function foo($num, $num1 = 3, $num2 = 2){
//
//    return $num + $num1 + $num2 . '<br>';
//}
//echo foo(50, 50, 50);


//$a = foo();
//echo $a;
//function foo($num = 5, $num1 = 3, $num2 = 2){
//
//    return $num + $num1 + $num2 . '<br>';
//}
//echo foo(50, 50, 50);


//===================== Function 2 ======

//$glob = 'Vasia';
//function hello($push){
//    $glob = 'Bobik';
//    echo $push . ' ' . $global;
//}
//$hello = 'Hello';
//hello($hello);


//$glob = 'Vasia';
//function hello($push){
//    global $glob;
//    echo $push . ' ' . $glob . '<br>';
//}
//$hello = 'Hello';
//$hello1 = 'Hi';
//hello($hello);
//hello($hello1);



// ============= не всегда хорошо использовать в функции глобальную переменную!!!

//$glob = 'Vasia';
//function hello($push){
//    global $glob; //  не всегда хорошо глобальную переменную использовать
//                  // внутри функции
//    echo $push . ' ' . $glob . '<br>';
//    $glob = 'Tuzik';
//}
//
//echo $glob . '<br>'; // !!!!!!!!!!!!!!!!
//$hello = 'Hello';
//hello($hello);
//
//echo $glob; // !!!!!!!!!!!!!!!!!!


// =============== Более разумное использование глобальной переменной в функции
// =============== анонимная функция вызываем глобальную переменную без плохих
// =============== последствий

//$glob = 'Vasia';
//$foo = function ($str) use ($glob){
//  echo '<br>' . $str . ' ' . $glob . '<br>';
//  $glob = 'Ky-Ky';
//};// !!!!!  ;;;;
//
//$foo('Hello');
//echo $glob; // нима Ку-Ку !!!



// ================================== 13 - 14 урок функции по ссылке

//$name = 'Masha';
//function reName1($newName, &$innerName, &$other = false){
//    $innerName = $newName;
//    echo $innerName;
//    $other = 'Hello';
//    return  'world';
//}
//$str = reName1('olga', $name, $other);
//var_dump('!!!' . $str);
//echo '<br>' . $name;
//var_dump($other);
// ===========================

//$_GET['dvjjreiuhviunscjvnsaeisoerhfhhn'] = 'Uzhas';
//function &reMake($str){
//    $_GET['dvjjreiuhviunscjvnsaeisoerhfhhn'] = $str;
//    return $_GET['dvjjreiuhviunscjvnsaeisoerhfhhn'];
//}
//$nev = &reMake('NEUZHAS');
//var_dump($nev);
//$nev = '222222';
//var_dump($nev);
//var_dump($_GET['dvjjreiuhviunscjvnsaeisoerhfhhn']);
// === добавляем значек функции по ссылке & - смотрим


// ===================  Базы данных. Замыкания 15 unction userConnekt ==================
//                                Коллбэки
//function userConnekt($db){
//    return function($user) use ($db){
//      echo $user . ' user connect in base ' . $db . '<br>';
//    };
//}
//$db = userConnekt('new Base');
//$db('Kiriko ');
//$db('Gnomik ');
//$db('Popito');

// ============================== Коллбэки ==============
//function userConnekt($db, $user, $callback){
//    $c = $user . 'connect in ' . $db . '<br>';
//    $callback($c);
//}
//userConnekt('new Base', 'Kukish ', function ($ansver){
//    echo 'Yohoo ' . $ansver;
//});

//===============  то же самое только уже с  return =====
//function userConnekt($db, $user, $callback){
//    $c = $user . 'connect in ' . $db;
//    $res = $callback($c);
//    echo $res . ' - good lack!!!';
//}
//userConnekt('new Base', 'Kukish ', function ($ansver){
//    return 'Yohoo ' . $ansver;
//});


// ===================== 16 ===================
//=== Суперглобальные массивы GET, POST, FILES, REQUEST

//var_dump($_POST);
//var_dump($_GET);
//print_r($_GET);
//var_dump($_REQUEST);
//var_dump($_FILES);

// ===================== 17 COOKIE ===================

//if ($_COOKIE) var_dump($_COOKIE);
//else setcookie('name', 'KyKa', 0, '/');


//if ($_COOKIE){
//
//    $_COOKIE['name'] .= ' Gmyka';
//    setcookie('name', $_COOKIE['name'], 0, '/');
//
//
//}
//else setcookie('name', 'KyKa', 0, '/');
//var_dump($_COOKIE);
//exit;

// ================ 18 SESSION, SERVER ==============

//var_dump($_SESSION);

//var_dump($_SERVER);


// =================  урок 25.06  ARRAY ==========

// $ arr = array (1, 5, 'gfhfg', true, array (5));
// $ arr = ['first' => 1, 5, 'gfhfg', true, array (5)];

//$arr = [
//    'first' => 1 ,
//    'second' => 55 ,
//    'ghg' => 'aa' ,
//    'subArr' => [ 'qq' => 7 ],
//    15 => 'abv'
//];
//
// $arr [] = 49;
//
// $arr ['z'] = 35;
// $arr [47] = 27;
//
////unset($arr['ghg']);
//
////var_dump($arr);
////
//$arr2 = [
//    'first' => 22 ,
//    'second' => 33 ,
//    'ghg' => 'ccc' ,
//    'kkkk' => 77 ,
//    29 => 'abv'
//];
//
//$arrMerged = array_merge ( $arr , $arr2 );

// foreach ($arr as $key => $value) {
// echo 'KEY:', $key, 'VALUE:', $value, '<br>';
// var_dump ($value);
// if (is_array ($key)) {
////     echo 'Key:', $key, 'is array <br>';
//// var_dump( 'Key:', $key, 'is array <br>');
////     break;
//        continue;
//}
//
// echo $value, '<br>';
//}

// var_dump ($arrMerged);


// for($i = 0; $i<10; $i++){
//     echo $i, '<br>';
// }


//$i = 0;
//while($i < 10){
////    $i++;
//    ++$i;
//    echo $i, '<br>';
//}

//$i = 0;
//do {
//    echo $i, '<br>';
//    $i++;
//}while ($i <10);

// ==========================  Function ===========

//function myFunc(){
//    echo 123;
//}
//myFunc();


//$i = 10;
//function myFunc($arg){
//    echo $arg;
//}
//myFunc($i);
//
//$func = function (){
//    echo 55, '<br>';
//};
//$func();



//myFunc('12', 10, 'asd');
//function myFunc(string $arg, $arg1, $arg2){
//    var_dump($arg) . '<br>';
//    echo $arg1, '<br>';
//    echo $arg2, '<br>';
//}



//function myFunc(int $arg, ?string $arg1 = 'asd', bool $arg2 = false){
//    return $arg2;
//}
//function f2(){
//    return myFunc('12', null);
//}
//var_dump(f2());
//myFunc('12', 10, 'asd');


//function myFunc(int $arg, ?string $arg1 = 'asd', bool $arg2 = false){
//    return $arg2;
//}
//function f2(){
//    $z = 1;
//    ++$z;
//    return $z;
//}
//echo f2(), '<br>';
//echo f2(), '<br>';
//echo f2(), '<br>';


//function myFunc(int $arg, ?string $arg1 = 'asd', bool $arg2 = false){
//    return $arg2;
//}
//function f2(){
//    static $z;// ====!!!! Static !!! ==== b
//    ++$z;
//    return $z;
//}
//echo f2(), '<br>';
//echo f2(), '<br>';
//echo f2(), '<br>';
//echo f2(), '<br>';
//echo f2(), '<br>';
//echo f2(), '<br>';


// function f2(int $a){
//     $a *= 2;
//     return $a;
// }
// echo f2(7);


//function f2(int $a){
//    $a *= 2;
//    return $a;
//}
//$f = 7;
//echo f2($f), '<br>';
//echo $f, '<br>';


// ====================== Function & ==============
//function f2(int &$a){//  =====!!!!  &&&   !!!! ===== 21.25 25.06
//    $a *= 2;
//    return $a;
//}
//$f = 7;
//echo f2($f), '<br>';
//echo $f, '<br>';


//$f = 7;
//$c = &$f;//  =====!!!!  &&&   !!!! ===== 21.30   25.06
//$f *= 3;
//echo $c, '<br>';
//echo $f, '<br>';


// ===================== Function recursion =====
//  ========== функция вызывает сама в себе, ставим условие!!!========
//function recursion($x){
//    if ($x < 15){
//        echo $x, '<br>';
//        recursion($x + 1);
//    }
//}
//recursion(1);


//function f3(){
//    $args = func_get_args();
//    $namArgs = func_num_args();
//    var_dump($args);
//    return $namArgs;
//}
//f3(12, 15, 'aaa', true, [0=>555]);
//echo f3();

// =================== 2.07.2020 ==============
// ====== strip_tags


// ===============   substr_replace =====

//$var = 'ABCDEFGH:/MNRPQR/';
//echo "Оригинал: $var<hr />\n";
//
///* Обе следующих строки заменяют всю строку $var на 'bob'. */
//echo substr_replace($var, 'bob', 0) . "<br />\n";
//echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

///* Вставляет 'bob' в начало $var. */
//echo substr_replace($var, 'bob', 0, 0) . "<br />\n";

///* Обе следующих строки заменяют 'MNRPQR' в $var на 'bob'. */
//echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
//echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

/* Удаляет 'MNRPQR' из $var. */
//echo substr_replace($var, '', 10, -1) . "<br />\n";



//$var = 'ABCDEFGH:/MNRPQR/';
//echo "Оригинал: $var<hr />\n";
//
///* Обе следующих строки заменяют всю строку $var на 'bob'. */
//echo substr_replace($var,'123', 0, 2) . "<br />\n";
//echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";


// ========================  str_replace
// присваивает: Hll Wrld f PHP
//$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
//$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
//var_dump($onlyconsonants);

//// присваивает: You should eat pizza, beer, and ice cream every day
//$phrase  = "You should eat fruits, vegetables, and fiber every day.";
//$healthy = array("fruits", "vegetables", "fiber");
//$yummy   = array("pizza", "beer", "ice cream");
//
//$newphrase = str_replace($yummy, $healthy, $phrase);
//var_dump($newphrase);
//
//// присваивает: 2
//$str = str_replace("ll", "", "good golly miss molly!", $count);
//echo $count;


// Порядок замены
//$str     = "Строка 1\nСтрока 2\rСтрока 3\r\nСтрока 4\n";
//$order   = array("\r\n", "\n", "\r");
//$replace = '<br />';
//
//// Обрабатывает сначала \r\n для избежания их повторной замены.
//echo $newstr = str_replace($order, $replace, $str);


// ===================  2.07.20 ~ 20.20 ======  Рядки и Строки

//$ky = '<h1> h h jW W W h <p>V V <span></span> [p]</h1>';
//echo $ky;
//$ky = strip_tags(trim(strtolower($ky)));
//$ky = str_replace('[p]', '', $ky);
////$ky = substr($ky, 0, -1);
////$ky = strip_tags($ky);
////$ky = trim($ky);
////$ky = substr_replace($ky, '', -3);
////$ky = strtolower($ky);
//var_dump($ky);
//echo $ky;
//$ky = str_replace('w', 'z', $ky);
//var_dump($ky);
//echo $ky;



//function f3(){
//    $args = func_get_args();
//    $namArgs = func_num_args();
//    var_dump($args);
//    return $namArgs;
//}
//f3(12, 15, 'aaa', true, [0=>555]);


