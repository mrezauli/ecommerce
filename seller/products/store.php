<?php

require_once "../../bootstrap.php";

require_once 'loader.php';

$customer = Product::create(
    [
        'name' => $_POST['name'],
        'color' => $_POST['color'],
        'size' => $_POST['size']
    ]
);

echo $twig->render('productstore.twig');
