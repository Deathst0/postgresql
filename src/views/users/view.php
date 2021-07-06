<?php

/** @var $usersItem array */
?>

<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title>Изучить пользователя</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/templates/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Имя сотрудника</h1>
<table>
    <tbody>
    <tr>
        <td>id</td>
        <td><?= $usersItem['id']; ?></td>
    </tr>
    <tr>
        <td>Имя</td>
        <td><?= $usersItem['name']; ?></td>
    </tr>
    <tr>
        <td>Департамент</td>
        <td><?= $usersItem['department_name']; ?></td>
    </tr>
    <tr>
        <td>День Рождения</td>
        <td><?= $usersItem['birthday']; ?></td>
    </tr>
    <tr>
        <td>Дата регистрации</td>
        <td><?= $usersItem['created_at']; ?></td>
    </tr>
    <tr>
        <td>
            <a href="/users">
                <button>Назад</button>
            </a>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>