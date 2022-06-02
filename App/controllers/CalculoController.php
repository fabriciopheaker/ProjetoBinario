<?php

namespace app\controllers;

use app\model\CalculoModel;

class CalculoController
{
  private $numero;

  function getNumero()
  {
    $param = $this->numero = $_POST["numero"];

    $cm = new CalculoModel();
    $cm->setNumero($param);
    return $this->numero;
  }
}

$cc = new CalculoController();
echo $cc->getNumero();
