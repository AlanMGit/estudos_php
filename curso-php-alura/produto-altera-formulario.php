<?php 
	require_once("cabecalho.php"); 
	require_once("banco-categoria.php");
	require_once("banco-produto.php");
	require_once ("class/Produto.class.php");
	
	$pro = new Produto();
	
	$pro->setId($_GET['id']);
	
	$produto = buscaProduto($conexao, $pro);
	$categorias = listaCategorias($conexao);
	
	$usado = $produto->getUsado() ? "checked='checked'" : "";
	?>			
		<h1>Alterando produto</h1>
		<form action="altera-produto.php" method="post">
			<input type="hidden" name="id" value="<?=$produto->getId()?>">
			<table class="table">
				<?php include("produto-formulario-base.php"); ?>
				<tr>
					<td>
						<button class="btn btn-primary" type="submit">Alterar</button>
					</td>
				</tr>
			</table>
		</form>
<?php include("rodape.php"); ?>			
