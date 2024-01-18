<?php
header("Content-Type: text/html; charset=utf-8");
$set1 = htmlspecialchars($_POST["set1"]);
$set2 = htmlspecialchars($_POST["set2"]);
$set3 = htmlspecialchars($_POST["set3"]);
$set4 = htmlspecialchars($_POST["set4"]);
$set5 = htmlspecialchars($_POST["set5"]);
$set6 = htmlspecialchars($_POST["set6"]);
$set7 = htmlspecialchars($_POST["set7"]);
$set8 = htmlspecialchars($_POST["set8"]);
$set9 = htmlspecialchars($_POST["set9"]);
$set10 = htmlspecialchars($_POST["set10"]);
$set11 = htmlspecialchars($_POST["set11"]);
$set12 = htmlspecialchars($_POST["set12"]);

$refferer = getenv('HTTP_REFERER');
$date=date("d.m.y"); // число.месяц.год  
$time=date("H:i"); // часы:минуты:секунды 
$myemail = "koweb93@gmail.com";

$tema = "Новая заявка. Кнопка (заказать звонок)";
$message_to_myemail = "
<br><br>
Имя: $name<br>
Телефон: $tel<br>

Источник (ссылка): $refferer
";

mail($myemail, $tema, $message_to_myemail, "From: RESTOFLOT <admin@kateweb.ru> \r\n  \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );



?>
