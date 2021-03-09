<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{

    use AcessoPropiedades;

    protected string $nome;
    private CPF $cpf;

    /**
     * Pessoa constructor.
     * @param string $nome
     * @param CPF $cpf
     */
    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public function recuperaNome(): string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    /**
     * @param string $nomeTitular
     */
    final function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter no mínimo 5 caracteres" . PHP_EOL;
        }
    }




}
