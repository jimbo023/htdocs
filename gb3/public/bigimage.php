<?php
 
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
 
 
require_once "../vendor/autoload.php";
 
$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);
 
$template = $twig->load('bigimage.html.twig');
 
if(isset($_GET)){
   $test = $_GET['image'];
  
   echo $template->render([
       'image'=>$test,
   ]);
  
};
