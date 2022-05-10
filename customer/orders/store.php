<?php

require_once "../../bootstrap.php";

require_once 'loader.php';

$order = Order::create(
    [
        'product_id' => $_POST['product_id'],
        'quantity' => $_POST['quantity'],
        'address' => $_POST['address']
    ]
);

echo $twig->render('orderstore.twig');