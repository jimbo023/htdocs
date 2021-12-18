<?php
 
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
 
 
require_once "../vendor/autoload.php";
 
$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);
 
$template = $twig->load('index.html.twig');
 
$images = [
   'images/image1.jpg',
   'images/image2.jpg',
   'images/image3.jpg',
   'images/image4.jpg',
];
 
echo $template->render([
   'images'=>$images,
]);
