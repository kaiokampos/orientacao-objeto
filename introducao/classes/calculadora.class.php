<?php
    class Calculadora{
        public $n1;
        public $n2;

        public function __construct(){
            echo "Calcular <br/>";
        }

        public function calcularSoma() {
            return $this->n1 + $this->n2;
        }
        
        public function calcularMedia() {
            return ($this->n1 + $this->n2)/2;
        }
        
        public function calcularMultiplicacao(){
            return $this->n1 * $this->n2;
        }
    }
    
?>