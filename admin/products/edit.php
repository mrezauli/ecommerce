<?php

require_once 'loader.php';

require_once "../../bootstrap.php";

$id = $_POST['id'];

$products = Product::all();
$product = $products->find($id)->toArray();

echo $twig->render('productedit.twig', [
    'item' => $product
]);
