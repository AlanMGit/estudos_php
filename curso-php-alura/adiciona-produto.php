<?php 
	require_once("cabecalho.php"); 		
	require_once("banco-produto.php"); 
	require_once("logica-usuario.php");
	
	verificaUsuario();

	$pro = new Produto();
	$categoria = new Categoria();
	
	$pro->setNome($_POST['nome']);
	$pro->setPreco($_POST['preco']);
	$pro->setDescricao($_POST['descricao']);
	
	$categoria->id = $_POST['categoria_id'];
	$pro->Categoria = $categoria;

	if(array_key_exists('usado', $_POST)) {
		$usado = "true";
	} else {
		$usado = "false";
	}
	$pro->setUsado($usado);
	
	if(insereProduto($conexao, $pro)) { ?>
		<p class="text-success">O produto <?= $pro->getNome() ?>, <?= $pro->getPreco() ?> foi adicionado.</p>
	<?php } else {
		$msg = mysqli_error($conexao);
	?>
		<p class="text-danger">O produto <?= $pro->getNome() ?> não foi adicionado: <?= $msg?></p>
	<?php
	}
	?>
	
	<?php include("rodape.php"); ?>			
