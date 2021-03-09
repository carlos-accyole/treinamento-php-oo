<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\{Autenticavel, Pessoa, CPF, Endereco};

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
       parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    /**
     * @return Endereco
     */
    public function recuperaEnredeco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
