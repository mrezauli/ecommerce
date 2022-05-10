<?php

require_once 'loader.php';

require_once '../../bootstrap.php';

$productAll = Product::all();
$products = $productAll->toArray();

echo $twig->render('productindex.twig', [
    'items' => $products
]);