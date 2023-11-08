<?php
$mysqli = new mysqli("localhost", "root", "1234");
if($mysqli->connect_error){
    die("Ошибка: " . $mysqli->connect_error);
}
echo "Подключение успешно установлено";
$mysqli->close();

?>
