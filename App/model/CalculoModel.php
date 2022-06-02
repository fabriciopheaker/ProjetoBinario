<?php

namespace App\model;

use app\controllers\CalculoController;

class CalculoModel
{
    private $numero;

    // vai capturar o numero que o usuario lançou no form.

    function setNumero($param)
    {
        $this->numero = $param;
    }
    function getNumero()
    {
        echo $this->numero;
    }
}

$cc = new CalculoModel();
$cc->getNumero();
