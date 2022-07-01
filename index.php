<?php

require_once './vendor/autoload.php';

//version 1: new Twig_Loader_Filesystem
$loader = new \Twig\Loader\FilesystemLoader('./views');

//version 1: new Twig_Environment
$twig = new \Twig\Environment($loader, []);


$name = 'Franco';
$saludo = 'te damos la bienvenida ';
$vista = 'Estamos renderizando la vista desde otro archivo';


echo $twig->render('index.twig' , compact('name' , 'saludo' , 'vista'));
