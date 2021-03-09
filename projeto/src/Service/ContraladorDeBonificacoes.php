<?php


namespace Alura\Banco\Service;


use Alura\Banco\Modelo\Funcionario\Funcionario;

class ContraladorDeBonificacoes
{
    private $totalBonoficacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonoficacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonoficacoes;
    }
}
