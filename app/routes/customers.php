<?php
$app->get('/customers', function () {
    $data = R::getAll("SELECT * FROM customers");
    echo json_encode(array('customers' => $data));
});
