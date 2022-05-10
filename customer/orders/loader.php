<?php

require_once "../../vendorAutoload.php";

$loader = new \Twig\Loader\FilesystemLoader('..\/..\/resources\customer\orders');

$twig = new \Twig\Environment($loader);
