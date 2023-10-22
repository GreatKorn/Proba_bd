<?php
$conn = new mysqli("localhost", "root", "1234");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
echo "Подключение успешно установлено";
$conn->close();

?>

