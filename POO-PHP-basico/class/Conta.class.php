<?php
	class Conta {
		public $Agencia;
		public $Codigo;
		public $DataDeCriacao;
		public $Titular;
		public $Senha;
		public $Saldo;
		public $Cancelada;
		
		//Construtor
		function __construct($Agencia, $Codigo, $DataDeCricao, $Titular, $Senha, $Saldo){
			$this->Agencia = $Agencia;
			$this->Codigo = $Codigo;
			$this->DataDeCricao = $DataDeCricao;
			$this->Titular = $Titular;
			$this->Senha = $Senha;
			$this->Saldo = $Saldo;			
		}
				
		//M�todo Retirar
		function Retirar ($quantia){
				$this->Saldo -= $quantia;
		}
		
		//M�todo Depositar
		function Depositar ($vDeposito) {
			if ($vDeposito > 0){
				$this->Saldo += $vDeposito;
			}
		}
		
		//M�todo Obter Saldo
		function getSaldo (){
			return $this->Saldo;
		}
		
	}