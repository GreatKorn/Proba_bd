<?php
if(isset($_POST["id"]))
{
    require_once 'db.php';
    if($mysqli->connect_error){
        die("Ошибка: " . $mysqli->connect_error);
    }
    $userid = $mysqli->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM Users WHERE id = '$userid'";
    if($mysqli->query($sql)){

        header("Location: users.php");
    }
    else{
        echo "Ошибка: " . $mysqli->error;
    }
}
?>