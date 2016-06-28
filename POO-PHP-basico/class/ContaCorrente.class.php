<?php
	class ContaCorrente extends Conta {
		public $Limite;
		
		//Método construtor Sobrescrito
		function __construct($Agencia, $Codigo, $DataDeCricao, $Titular, $Senha, $Saldo, $limite){
			//Método construtor da classe-pai
			parent::__construct($Agencia, $Codigo, $DataDeCricao, $Titular, $Senha, $Saldo);
			$this->Limite = $limite;
		}
		
		//Método Retirar sobrescrito
		function Retirar ($valor){
			//Imposto sobre a movimentação financeira
			$cpmf = 0.05;
			
			if(($this->Saldo + $this->Limite) >= $valor){
				//Executa o método da classe-pai
				parent::Retirar($valor);
				
				//Debita o Imposto
				parent::Retirar($valor * $cpmf);
			} else {
				"Retirada não permitida";
				return false;
			}
			
			//Retirada Permitida
			return true;
		}
	}
