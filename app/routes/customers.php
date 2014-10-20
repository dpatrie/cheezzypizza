<?php
$app->get('/customers', function () {
    $data = R::getAll("SELECT * FROM customers");
    echo json_encode(array('customers' => $data));
});

$app->post('/customers', function() use ($app) {
    $name = $app->request->post('name');
    if (empty($name)) {
        //Bad request
        $app->response->setStatus(400);
    } else {
        $customer = R::dispense('customers');
        $customer->name = $name;
        $id = R::store($customer);
        echo json_encode(array('id' => $id));
    }
});
