<?php

require_once 'autoload.php';

use Alura\Banco\Service\ContraladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, EditorVideo, Gerente, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'Carlos Accyole',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Gabriela Accyole',
        new CPF('123.456.987-10'),
    3000
);

$umDiretor = new Diretor(
    'Rafaela Accyole',
    new CPF('123.654.987-55'),
    '5000'
);

$umEditor = new EditorVideo(
  'Jordania Lucena',
  new CPF('056.424.584-42'),
  '1500'
);

$controlador = new ContraladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();


