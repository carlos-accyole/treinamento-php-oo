<?php

namespace Alura\Banco\Modelo;

final class Endereco
{
    use AcessoPropiedades;

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    /**
     * Endereco constructor.
     * @param string $cidade
     * @param string $bairro
     * @param string $rua
     * @param string $numero
     */
    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    /**
     * @return string
     */
    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    /**
     * @return string
     */
    public function recuperaRua(): string
    {
        return $this->rua;
    }

    /**
     * @return string
     */
    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString()
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }




}
