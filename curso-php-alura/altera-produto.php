<?php require_once("cabecalho.php"); 		
require_once("banco-produto.php"); 
require_once 'class/Produto.class.php';

$pro = new Produto();

$pro->setId($_POST['id']);
$pro->setNome($_POST['nome']);
$pro->setPreco($_POST['preco']);
$pro->setDescricao($_POST['descricao']);
$pro->Categoria_id = $_POST['categoria_id'];

if(array_key_exists('usado', $_POST)) {
	$usado = "true";
} else {
	$usado = "false";
}

$pro->setUsado($usado);

if(alteraProduto($conexao, $pro)) { ?>
	<p class="text-success">O produto <?= $pro->getnome() ?>, <?= $pro->getPreco() ?> foi alterado.</p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $pro->getnome() ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>			
