<?php
    class Computador{
        private $marca;
        private $cor;
        private $modelo;
        private $numero;
        private $preco;

        public function getMarca(){
            return $this->marca;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getCor(){
            return $this->cor;
        }

        public function setCor($cor){
            $this->cor = $cor;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getNumero(){
            return $this->numero;
        }

        public function setNumero($numero){
            $this->numero = $numero;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function setPreco($preco){
            if($preco > 0 || $preço = NULL){
                $this->preco = $preco;
            }
            else{
                echo "Valor do preço inválido";
            }
        }

        public function calcularValor(){
            if($this->marca == "HP"){
                $this->preco *= 1.30;
            }
            elseif($this->marca == "IBM"){
                $this->preco *= 1.50;
            }
            else{
                $this->preco *= 1;
            }
        }

        public function imprimir(){
            echo "Marca: " . $this->marca . "<br>Cor: " . $this->cor . "<br>Modelo: "  . $this->modelo . "<br>Número: " . $this->numero . "<br>Preço: " . $this->preco;
        }
    }

?>