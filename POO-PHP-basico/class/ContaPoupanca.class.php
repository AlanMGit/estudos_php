<?php
	class ContaPoupanca extends Conta {
		
		//Variável somente para contaPoupança
		public $Aniversario;
		
		
		//Construtor
		function __construct($Agencia, $Codigo, $DataDeCricao, $Titular, $Senha, $Saldo, $Aniversario){
			
			//Chamada do método construtor da classe-pai
			parent::__construct($Agencia, $Codigo, $DataDeCricao, $Titular, $Senha, $Saldo);
			$this->Aniversario = $Aniversario;
		}
		
		//Método Retirar Sobrescrito
		function Retirar($valor) {
			if($this->Saldo >= $valor){
				//Executa método na classe-pai
				parent::Retirar($valor);
			} else {
				echo "Retirada não permitida";
				return false;
			}
			
			return true;
		}
	}
