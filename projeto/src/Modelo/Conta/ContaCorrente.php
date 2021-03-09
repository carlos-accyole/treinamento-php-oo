<?php


namespace Alura\Banco\Modelo\Conta;


class ContaCorrente extends Conta
{

    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    /**
     * @param Conta $contaDestino
     * @param float $valorATranferir
     */
    public function transferir(Conta $contaDestino, float $valorATranferir): void
    {
        if ($valorATranferir > $this->saldo) {
            echo  "Saldo insdisponível";
            return;
        }

        $this->sacar($valorATranferir);
        $contaDestino->depositar($valorATranferir);
    }
}
