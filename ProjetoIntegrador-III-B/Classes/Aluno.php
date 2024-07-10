<?php

//Se cria a classe Aluno, herda da Classe Pessoa.
class Aluno extends Pessoa
{
  //Se define os atributos.
  public $cargo;
  public $matricula;
  public $notas;
  public $dataIngresso;
  public $cpf;
  public $nascimento;
  public $nome_respons;
  public $telefone;
  public $endereco;
  public $curso;
  //Função que ira exibir os dados cadastrados de Aluno.
  public function exibir_dados()
  {
    echo "Nome: " . $this->nome . "<br>";
    echo "CPF: " . $this->cpf . "<br>";
    echo "Nascimento: " . $this->nascimento . "<br>";
    echo "Telefone: " . $this->telefone . "<br>";
    echo "Endereco: " . $this->endereco . "<br>";
    echo "Matricula: " . $this->matricula . "<br>";
    echo "Curso: " . $this->curso . "<br>";
    echo "Responsavel: " . $this->nome_respons . "<br>";
    echo "Notas: " . $this->notas . "<br>";
    echo "Data de Ingresso: " . $this->dataIngresso . "<br>";
  }
}
