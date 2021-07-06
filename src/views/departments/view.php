<?php

/** @var $departmentsItem array */
?>

<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title>Изучить департамент</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/templates/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Департамент</h1>
<table>
    <tbody>
    <tr>
        <td>id</td>
        <td><?= $departmentsItem['id']; ?></td>
    </tr>
    <tr>
        <td>Имя</td>
        <td><?= $departmentsItem['name']; ?></td>
    </tr>
    <tr>
    <tr>
        <td>
            <a href="/departments">
                <button>Назад</button>
            </a>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>