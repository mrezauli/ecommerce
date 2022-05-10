<?php

session_start();
require_once "../../bootstrap.php";

require_once 'loader.php';

$user = User::create(
    [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
    ]
);

//after user create s/he will sign in automatically

$_SESSION['id'] = $user->id;
$_SESSION['name'] = $user->name;
$_SESSION['email'] = $user->email;
$_SESSION['isSeller'] = $user->isSeller;
$_SESSION['isLoggedIn'] = 1;

echo $twig->render('userstore.twig', [
    'user' => $_SESSION
]);
