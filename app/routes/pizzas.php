<?php
$app->get('/pizzas', function () {
    $data = R::getAll("SELECT * FROM pizzas p JOIN customers c ON p.id_customer = c.id ORDER BY p.id DESC");
    echo json_encode(array('pizzas' => $data));
});

$app->post('/pizzas', function() use ($app) {
    $id_customer = $app->request->post('id_customer');
    if (empty($id_customer)) {
        //TODO: Validate that this customer really exists....
        //Bad request
        $app->response->setStatus(400);
    } else {
        $pizza = R::dispense('pizzas');
        $pizza->id_customer = $id_customer;
        $pizza->has_tomato_sauce = ($app->request->post('has_tomato_sauce') ? 1 : 0);
        $pizza->has_cheese = ($app->request->post('has_cheese') ? 1 : 0);
        $pizza->has_pepperoni = ($app->request->post('has_pepperoni') ? 1 : 0);
        $id = R::store($pizza);
        echo json_encode(array('id' => $id));
    }
});


