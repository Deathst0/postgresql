<?php
/**
 * @var $usersList array
 */
?>

<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title>Пользователи из Postgresql</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/templates/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Список пользователей</h1>
<br>
<br>
<table>
    <thead>
    <tr>
        <td>id</td>
        <td>Имя</td>
        <td>Департамент</td>
        <td>День Рождения</td>
        <td>Дата регистрации</td>
        <td>Карточка</td>
        <td>
            <a href="/user/create"><button>Создать</button></a>
        </td>
        <td>
        <a href="/departments"><button>Перейти к списку департаментов</button></a>
        </td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($usersList as $userItem) {?>
        <tr>
            <td><?= $userItem['id']; ?></td>
            <td><?= $userItem['name']; ?></td>
            <td><a href="/user/filter/<?= $userItem['department_id']; ?>"><?= $userItem['department_name']; ?></a></td>
            <td><?= $userItem['birthday']; ?></td>
            <td><?= $userItem['created_at']; ?></td>
            <td>
                <a href="/user/view/<?= $userItem['id']; ?>"><button>Изучить</button></a>
            </td>
            <td>
                <a href="/user/edit/<?= $userItem['id']; ?>"><button>Редактировать</button></a>
            </td>

            <td>
                <a href="/user/delete/<?= $userItem['id']; ?>"><button>Удалить</button></a>
            </td>
        </tr>
    <?php } ?>

    </tbody>
</table>
</body>
</html>