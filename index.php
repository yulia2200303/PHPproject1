<?php

include_once 'setting.php';
session_start();
$host = "localhost"; // адрес сервера
$database = "ProjectDB"; // имя базы данных
$user = "root"; // имя пользователя
$password = ""; // пароль
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
if ($link)
    echo 'ok';
else
    echo 'error';
mysqli_connect($host, $user, $password, $database);
$title = "Home";
$content = "hello";

//include 'menu.html';

function MessageSend($p1, $p2) {
if ($p1 == 1) $p1 = 'Error';
else if ($p1 == 2) $p1 = 'Helper';
else if ($p1 == 3) $p1 = 'Information';
$_SESSION['message'] = '<div class="MessageBlock"><b>'.$p1.'</b>: '.$p2.'</div>';
//exit(header('Location: '.$_SERVER['HTTP_REFERER']));
}

function MessageShow() {
if ($_SESSION['message']){$Message = $_SESSION['message'];
echo $Message;}
$_SESSION['message'] = array();
}

function FormChars($p1) {
    return nl2br(htmlspecialchars(trim($p1), ENT_QUOTES), false); //убираем лишние пробелы, теги
}

function GenPass($p1, $p2){
    return md5('YULIA'.md5('321'.$p1.'123').md5('678'.$p2.'890'));
}

function Head($p1) {
    echo '<!DOCTYPE html><html><head><meta charset="utf-8" /><title>' . $p1 . '</title><meta name="keywords" content="" /><meta name="description" content="" /><link href="style.css" rel="stylesheet"></head>';
}

function Menu() {
    echo '<div class="MenuHead"><a href="main.php"><div class="Menu">Главная</div></a><a href="register.php"><div class="Menu">Регистрация</div></a><a href="login.php"><div class="Menu">Вход</div></a></div>';
}

function Footer() {
    echo '<footer class="footer">Coopirate by Yulia Revinskaya</footer>';
}

?>
