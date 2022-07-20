<?php

namespace App\model;

use Exception;

use function PHPUnit\Framework\isNull;

class CalculoModel
{
    private $numero;

    public function calculo()
    {

        $cal = $_POST;
        if (!empty($cal['numero'])) {
            $cal = $cal['numero'];
            if ($cal > 1) {
                while ($cal > 1) {
                    $this->numero[] = $cal % 2;
                    $cal = floor($cal);
                    $cal = $cal / 2;
                }
                $bin = $this->numero;
                $bin = array_reverse($bin);
                $this->numero =  $bin;
                foreach ($bin as $binario) {
                    print_r($binario);
                }
            } else {
                echo "Erro ao Inserir Numero ";
            }
        }
    }
}
