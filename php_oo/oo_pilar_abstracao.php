<?php
    // modelo
    class Funcionario {
        // atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;
        
        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        public function __get($atributo) {
            return $this->$atributo;
        }

        // getters setters
        /* public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getTelefone() {
            return $this->telefone;    
        }

        public function getNumFilhos() {
            return $this->numFilhos;
        } */

        // métodos
        public function resumirCadFunc()
        {
            return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s)";
        }
        
        public function modificarNumFilhos($numFilhos)
        {
            // afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    $y =  new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('numFilhos', 2);
    echo $y->resumirCadFunc();
    
    // echo $y->__get('nome') . " possui " . $y->__get('numFilhos') . " filho(s)"; 
    
    echo "<br />";
    
    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('numFilhos', 0);

    echo $x->resumirCadFunc();

    // echo $x->__get('nome') . " possui " . $x->__get('numFilhos') . " filho(s)"; 
?>