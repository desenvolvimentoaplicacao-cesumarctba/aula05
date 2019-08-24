<?php

require_once __DIR__ . '/functions-helper.php';

// ver valores que vêm do html
echo '<h1>POST</h1>';
debug($_POST);

// calculo IMC
$altura = $_POST['altura'];
$peso   = $_POST['peso'];

$altura = str_replace(',', '.', $altura);
$peso	= str_replace(',', '.', $peso);

$imc 	= $peso / ($altura * $altura);
$imc    = number_format($imc, 2);

echo "Valor do IMC: $imc";

echo '<hr><h1>GET</h1>';
debug($_GET);