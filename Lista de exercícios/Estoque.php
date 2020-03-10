<?php
    class Estoque{
        private $atributos = array('nome', 'valor', 'quant');
        
        public function __construct($nome, $valor, $quant){
            $this->nome = $nome;
            $this->valor = $valor;
            $this->quant = $quant;
        }

        public function __get($atr){
            return $this->atributos[$atr];
        }

        public function __set($atr, $valor){
            $this->atributos[$atr] = $valor;
        }

        public function VerificarDisponibilidade($quantidade){
            if($this->quant >= $quantidade){
                return 1;
            }
            else{
                return 0;
            }
        }

        public function RemoverProdutos($quantidade){
            if(VerificarDisponibilidade($quantidade) = 1){
                $this->quant -= $quantidade;
            }
        }
    }
?>