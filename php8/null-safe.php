<?php

/* $objeto = null;

if(isset($objeto) && $objeto !== null) {
    $objeto->total();
}

$objeto?->total(); */
class Funcionario {
    public function __construct(
        private string $nome = "",
        private float $salario = 0,
    ){}

    public function info() {
        return "Nome: $this->nome - Salário $this->salario";
    }
}

class FolhaPagamento {
    private $funcionarios = null;

    public function __construct(){
        $this->funcionarios = [
            new Funcionario('Maria', 12000),
            new Funcionario('Fernando', 9200),
            new Funcionario('Ana', 5600),
            new Funcionario('Paulo', 7200),
        ];
    }

    public function getTotalFuncionarios() {
        return count($this->funcionarios);
    }

    public function getFuncionario() {
        return $this->funcionarios[9];
    }
}

$folhaPagamento = new FolhaPagamento();
// $folhaPagamento = null;

// if($folhaPagamento !== null && isset($folhaPagamento))

echo $folhaPagamento?->getTotalFuncionarios();
echo "<br>";
print_r($folhaPagamento?->getFuncionario()?->info());
?>