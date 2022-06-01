<?php

namespace App\model;

class CalculoModel 
{
private $numero;


// vai capturar o numero que o usuario lançou no form.

function getNumero()
{
    echo ( $this->$numero = $_POST["numero"] );
  
}
}