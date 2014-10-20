<?php
$app = new \Slim\Slim();
$app->setName('CheezzyPizza');

foreach(glob(ROOT . '/app/routes/*.php') as $route) {
    require $route;
}

//Init readbean
if (ENV == 'production') {
    $hostname = $_ENV['OPENSHIFT_MYSQL_DB_HOST'];
    $port = $_ENV['$OPENSHIFT_MYSQL_DB_PORT'];
    $user = 'adminV9CvWnL';
    $pass = 'pinEt5gVc18f';
} else {
    $hostname = 'localhost';
    $port = 3306;
    $user = 'root';
    $pass = '';
}
R::setup("mysql:host={$hostname};port={$port};dbname=cheezzypizza", $user,$pass);
R::freeze(true); //Ensure RedBean won't mess with the schema


$app->response->headers->set('Content-Type', 'application/json');

return $app;
