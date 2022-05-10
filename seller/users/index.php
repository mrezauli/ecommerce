<?php

require_once 'loader.php';

require_once '../../bootstrap.php';

echo $twig->render('userindex.twig', [
    'user' => $_SESSION
]);