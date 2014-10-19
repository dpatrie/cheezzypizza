<?php
error_reporting(E_ALL | E_STRICT);
date_default_timezone_set('America/Montreal');

define('ROOT', dirname(__DIR__) . '/');
define('ENV', (strpos($_SERVER['HTTP_HOST'], '.local') === false) ? 'production' : 'development');

require ROOT . 'vendor/autoload.php';
$app = require_once ROOT . 'app/init.php';
$app->run();
