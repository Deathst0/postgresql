<?php
/**
 * @var $departmentsList array
 */
?>

<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title>Департаменты из Postgresql</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/templates/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Список Департаментов</h1>
<table>
    <thead>
    <tr>
        <td>id</td>
        <td>Имя</td>
        <td>Карточка</td>
        <td>
            <a href="/department/create"><button>Создать</button></a>
        </td>
        <td>
            <a href="/users"><button>Вернуться к пользователям</button></a>
        </td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($departmentsList as $departmentsItem) {?>
        <tr>
            <td><?= $departmentsItem['id']; ?></td>
            <td><?= $departmentsItem['name']; ?></td>
            <td>
                <a href="/department/view/<?= $departmentsItem['id']; ?>"><button>Изучить</button></a>
            </td>
            <td>
                <a href="/department/edit/<?= $departmentsItem['id']; ?>"><button>Редактировать</button></a>
            </td>

            <td>
                <a href="/department/delete/<?= $departmentsItem['id']; ?>"><button>Удалить</button></a>
            </td>
        </tr>
    <?php } ?>

    </tbody>
</table>
</body>
</html>