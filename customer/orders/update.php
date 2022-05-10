<?php

require_once "../../bootstrap.php";

require_once 'loader.php';

$id = $_POST['id'];

$order = Order::find($id);
 
$order->quantity = $_POST['quantity'];
$order->address = $_POST['address'];
$order->save();

echo $twig->render('orderupdate.twig');