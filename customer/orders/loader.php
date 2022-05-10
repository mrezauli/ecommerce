<?php

// authorization start here
session_start();

if ($_SESSION['isSeller']) {
    $_SESSION['unauthorizedAccess'] = 1;
    header('Location: /seller/users/index.php');
} else {
    require_once "../../vendorAutoload.php";

    $loader = new \Twig\Loader\FilesystemLoader('..\/..\/resources\customer\orders');

    $twig = new \Twig\Environment($loader);
}
