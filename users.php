<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style_card.css">
    <title>SPISOK</title>
</head>
<body>

<?php
require_once 'db.php';

$res = $mysqli->query("select * from users");

echo '<p>Все пользователи: </p><ul>';
while ($row = mysqli_fetch_row($res)) {

    echo "
        <div class='card'> 
        <div class='name'>{$row[1]}</div>
        <br>
        <div class='last_name'>{$row[2]}</div>
        <br>
        <div class='age'>{$row[3]}</div>
        <button></button>
        </div>
        ";
}

?>


</body>
</html>
