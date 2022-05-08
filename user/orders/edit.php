<?php

require_once 'loader.php';

require_once "../../bootstrap.php";

$id = $_POST['id'];

$orders = Order::orderBy('id')->with('product')->get();
$order = $orders->find($id)->toArray();

echo $twig->render('orderedit.twig', [
    'item' => $order
]);
