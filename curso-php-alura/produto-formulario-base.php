<tr>
	<td>Nome</td>
	<td> <input class="form-control" type="text" name="nome" value="<?= $produto->getNome() ?>"></td>
</tr>
<tr>
	<td>Preço</td>
	<td><input  class="form-control" type="number" name="preco" 
		value="<?=$produto->getPreco()?>"></td>
</tr>
<tr>
	<td>Descrição</td>
	<td><textarea class="form-control" name="descricao"><?=$produto->getDescricao()?></textarea></td>
</tr>
<tr>
	<td></td>
	<td><input type="checkbox" name="usado" <?=$usado?> value="true"> Usado
</tr>
<tr>
	<td>Categoria</td>
	<td>
		<select name="categoria_id" class="form-control">
		<?php foreach($categorias as $categoria) : 
			$essaEhACategoria = $produto->Categoria->id == $categoria->id;
			$selecao = $essaEhACategoria ? "selected='selected'" : "";
			?>
			<option value="<?=$categoria->id ?>" <?=$selecao?>>
					<?=$categoria->nome ?>
			</option>
		<?php endforeach ?>
		</select>
	</td>
</tr>