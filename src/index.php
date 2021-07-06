<?php

//Общие настройки
    //Отображение ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Подключение необходимых файлов
define('ROOT', dirname(__FILE__));

include ROOT . '/config/autoloader.php';

//Вызов Router
$router = new Router();
$router->run();