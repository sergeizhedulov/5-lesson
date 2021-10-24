<?php

// Точка входа в приложение, сюда мы попадаем каждый раз когда загружаем страницу.

// todo Сделайте галерею из двух страниц.

// Первым делом подключим файл с константами настроек.
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/config.php";

$url_array = explode("/", $_SERVER['REQUEST_URI']);

// todo Сделайте автозагрузку дампа БД.
dumpLoad();

// Читаем параметр page из url, чтобы определить, какую страницу-шаблон хочет увидеть пользователь, по умолчанию
// это будет index.
if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
}

$params = prepareVariables($page);

// Вызываем рендер, и передаем в него имя шаблона и массив подстановок.
echo render($page, $params);