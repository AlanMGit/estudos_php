<?php 
	require_once("cabecalho.php"); 		
 	require_once("banco-produto.php"); 
 	require_once("logica-usuario.php");
 	require_once("class/Produto.class.php");
	
 	$produto = new Produto();
 	
 	$produto->setId($_POST['id']);
 	
	removeProduto($conexao, $produto);
	$_SESSION["success"] = "Produto removido com sucesso.";
	header("Location: produto-lista.php");
	die();
 ?>
 