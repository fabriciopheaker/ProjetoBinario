<?php

namespace App\Controllers;

require_once 'app/model/CalculoModel.php';



class CalculoController
{
  private $numero;

  function getNumero()
  {
    $t = new \app\Model\CalculoModel();
    $t->calculo();
  }
}
