<?php
$app->get('/customers', function () {
    $data = R::getAll("SELECT * FROM customers");
    echo json_encode(array('customers' => $data));
});

$app->post('/customers', function() use ($app) {
    $customer = R::dispense('customers');
    $customer->name = $app->request->post('name');
    $id = R::store($customer);
    echo json_encode(array('id' => $id));
});
