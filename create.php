<?php
if (isset($_POST["name"]) && isset($_POST["last_name"]) && isset($_POST["age"])) {

    $conn = new mysqli("localhost", "root", "1234", "demo");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $name = $conn->real_escape_string($_POST["name"]);
    $last_name = $conn->real_escape_string($_POST["last_name"]);
    $age = $conn->real_escape_string($_POST["age"]);
    $sql = "INSERT INTO Users (name, last_name, age) VALUES ('$name', '$last_name', $age)";
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}