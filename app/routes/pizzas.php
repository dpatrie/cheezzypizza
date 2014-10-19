<?php
$app->get('/pizzas', function () {
    $data = R::getAll("SELECT * FROM pizzas JOIN customers USING(id_customer)");
    echo json_encode(array('pizzas' => $data));
});

