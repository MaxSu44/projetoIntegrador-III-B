<?php
abstract class Pessoa
{

    public $nome;
    private $cpf;
    public $nascimento;
    private $endereco;
    private $telefone;

    ///função Nome
    public function get_nome()
    {
        return $this->nome;
    }

    ///função CPF
    private function get_cpf()
    {
        return $this->cpf;
    }

    ///função data de Nascimento
    public function get_nascimento()
    {
        return $this->nascimento;
    }

    ///função Endereco
    private function get_endereço()
    {
        return $this->endereco;
    }

    ///função Telefone
    private function get_telefone()
    {
        return $this->telefone;
    }
    abstract function exibir_dados();
}
