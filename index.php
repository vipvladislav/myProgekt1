<?php
ob_start();// Включение буферизации вывода
//    echo 123;
//ob_end_clean(); // Очистить (стереть) буфер вывода и отключить буферизацию вывода

session_start();
//setcookie();

//$fp = fopen('somefile.txt', 'r');
//if (!$fp) {
//    echo 'Could not open file somefile.txt';
//}
//while (false !== ($char = fgetc($fp))) {
//    echo "$char\n";
//}

//session_destroy();//  уничтожает сессию

//    header('Content-Disposition: attachment; filename="myFile.txt"');

//header('Expires: ' . date('r', time() + 5));
//echo date('H:i:s');



//$f = file_get_contents('readme2');
//var_dump($f);
//file_put_contents('myTextFile.txt', 'ky-ky');
//exit();

//var_dump(file_exists('temp2'));// проверяет есть ли файл
//var_dump(file_exists(__DIR__ . '/readme2')); exit();
//var_dump(realpath(__DIR__ . '')); exit(); // где мы находимся


// ================ Hesh ==============
//$x = 'kyka';
////echo  md5($x); exit;// ХЕШ!!!
//if(md5($x) === '88ce01fb69f0c9bd37b0a38d5582f279'){
//    echo 'ky-ky ri-ky'; exit();
//}
//
//var_dump(md5($x) === '88ce01fb69f0c9bd37b0a38d5582f279'); exit();
//print_r(md5($x) === '88ce01fb69f0c9bd37b0a38d5582f279'); exit();


//    ob_start();// Включение буферизации вывода
//    echo 123;



//$file = 'people.txt';
//
//$current = file_get_contents($file);
//
//$current .= "John Smith\n";
//
//file_put_contents($file, $current);

//  =================  Сознадние и удаление файла ===========
//unlink('homeWork.txt');
//file_put_contents('homeWork.txt', 'Привет Кузе!');
//exit;


// ============= 07.07.2020 =============

// ========== проверяем есть ли такие файлы =========
//var_dump(realpath(__DIR__ . '/indexTest1.html'));
//var_dump(file_exists('indexTest1.html'));exit();


//echo $_SERVER['PHP_SELF'];exit();
$welcome = 'Ви новий кроистувач';

//    ob_flush();//очищает буфер обмена


if (!empty($_COOKIE['userName'])) {
    $welcome = $_COOKIE['userName'];
}

//    header('Location: http://localhost');

if (isset($_POST['name']) && $_POST['name']) {
    $name = trim(strip_tags($_POST['name']));
    setcookie('userName', $name, time() + 10);
    $welcome = $name;
    header('Location: ' . $_SERVER['PHP_SELF']);

    $age = $_POST['age'] ?? '';
// ==============  или так: ===========
//        if (isset($_POST['age'])){
//            $_SESSION['age'] = $_POST['age'];
//        } else{
//            $_SESSION['age'] = '';
//        }
// ====================================
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;

    $data = sprintf('Name: %s | Age: %s %s', $name, $age, PHP_EOL);
    file_put_contents('usersM.txt', $data, FILE_APPEND);
    chmod('usersM.txt', 0646);

    header('Location: ' . $_SERVER['PHP_SELF']);
    header('HTTP/1.1 301 Moved permanently');
    exit;

}
if (file_exists('usersM.txt')) {
    $myFale = fopen('usersM.txt', 'r');

    while ($row = fgets($myFale)) {
        echo $row, '<br>';
    }
    fclose($myFale);
}
ob_end_clean();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
    Hello!!!
    <?php
    echo $welcome;
    ?>
    Session values:
    <?php
    session_destroy();
    echo $_SESSION['name'] ?? '', ' | ', $_SESSION['age'] ?? '';
    ?>
</h1>

<form action="" method="post">
    <label for="name-id">Name</label>
    <input id="name-id" type="text" name="name">
    <label for="age-id">Age</label>
    <input id="age-id" type="text" name="age">
    <input type="submit" value="SEND">
</form>

<?php

$fileUsers = file_get_contents('usersM.txt');
if (isset($fileUsers)){
    echo $fileUsers, '<br>';
}
//ob_flush();//очищает буфер обмена
?>

</body>
</html>


