<?php
    class Apolice{
        private $atributos = array('nome', 'idade', 'premio');

        public function __construct($nome, $idade, $premio){
            $this->$atributos['nome'] = $nome;
            $this->$atributos['idade'] = $idade;
            $this->$atributos['premio'] = $premio;
        }

        public function __get($atr){
            return $this->atributos[$atr];
        }

        public function __set($atr, $valor){
            $this->atributos[$atr] = $valor;
        }

        public function imprimir(){
            echo "Nome: " . $this->nome . "<br>Idade: " . $this->idade . "<br>Premio: " . $this->premio
        }

        public function calcularPremioApolice(){
            if($this->idade > 18 $$ $this->idade <= 25){
                $this->premio += ($this->premio * 20)/100;
            }
            elseif($this->idade > 25 $$ $this->idade <= 36){
                $this->premio += ($this->premio * 15)/100;
            }
            elseif($this->idade > 36){
                $this->premio += ($this->premio * 10)/100;
            }
        }

        public function oferecerDesconto($cidade){
            if($cidade == "Curitiba"){
                $this->premio -= $this->premio * 0.2;
            }
            elseif($cidade == "Rio de Janeiro"){
                $this->premio -= $this->premio * 0.15;
            }
            elseif($cidade == "São Paulo"){
                $this->premio -= $this->premio * 0.1;
            }
            elseif($cidade == "Belo Horizonte"){
                $this->premio -= $this->premio * 0.05;
            }
        }

        
    }

?>