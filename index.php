<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD</title>
</head>
<body>

<div class="container">
    <h3>Создание нового пользователя</h3>
    <form action="create.php" method="post">
        <p>Имя юзера: <input type="text" name="name" /></p>
        <p>Фамилия юзера: <input type="text" name="last_name" /></p>
        <p>Возраст юзера: <input type="number" name="age" /></p>
        <input type="submit" value="Сохранить">
    </form>
</div>

</body>
</html>