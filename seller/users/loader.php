<?php

// authorization start here
session_start();

if ($_SESSION['isSeller']) {
    require_once "../../vendorAutoload.php";

    $loader = new \Twig\Loader\FilesystemLoader('..\/..\/resources\seller\users');

    $twig = new \Twig\Environment($loader);
} else {
    $_SESSION['unauthorizedAccess'] = 1;
    header('Location: /customer/users/index.php');
}
