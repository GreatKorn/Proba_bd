<?php
if (isset($_POST["name"]) && isset($_POST["last_name"]) && isset($_POST["age"])) {

    require_once 'db.php';
    if($mysqli->connect_error){
        die("Ошибка: " . $mysqli->connect_error);
    }
    $name = $mysqli->real_escape_string($_POST["name"]);
    $last_name = $mysqli->real_escape_string($_POST["last_name"]);
    $age = $mysqli->real_escape_string($_POST["age"]);
    $sql = "INSERT INTO Users (name, last_name, age) VALUES ('$name', '$last_name', $age)";
    if($mysqli->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $mysqli->error;
    }

    $sql = "SELECT * FROM Users";
    if($result = $mysqli->query($sql)) {
        while($row = $result->fetch_array()){
            $userid = $row["id"];
            $username = $row["name"];
            $userage = $row["age"];
        }
    }

    $result->free();
}