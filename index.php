<?php

require_once 'vendor\autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('resources\index');

$twig = new \Twig\Environment($loader);

echo $twig->render('offer.twig');