<?php

require_once "../../bootstrap.php";

require_once 'loader.php';

$id = $_POST['id'];

$product = Product::find($id);
 
$product->name = $_POST['name'];
$product->color = $_POST['color'];
$product->size = $_POST['size'];
 
$product->save();

echo $twig->render('productupdate.twig');