<?php
$app->get('/', function() use($app) {
    $app->redirect('/orders');
});

$app->get('/orders', function () {
    require ROOT . 'app/views/orders.php';
});
