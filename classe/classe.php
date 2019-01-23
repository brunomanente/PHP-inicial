<?php

	class Pessoa{
		//atributos
		private $idade;
		private $nome;
		private $endereco;
		
		//metodos set
		function setIdade($i){
			$this->idade = $i;
		}
		function setNome($n){
			$this->nome = $n;
		}
		function setEndereco($e){
			$this->endereco = $e;
		}
		
		//metodo get
		function getIdade(){
			return $this->idade;
		}
		function getNome(){
			return $this->nome;
		}
		function getEndereco(){
			return $this->endereco;
		}
	}


?>