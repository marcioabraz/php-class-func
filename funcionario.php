<?php 
//include('Calculadora.php');
include('Funcionarios.php');

$cpf = $_POST["cpf"];

$funcionarios = new Funcionarios();
$func = $funcionarios->findCPF($cpf);

echo 'Nome Funcionário: ' .$func['nome'] . ' Salário: ' .$func['salario'];
?>


