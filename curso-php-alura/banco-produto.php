<?php
	require_once("conecta.php");			
	require_once('class/Produto.class.php');
	require_once('class/Categoria.class.php');
	
	function listaProdutos($conexao) {
		$produtos = array();
		$resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
		while($produto_atual = mysqli_fetch_assoc($resultado)) {
			//Importando as classes
			$produto = new Produto();
			$categoria = new Categoria();
			
			$produto->setId($produto_atual['id']);
			$categoria->nome = ($produto_atual['categoria_nome']);
			$produto->setNome($produto_atual['nome']);
			$produto->setPreco($produto_atual['preco']);
			$produto->setDescricao($produto_atual['descricao']);
			$produto->setUsado($produto_atual['usado']);
			
			//Como categoria é um conjunto de dados, passamos para a categoria o objeto categoria
			$produto->Categoria = $categoria;
			
			array_push($produtos, $produto);
		}
		return $produtos;
	}
	
	function insereProduto($conexao, Produto $produto) {
		$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$produto->getNome()}', {$produto->getPreco()}, '{$produto->getDescricao()}', {$produto->Categoria->id}, {$produto->getUsado()})";
		return mysqli_query($conexao, $query);
	}
	
	function alteraProduto($conexao, Produto $produto) {
		$query = "update produtos set nome = '{$produto->getNome()}', preco = {$produto->getPreco()}, descricao = '{$produto->getDescricao()}', categoria_id= {$produto->Categoria_id}, usado = {$produto->getUsado()} where id = '{$produto->getId()}'";
		return mysqli_query($conexao, $query);
	}
	
	function buscaProduto($conexao, Produto $pro) {
		$query = "select * from produtos where id ={$pro->getId()}";
		$resultado = mysqli_query($conexao, $query);
		$produto_selecionado = mysqli_fetch_assoc($resultado);
		
		//Retorna o produto selecionado
		$p = new Produto();
		$p->setId($produto_selecionado['id']);
		$p->setNome($produto_selecionado['nome']);
		$p->setPreco($produto_selecionado['preco']);
		$p->setDescricao($produto_selecionado['descricao']);
		$p->setUsado($produto_selecionado['usado']);
			
		return $p;
	}
	
	function removeProduto($conexao, Produto $pro) {
		$query = "delete from produtos where id = {$pro->getId()}";
		return mysqli_query($conexao, $query);
	}