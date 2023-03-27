<?php

    class Veiculo {
        public $placa = null;
        public $cor =  null;
        
        function acelerar () {
            echo 'Acelerar';
        }

        function freiar() {
            echo 'Freiar';
        }
    }

    class Carro extends Veiculo {
        public $teto_solar = true;

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar () {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posição volante';
        }
    }

    class Moto extends Veiculo {
        public $contraPesoGuidao = true;   

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinhar () {
            echo 'Empinhar';
        }   
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122', 'Preta');

    echo '<pre>';
    print_r($carro);
    echo '<br />';
    print_r($moto);
    echo '</pre>';
    echo '<hr />';

    $carro->abrirTetoSolar();
    echo '<br />';
    $carro->acelerar();
    echo '<br />';
    $carro->freiar();

    echo '<hr />';  

    $moto->empinhar();
    echo '<br />';
    $moto->acelerar();
    echo '<br />';
    $moto->freiar();
?>