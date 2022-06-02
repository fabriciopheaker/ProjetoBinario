<?php

require_once './vendor/autoload.php';

use app\model\CalculoModel;
use app\controllers\CalculoController;

$loader = new \Twig\Loader\FilesystemLoader('App/view/html');
$twig = new \Twig\Environment($loader, [
  'cache' => 'App/view',
  'cache' => false,
]);

$template = $twig->load('home.html');
echo $template->render();

// $template = $twig->load('template.html');
// echo $template->render();
