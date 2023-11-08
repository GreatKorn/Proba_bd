<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style_card.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Users</title>
</head>
<body>

<?php
require_once 'db.php';

$res = $mysqli->query("select * from users");

echo '<p>Все пользователи: </p><ul>';
while ($row = mysqli_fetch_row($res)) {


    echo "
        <div class='card' style='width:600px'>
<div class='card-body'> 
        <div class='card-title'>Имя - {$row[1]}</div>
        <br>
        <div class='card-text'>Фамилия - {$row[2]}</div>
        <br>
        <div class='card-text'>Возраст - {$row[3]}</div>
        <a href='update.php?id=$row[0]' target='_blank'>Изменить</a>
        
        <form action='delete.php' method='post'>
        <input type='hidden' name='id' value='" . $row[0] . "' />
        <input type='submit' value='Удалить'>
         </form>
        
        
        </div>
        </div>
        ";
}

?>


</body>
</html>
