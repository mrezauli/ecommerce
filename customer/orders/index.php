<?php

require_once 'loader.php';

require_once '../../bootstrap.php';

$orderAll = Order::orderBy('id')->with('product')->get();
$orders = $orderAll->toArray();

echo $twig->render('orderindex.twig', [
    'items' => $orders
]);