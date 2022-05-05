<?php

require_once "../../vendorAutoload.php";

$loader = new \Twig\Loader\FilesystemLoader('..\/..\/resources\user\products');

$twig = new \Twig\Environment($loader);