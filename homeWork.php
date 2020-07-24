<?php

define('UPLOAD_FOLDER', 'upload');

function filelist(string $path): array
{
    $dir = opendir($path);

    $res = [];

    while ($name = readdir($dir)) {
        if (in_array($name, ['.', '..'])) {
            continue;
        }
        if (!is_dir($name)) {
            $res[] = $name;
        }
    }
    return $res;
}

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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['avatar']) && is_array($_FILES['avatar'])){
        if (UPLOAD_ERR_OK === $_FILES['avatar']['error']){
            if (!file_exists(UPLOAD_FOLDER)){
//                mkdir(UPLOAD_FOLDER, 0777);
            }
            $fileName = $_FILES['avatar']['name'];
            $tmp = $_FILES['avatar']['tmp_name'];

            move_uploaded_file($tmp, sprintf('%s/%s', UPLOAD_FOLDER, $fileName));

        } else {
            echo 'Something went wrong';
        }
    }
}


//  ================  Delete file  ===============

if (isset($_POST['files']) && ($file = (string) $_POST['files'])) {
    $fullPath = sprintf('%s/%s', UPLOAD_FOLDER, $file);

    if (file_exists($fullPath)){
        unlink($fullPath);
    }
}


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
}

// ================  возвращаемся на ту же с траницу с которой произвели запрос
// =============  но уже методом GET
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    header('Location: ' . $_SERVER['PHP_SELF']);
    header('HTTP/1.1 301 Moved permanently');
    exit;
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

<form action="" method="post" enctype="multipart/form-data">
    <label for="name-id">Name</label>
    <input id="name-id" type="text" name="name">
    <br>
    <label for="age-id">Age</label>
    <input id="age-id" type="text" name="age">
    <br>
    <label for="age-id">Avatar</label>
    <input type="file" name="avatar">
    <br>
    <input type="submit" value="SEND">
</form>
<hr>

<form action="" method="post">
    <select name="files" id="">
        <?php

        if ($files = filelist(UPLOAD_FOLDER)){
            foreach ($files as $file){
                echo sprintf('<option value="%s">%s</option>', $file, $file);
            }
        }
        ?>

    </select>
    <input type="submit" value="Delete">

</form>

<a id="Download" href="usersM.txt">Download</a>

<?php

//if (file_exists('usersM.txt')) {
//    $myFale = fopen('usersM.txt', 'r');
//
//    while ($row = fgets($myFale)) {
//        echo $row, '<br>';
//    }
//    fclose($myFale);
//}

// =================== 14.07.2020 создаем новую папку ============

//$newFolder = 'myFolder';
//
//if (!file_exists($newFolder)){
//    mkdir('myFolder', 0777);
//    echo sprintf('We created folder %s', $newFolder);
//} else {
//    sprintf('folder %s already exist', $newFolder);
//}

// ===============  удаляем папку ===============

//if (file_exists($newFolder)){
//    rmdir('myFolder');
//    echo sprintf('We deleted folder %s', $newFolder);
//} else {
//    sprintf('folder %s already deleted', $newFolder);
//}



// ======================  перебираем дерикторию =================
//$dir = opendir('.');
//
//echo '<ul>';
//while($name = readdir($dir)){
//    if (in_array($name, ['.', '..'])){
//        continue;
//    }
//    if(is_dir($name)){
//        echo sprintf('<li><b>[%s]</b></li>', $name);
//    } else {
//        echo sprintf('<li>%s</li>', $name);
//    }
//}
//echo '</ul>';
//
//closedir($dir);


// =============== упрощенно смотрим директорию папку =================

//$currentFolder = scandir('.');
//
//    foreach ($currentFolder as $name){
//        if (in_array($name, ['.', '..'])) {
//            continue;
//        }
//        if (is_dir($name)){
//            echo sprintf('<li><b>[%s]</b></li>', $name);
//        } else {
//            echo sprintf('<li>%s</li>', $name);
//        }
//    }


//$fileUsers = file_get_contents('usersM.txt');
//if (isset($fileUsers)){
//    echo $fileUsers, '<br>';
//}
//ob_flush();//очищает буфер обмена

?>

</body>
</html>
