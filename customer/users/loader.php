<?php

require_once "../../vendorAutoload.php";

$loader = new \Twig\Loader\FilesystemLoader('..\/..\/resources\customer\users');

$twig = new \Twig\Environment($loader);
