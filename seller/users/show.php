<?php

require_once '../../bootstrap.php';

require_once "../../vendorAutoload.php";

$loader = new \Twig\Loader\FilesystemLoader('..\/..\/resources\seller\users');

$twig = new \Twig\Environment($loader);


echo $twig->render('usershow.twig');