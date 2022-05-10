<?php

require_once "../../bootstrap.php";

require_once 'loader.php';

$id = $_POST['id'];

Order::destroy($id);

echo $twig->render('orderdelete.twig');