<?php
declare(strict_types=1);

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo = 0;
    private static $numerosDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        echo "Criando uma nova conta" . PHP_EOL;

        self::$numerosDeContas++;
    }

    public function __destruct()
    {
        self::$numerosDeContas--;
    }

    /**
     * @param float $valorASacar
     */
    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;

    }

    /**
     * @param float $valorADepositar
     */
    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    /**
     * @return float
     */
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * @return string
     */
    public function repureraCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    /**
     * @return string
     */
    public function recureraNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    /**
     * @return int
     */
    public static function recuperaNumerosDeContas(): int
    {
        return self::$numerosDeContas;
    }

    /**
     * @return float
     */
    abstract protected function percentualTarifa(): float;

}
