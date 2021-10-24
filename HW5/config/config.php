<?php

// Файл констант.
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');
define('IMG_DIR', '/img/');
define('STYLE_DIR', '/css/');

/* DB config */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'shop');

// Тут же подключим основные функции-модули нашего приложения.
require_once "../engine/functions.php";
require_once "../engine/db.php";
require_once "../engine/catalog.php";
require_once "../engine/gallery.php";
require_once "../engine/news.php";
require_once "../engine/log.php";