<?php

require_once "../../vendorAutoload.php";

$loader = new \Twig\Loader\FilesystemLoader('..\/..\/resources\customer\products');

$twig = new \Twig\Environment($loader);
