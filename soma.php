<?php
    class Soma {
        public function soma($n01, $n02) {
            return $n01 + $n02;
        }
    }

    $var = new Soma();
    $var->soma(10, 20);