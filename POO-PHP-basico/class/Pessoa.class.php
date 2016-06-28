<?php
	class Pessoa {
		public $Codigo;
		public $Nome;
		public $Altura;
		public $Idade;
		public $Nascimento;
		public $Escolaridade;
		public $Salario;
		
		
		//M�todo Construtor
		function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario) {
			$this->Codigo = $Codigo;
			$this->Nome = $Nome;
			$this->Altura = $Altura;
			$this->Idade = $Idade;
			$this->Nascimento = $Nascimento;
			$this->Escolaridade = $Escolaridade;
			$this->Salario = $Salario;
		}
		//M�todo Crescer
		function Crescer ($centimetros){
			$this->Altura += $centimetros;
		}
		
		//M�todo Formar
		function Formar ($titulacao){
			$this->Escolaridade = $titulacao;
		}
		
		//M�todo Envelhecer
		function Envelhecer($anos){
			$this->Idade += $anos;
		}
		
	}