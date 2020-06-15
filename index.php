<!doctype html>
<html lang="ry">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Hello World!!!!</p>
<?php
echo "My first PHP script!";
?>
<?php
 echo '<br> ',2+2; // => 4
$number1 = 10;
$_number = 10;
$num_result =$number1 * $_number;
$bool = true; // => 1
echo "<br>Это число : $num_result";
 # Comment 1
// Comment 2
/*
Comment 3
Comment 4
Comment 5
*/
# Запишем константу
define("PI",3.14);
echo '<br>',PI;
echo defined("PI"); // => 1
# math $i++
 $str_1 = "first";
 $str_2 = "second";
 echo $str_1 ." ". $str_2; // firstsecond  .- конкенация  ." ". => first second
$input =" <input type=\"text\" /> <input type=\"submit\" value=\"Отправить\"/>";
echo $input;
$x = 1;
$y = 2;
$z = 1;
$bool_1 = $x == $y; // false " "
$bool_2 = $x == $z; // true 1
$bool_3 = $x != $y; // true 1
$bool_4 = !($x == $y); // true 1
$bool_5 = $x == $y || $x < $y; // true 1
$bool_6 = $x == $z && $x > $y; // false " "
$bool_7 = $x == $z ^ $x > $y; // true ^ false ->true ;false ^ false -> false
if ($x == $y || $x < $y){
    echo "Hello";
}
else if ($x != $y && $x <= $y){
echo "hi";
}
else{
    echo "Goodbay";
}
$x == $y ? $str = "Yes" : $str = "No"; // тернарный оператор
$lab = 12;
switch ($lab){
    case 12: echo "Good@!";
    break;
    default : echo "No_good";
}
?>

</body>
</html>

