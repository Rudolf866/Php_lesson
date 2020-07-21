<h1>Отправка формы</h1>
<form name="test" action="check.php" method="post">
    <label> Имя :</label>
    <input type="text" name="name" placeholder="Имя"><br><br>
    <label>Email :</label>
    <input type="text" name="email" placeholder="Email"><br><br>
    <label>Сообщение :</label><br>
    <textarea name="message" id="" cols="30" rows="10"></textarea><br/>
    <input type="submit" name="done" value="Отправить">
</form>
<h1>Function Type  lesson</h1>
<?php
$a = "hello";
$hello = 12;
echo " переменная равно : ".$$a."<br>";
// -- isset() - если существует переменная то true , если нет то false

if (isset($$a)) echo "<br>переменная существует<br>";
    else echo "<br>Такой переменной нет<br>";
//-- unset() - помещённая переменная удаляется. unset($array[0]);
unset($$a);
if (isset($$a)) echo "<br>переменная существует<br>";
else echo "<br>Такой переменной нет<br>";
// -- is_numeric() - проверяет является ли эта переменная числом
// -- s_scalar() - проверяет не является ли эта переменная массивом или объектом
$x = "15";
$null;
echo "<br>Is numeric -".is_numeric($x)."<br>"; # => true 1
echo "<br>Is integer -".is_integer($x)."<br>"; # => false 0
echo "<br>Is double -".is_double($x)."<br>"; # => false 0
echo "<br>Is string -".is_string($x)."<br>"; # => true 1
echo "<br>Is boolean -".is_bool($x)."<br>"; # => false 0
echo "<br>Is scalar -".is_scalar($x)."<br>"; # => true 1
echo "<br>Is null -".is_null($null)."<br>"; # => true 1
echo "<br>Is array -".is_array($x)."<br>"; # => false 0
echo "<br>Type -".gettype($x)."<br>"; # => string
?>
<h1>Math lesson</h1>
<?php
 echo "Значение числа PI :".M_PI."<br>";
 $x = -25;
 $y = 45.8776545667;
echo "<br>Значение числа по модулю :".abs($x)."<br>"; // => 25
echo "<br>Значение числа значение round :".round($y,2)."<br>";// => 45.88
echo "<br>Значение числа значение ceil :".ceil($y)."<br>";// => 46
echo "<br>Значение числа значение floor :".floor($y)."<br>";// => 45
echo "<br>Значение числа значение mt_rand :".mt_rand(1,20)."<br>";// рамдомные числа от 1-20
echo "<br>Значение максимального числа max :".max(1,20,5,19)."<br>";// => 20
echo "<br>Значение минимального числа min :".min(1,20,5,19)."<br>";// => 1
?>
<h1>Строковые функции</h1>
<?php
//-- strlen() - длинна строки
// --strpos(text, "что найти", 4 с какого элемента искать); выдает числом на каком символе
$text ="This is London?";
echo "<br>Количество символов в тексте : ".strlen($text)."<br>";# => 15
echo "<br>На какой позиции \"is\" : ".strpos($text,"Lon")."<br>";# 8

if (strpos($text,"T") === false) echo "<br> Здесь нет этой буквы "."<br>";
else echo "<br> Здесь есть эта буква "."<br>";

echo "<br>".substr($text,3)."<br>"; # s is London?
echo "<br>".substr($text,3,7)."<br>"; # s is Lo
echo "<br>".str_replace("is","qwerty",$text)."<br>"; # Thqwerty qwerty London?
$text2 = "<br><b> Xaxaxa жирный шрифт</b> <br>";
echo htmlspecialchars($text2); # <br><b> Xaxaxa жирный шрифт</b> <br>
echo "<br>".strtolower($text)."<br>"; # this is london?
echo "<br>".strtoupper($text)."<br>"; # THIS IS LONDON?
echo "<br> Закодировано 123 : ".md5("123")."<br>"; # 202cb962ac59075b964b07152d234b70
echo "<br> Удаляем пробелы : ".trim("Probellll      start")."<br>"; # Probellll start
echo "<br>";

?>
<h1> Array</h1>
<?php

$arr = array(1,2,3,"qwer",5);
sort($arr);
print_r($arr); # Array ( [0] => qwer [1] => 1 [2] => 2 [3] => 3 [4] => 5 )
echo "<br>"."<br>";
rsort($arr);
print_r($arr); # Array ( [0] => 5 [1] => 3 [2] => 2 [3] => 1 [4] => qwer )
echo "<br>"."<br>";
asort($arr);
print_r($arr); # Array ( [4] => qwer [3] => 1 [2] => 2 [1] => 3 [0] => 5 )
echo "<br>"."<br>";
arsort($arr);
print_r($arr); # Array ( [0] => 5 [1] => 3 [2] => 2 [3] => 1 [4] => qwer )
echo "<br>"."<br>";
$arr2 = array( "a" => 23,"b" => 45 , "c" => 88);
ksort($arr2);
print_r($arr2); # Array ( [12] => 45 [123] => 23 )
echo "<br>"."<br>";
arsort($arr2);
print_r($arr2); # Array ( [12] => 45 [123] => 23 )
echo "<br>"."<br>";
krsort($arr2);
print_r($arr2); # Array ( [123] => 23 [12] => 45 )
echo "<br>"."<br>";
shuffle($arr);
print_r($arr); # Array ( [0] => 2 [1] => 5 [2] => qwer [3] => 1 [4] => 3 ) вперемешку
echo "<br>"."<br>";
echo in_array(2,$arr)."<br>"; # true 1
echo "<br>"."<br>";
$mas1 = array(1,3,4);
$mas2 = array(4,5,6,7,8,9);
$mas_result = array_merge($mas1,$mas2);# соединил массивы
print_r($mas_result); # Array ( [0] => 1 [1] => 3 [2] => 4 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 )
echo "<br>"."<br>";
$mas3 = array(4,5,6,7,8,9,10,22,34);
$mas4= array_slice($mas3,1,-2); #
print_r($mas4); # Array ( [0] => 5 [1] => 6 [2] => 7 [3] => 8 [4] => 9 [5] => 10 )
echo "<br>"."<br>";
$product = [];
$products = array();
var_dump($product);
var_dump($products);

?>
<h1>Datetime</h1>
<?php
$start = microtime(true);
echo time(); # 1592428844
echo "<br>"."<br>";
echo microtime(); # 0.85513200 1592428955
echo "<br>"."<br>";
echo " Время работы скрипта : ".( microtime(true) - $start )." sec."; # 5.0067901611328E-6 sec.
echo "<br>"."<br>";
echo date('Y-m-d H:i:s'); # 2020-06-17 21:29:55
echo "<br>"."<br>";
$time = mktime(12,35,23,12,7,2007);
echo date('Y-m-d H:i:s',$time); # 2007-12-07 12:35:23
echo "<br>"."<br>";
$attay = getdate($time);
print_r($attay); # Array ( [seconds] => 23 [minutes] => 35 [hours] => 12 [mday] => 7 [wday] => 5 [mon] => 12 [year] => 2007 [yday] => 340 [weekday] => Friday [month] => December [0] => 1197030923 )
echo "<br>".checkdate(2,28,2002); # 1
echo "<br>"."<br>";
?>
<h1>Работа с файлами</h1>
<?php
//$file = fopen("file.txt", "a+t");
//fwrite($file,"Hello world Im\n Rudolf");  можно заменить на file_put_contents("file.txt" и текст "HI!!!");
//fclose($file);
//$file = fopen("file.txt", "r+t");
//while ( !feof($file) ){
//     echo fread($file,1)."<br>";
//}
//fseek($file,0);
//echo fread($file,1)."<br>"; # H
//fclose($file);
//echo "<br>"."<br>";
//file_put_contents("file1.txt","HI gays my friends!!!");
//echo file_get_contents("file1.txt")."<br>"; #HI gays my friends!!!
//echo "<br>";
//echo file_exists("file.txt")."<br>"; # true 1
//echo filesize("file.txt")." байт."."<br>"; # 23 байт.
//rename("file.txt","X-files.txt"); # переименование
//unlink("X-files.txt"); # улаляем файлы
//unlink("file1.txt");

?>
<h1>Права доступа</h1>
<?php
/*
 * echo __FILE__;# где файл находиться
 * echo fileperms(__FILE__); # какие у файла права
 * chmod(__FILE__,0777); # все права доспупа этому файлу
 *
 * */
?>
<h1>phpinfo() и $_SERVER</h1>
<?php
// phpinfo(); # посмотреть информацию о моём php
echo $_SERVER["REMOTE_ADDR"]; # my ip

?>
<form name="test" action="redirect.php" method="post">
    <label> Имя :</label>
    <input type="text" name="name" placeholder="Имя"><br><br>
    <label>Email :</label>
    <input type="text" name="email" placeholder="Email"><br><br>
    <label>Сообщение :</label><br>
    <textarea name="message" id="" cols="30" rows="10"></textarea><br/>
    <input type="submit" name="done" value="Отправить">
</form>
<h1>Отправка почты</h1>
<?php
$message = "Я сам себе присылаю сообщение из phpstorm!!!";
$to = "kovalevskiy2017@outlook.com";
$from = "kovalevskiy2017@outlook.ru";
$subject = "Тема сообщения";
$subject = "=?utf8?B?".base64_encode($subject)."?=";
$headers = "From: $from\r\nReply_to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
mail($to, $subject, $message);
?>
<h1>Работа с куки $_COOKIE</h1>
<!-- setcookie("название куки"," значение куки (boolean,string,int) , время когда удалиться в секунд) куки храняться в браузере сессии на сервере-->
<?php
   # setcookie("num", 10, time() + 7);
    #echo $_COOKIE["num"];
//if (isset($_COOKIE["num"])){
//    echo "Куки есть :".$_COOKIE["num"];
//}
//else {
//    echo "Куки нет";
//}
//session_start();
//$num = (isset($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
//$num++;
////setcookie("num", $num, time() + 3);
//# session_destroy(); - удаление сессии
//$_SESSION["num"];
//echo "Пользователь обновил страницу $num раз.";
//?>
<?php
session_start();
if (isset($_POST["send"])){
    #print_r($_POST);
    $from = htmlspecialchars($_POST["from"]);
    $to = htmlspecialchars($_POST["to"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    $_SESSION["from"] = $from;
    $_SESSION["to"] = $to;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;
    $error_from = "";
    $error_to = "";
    $error_subject = "";
    $error_massage = "";
    $error = false;
    if($from == "" || !preg_match("/@/", $from)){
        $error_from = "Введите корректный email !!!";
        $error = true;
    }
    if($to == "" || !preg_match("/@/", $to)){
        $error_to = "Введите корректный email !!!";
        $error = true;
    }
    if(strlen($subject) == 0){
        $error_subject = "Введите название темы !!!";
        $error = true;
    }
    if(strlen($message) == 0){
        $error_message = "Введите текст сообщения !!!";
        $error = true;
    }
    if(!$error){
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply_to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
        mail($to, $subject, $message, $headers);
        header ("Location:success.php?send=1");

        exit; #  чтобы дальше код не выполнялся
    }
}
?>
<h1>Форма обратной связи</h1>
<form  name="feedback" action="" method="post">
    <label>От кого :</label><br>
    <input type="text" name="from" value="<?php $_SESSION["from"]?>"><br>
    <span style="color:red;"><?= $error_from ?></span><br>
    <label>Кому :</label><br>
    <input type="text" name="to" value="<?php  $_SESSION["to"]?>"><br>
    <span style="color:red;"><?= $error_to ?></span><br>
    <label>Тема :</label><br>
    <input type="text" name="subject" value="<?php  $_SESSION["subject"]?>"><br>
    <span style="color:red;"><?= $error_subject ?></span><br>
    <label>Сообщение :</label><br>
    <span style="color:red"><?php $error_message ?></span><br>
    <textarea name="message" cols="30" rows="10">
        <?php  $_SESSION["message"]?></textarea><br>
    <input type="submit" name="send" value="Отправить">
</form>
