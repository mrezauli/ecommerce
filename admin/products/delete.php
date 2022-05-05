<?php

require_once "../../bootstrap.php";

require_once 'loader.php';

$id = $_POST['id'];

Product::destroy($id);

echo $twig->render('productdelete.twig');