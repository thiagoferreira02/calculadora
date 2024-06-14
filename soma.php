<?php
    class Soma {
        public function soma($n01, $n02) {
            return $n01 + $n02;
        }
    }

    $var = new Soma();
    $var->soma(10, 20);

    class Cliente {
        public $nome;

        public $cpf;

        public function pessoa($nome, $cpf) {
            $this->nome = $nome;
            $this->cpf = $cpf;
        }
    }

    