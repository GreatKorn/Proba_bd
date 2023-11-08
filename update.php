<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user</title>
</head>
<body>
<?php
$id = $_REQUEST['id'];

require_once 'db.php';

$res = $mysqli->query("select * from users where id = $id");
$arrRes = $res->fetch_assoc();

?>
<form action="update_handler.php" method="post">
    Имя: <br> <input type="text" name="name" value="<?=$arrRes['name']?>"> <br>
    Фамилия: <br> <input type="text" name="last_name" value="<?=$arrRes['last_name']?>"> <br>
    Возраст: <br> <input type="text" name="age" value="<?=$arrRes['age']?>"> <br>
    <input type="hidden" name="id" value="<?=$arrRes['id']?>">
    <br><br>
    <input type="submit" value="Сохранить">
</form>
</body>
</html>