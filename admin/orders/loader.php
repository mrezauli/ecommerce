<?php

require_once "../../vendorAutoload.php";

$loader = new \Twig\Loader\FilesystemLoader('..\/..\/resources\admin\orders');

$twig = new \Twig\Environment($loader);