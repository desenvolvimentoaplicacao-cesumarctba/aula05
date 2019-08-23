<?php

require_once __DIR__ . '/functions-helper.php';

// ver valores que vêm do html
echo '<h1>POST</h1>';
debug($_POST);
die;

class Imc {
	// atributos
	public $altura;
	public $peso;

	// métodos
	public function calculaImc() 
	{
		$this->imc =  "";
	}
}




