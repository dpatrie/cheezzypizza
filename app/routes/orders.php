<?php
$app->get('/', function() use($app) {
    $app->redirect('/orders');
});

$app->get('/orders', function () use($app) {
    $app->response->headers->set('Content-Type', 'text/html');
    require ROOT . 'app/views/orders.php';
});
