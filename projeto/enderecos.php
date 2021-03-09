<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('João Pessoa','qualquer','minha rua','88');
$outroEndereco = new Endereco('Cabedelo','centro','uma rua ai','50');


echo $umEndereco->cidade;exit;
//echo $umEndereco . PHP_EOL;
//echo $outroEndereco;

