<?php
require_once __DIR__ . '/functions-helper.php';

$alt  = readline ("Digite sua altura:") . PHP_EOL;
$alt  = str_replace(',', '.', $alt);
$peso = readline ("Digite seu peso:" . PHP_EOL);
   
$altura = $alt * $alt;
$imc    = $peso / $altura;
$imc = number_format($peso / ($alt * $alt), 2);

    if ($imc<18.5) {
        echo "O seu IMC é:",$imc . PHP_EOL;
        echo "Você está abaixo do peso!" . PHP_EOL;
    } elseif (($imc>18.5) && ($imc<24.9)) {
    echo "O seu IMC é:",$imc . PHP_EOL;
    echo "Você está com o peso normal!" . PHP_EOL;
    }else if (($imc>25) && ($imc<29.9)) {
            echo " O seu IMC é:",$imc . PHP_EOL;
            echo "Você está com sobrepeso!" . PHP_EOL;
    } else if (($imc>30) && ($imc<34.9)) {
        echo "O seu IMC é:",$imc . PHP_EOL;
        echo "Você está com Obesidade grau 1!" . PHP_EOL;
    } else if (($imc>35) && ($imc<39.9)) {
        echo "O seu IMC é:",$imc . PHP_EOL;
        echo "Você está com Obesidade grau 2!" . PHP_EOL;
    } else if ($imc>40) {
        echo "O seu IMC é:",$imc . PHP_EOL;
        echo "Você está com Obesidade grau 3!" . PHP_EOL;
    }
