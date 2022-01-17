<?php
    class Funcionarios
    {
        private $funcionarios;

        public function __construct()
        {
           $this->funcionarios  = [
               ["cpf"  => 1,   "nome" => "João",     "salario" => 3000],
               ["cpf"  => 2,   "nome" => "pedro",    "salario" => 1000]
            ];
        }
        public function all()
        {
            return  $this->funcionarios;
        }
        public function findCPF($cpf)
        {
            foreach ($this->funcionarios as  $func) {
                if ($func['cpf'] == $cpf){
                    return  $func; // "Nome: " .$func['nome'] . " Salario: " . number_format($func['salario'],2)."\n" ;
                }
            }
        }
    }
?>