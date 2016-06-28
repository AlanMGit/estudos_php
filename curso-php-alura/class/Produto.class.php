<?php
class Produto {
		private $Id;
		private $Nome;
		private $Preco;
		private $Descricao;
		public $Categoria;
		private $Usado;
		
		
		/*
		 * M�todo de desconto 
		 * $valor = 0.05 -> Caso n�o seja passado nenhum valor de desconto, por padr�o o valor ser� de 5%
		 */
		public function valorComDesconto($valor = 0.05)
		{
			if(($valor > 0) && ($valor <= 1)) {
				$this->Preco = $this->Preco * $valor;
				return $this->Preco;
			} else {
				echo "Valor de desconto indisp�nivel";
			}
		}
		
		//M�todo set
		public function setId($id)
		{
			$this->Id = $id;
		}
		
		public function setNome($nome)
		{
			$this->Nome = $nome;
		}
		
		public function setPreco($preco)
		{
			if($preco > 0){
				$this->Preco = $preco;
			}
		}
		
		public function setDescricao($descricao)
		{
			$this->Descricao = $descricao;
		}
		
		public function setUsado($usado)
		{
			$this->Usado = $usado;
		}
		
		//m�todo get
		public function getId()
		{
			return $this->Id;	
		}
		
		public function getNome()
		{
			return $this->Nome;
		}
		
		public function getPreco()
		{
			return $this->Preco;
		}
		
		public function getDescricao()
		{
			return $this->Descricao;
		}
		
		public function getUsado()
		{
			return $this->Usado;
		}
}