<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular,Conta};
use Alura\Banco\Modelo\{Endereco, CPF};

$endereco = new Endereco('João Pessoa', 'um bairoo', 'Minha rua', '88b');
$carlos = new Titular(new CPF('038.254.534-64'), 'Carlos Accyole', $endereco);
$primeiraConta = new Conta($carlos);
$primeiraConta->depositar(800);
$primeiraConta->sacar(500);

echo $primeiraConta->recureraNomeTitular() . PHP_EOL;
echo $primeiraConta->repureraCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo PHP_EOL;

$gabriela = new Titular(new CPF('123.456.789-10'), 'Gabriela Accyole', $endereco);
$segundaConta = new Conta($gabriela);
echo $segundaConta->recureraNomeTitular() . PHP_EOL;
echo $segundaConta->repureraCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL;

echo PHP_EOL;

$outroEndereço = new Endereco('Cabedelo','um bairoo','minha rua','77A');
$rafaela = new Titular(new CPF('123.456.789-99'), 'Rafaela Accyole', $outroEndereço);
$teceiraConra = new Conta($rafaela);
echo $segundaConta->recureraNomeTitular() . PHP_EOL;
echo $segundaConta->repureraCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL;

echo Conta::recuperaNumerosDeContas() . PHP_EOL;
