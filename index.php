<?php

require_once './vendor/autoload.php';

$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Hello {{ name }} {{ saludo }}!',
]);
$twig = new \Twig\Environment($loader);

/*
$params = [
    'name' => 'Franklin',
    'saludo' => 'bienvenido a twig desde params'
];

//Primer ECHO echo $twig->render('index', ['name' => 'Franklin', 'saludo' => 'bienvenido a twig']);

echo $twig->render('index', $params );
*/

// METODO COMPACT PHP

$name = 'Franco Salcedo';
$saludo = 'desde metodo compact ';

echo $twig->render('index' , compact('name' , 'saludo'));
