<?php

//Se cria a classe Aluno, herda da Classe Funcionario.
class Funcionario extends Pessoa
{

  //Se define os atributos.
  public $cargo;
  private $salario;
  public $dataIngresso;
  public $cpf;

  //Função que ira exibir os dados cadastrados de Funcionario.
  public function exibir_dados()
  {
    echo "Nome: " . $this->nome . "<br>";
    echo "CPF: " . $this->cpf . "<br>";
    echo "Data de Nascimento: " . $this->nascimento . "<br>";
    echo "Cargo: " . $this->cargo . "<br>";
    echo "Salário: " . $this->salario . "<br>";
    echo "Data de Ingresso: " . $this->dataIngresso . "<br>";
  }
}
