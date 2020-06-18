<?php
//    print_r($_POST);
//    echo $_POST["name"]; // Array ( [name] => Rudolf [email] => kivin@hhjd.com [message] => Proverkahtvb [done] => Отправить ) Rudolf

    if ($_POST["name"] == ""){
        echo "Введите имя. <a href ='index.php'>Исправить</a>";
    }
    else {
        //вернуть на туже страницу
        header("Location:index.php");
    }
?>