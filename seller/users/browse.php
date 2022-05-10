<?php

require_once '../../bootstrap.php';
require_once 'loader.php';

$signInEmail = $_POST['email'];
$signInPassword = $_POST['password'];

$user = User::where('email', $signInEmail)->first();

if ($user) {
    if (password_verify($signInPassword, $user->password)) {

        $_SESSION['id'] = $user->id;
        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        $_SESSION['password'] = $user->password;
        $_SESSION['isSeller'] = $user->isSeller;
        $_SESSION['isLoggedIn'] = 1;

        header('Location: /seller/users/index.php');
    } else {
        header('Location: /seller/users/show.php');
    }
} else {
    header('Location: /seller/users/show.php');
}
