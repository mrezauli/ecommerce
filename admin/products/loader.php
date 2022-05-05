<?php

require_once "../../vendorAutoload.php";

$loader = new \Twig\Loader\FilesystemLoader('..\/..\/resources\admin\products');

$twig = new \Twig\Environment($loader);