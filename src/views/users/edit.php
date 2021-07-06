<?php

/** @var $departmentsList array */
/** @var $usersItem array */

?>

<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title>Редактировать пользователя</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/templates/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Редактировать пользователя</h1>
<form action="" method="post">
    <label for="name">Имя:</label>
    <input type="text" name="name" value="<?=$usersItem['name'];?>">
    <br>
    <br>
    <label for="department">Департамент:</label>
    <select name="department_id">
        <?php foreach($departmentsList as $department) :?>
            <option value="<?=$department['id']?>"
                <?php if ($usersItem['department_name'] == $department['name']):?>
                selected
                <?php endif; ?>
            >
                <?=$department['name']?>
            </option>
        <?php endforeach; ?>
    </select>
    <!--    <input type="number" name="department_id" value="--><?//=$usersItem['department_name'];?><!--" min="1" max="5">-->
    <br>
    <br>
    <label for="birthday">День Рождения:</label>
    <input type="date" name="birthday" value="<?=$usersItem['birthday'];?>">
    <br>
    <br>
    <label for="created_at">Дата регистрации:</label>
    <input type="date" name="created_at" value="<?=$usersItem['created_at'];?>">
    <br>
    <br>
    <button class="col-md-2" type="submit">Редактировать</button>
    <a href="/users"><button class="col-md-2">Назад</button></a>
</form>
</body>
</html>