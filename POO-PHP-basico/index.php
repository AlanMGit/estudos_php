<?php
	//Caregando as classes
	include_once 'class/Pessoa.class.php';
	include_once 'class/Conta.class.php';
	include_once 'class/ContaCorrente.class.php';
	include_once 'class/ContaPoupanca.class.php';
	
	//Criando o objeto carlos
	$carlos = new Pessoa(10, "Carlos da Silva", 1.85, 22, "10/04/2015", "Ensino Medio", 650.00);
	
	echo "Manipulando o Objeto {$carlos->Nome} <br>\n";
	
	//Criando o objeto $conta_carlos
	$contas = Array();
	$contas[0] = new ContaCorrente(6677, "CC.1234.56", "10.07.2002", $carlos, 9876, 500.00, 200.00);
	$contas[1] = new ContaPoupanca(6678, "PP.1234.56", "10.07.2002", $carlos, 9876, 500.00, "10/07");
	
	//Percorre as contas
	foreach ($contas as $conta){
		echo "Manipulando a conta $conta->Agencia de: {$conta->Titular->Nome}<br>";
		echo "O Saldo atual da $conta->Agencia de: {$conta->getSaldo()}<br>";
		$conta->Depositar(200);
		echo "O Saldo atual da $conta->Agencia de: {$conta->getSaldo()}<br>";
		$conta->Retirar(100);
		echo "O Saldo atual da $conta->Agencia de: {$conta->getSaldo()}<br>";
		echo "<br>";
		echo "<br>";
	}
