<?php
session_start();

require_once 'loader.php';

require_once '../../bootstrap.php';

// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo $twig->render('usershow.twig');