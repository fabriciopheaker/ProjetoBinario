<?php

require_once './vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('App/view/html');
$twig = new \Twig\Environment($loader, [
  'cache' => 'App/view',
  'cache' => false,
]);

$template = $twig->load('template.html');
echo $template->render();

// $template = $twig->load('template.html');
// echo $template->render();
