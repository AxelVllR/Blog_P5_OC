<?php
require '../vendor/autoload.php';

session_start();
//session_destroy();
ini_set('display_errors', 1);

if(!empty((new App\Globals\Session())->getAll()) && (new \App\Globals\Session())->get('token') == null) {
    $session = new \App\Globals\Session();
    $session->set([
        "token" => bin2hex(openssl_random_pseudo_bytes(6))
    ]);
}

$request = $_SERVER['REQUEST_URI'];
$exp = explode("?", $request);
//var_dump($request);
$app = new \App\App;

// echo $twig->render('test.html.twig');

$app->run($exp[0]);