<?php

	abstract class  FOTOCOPIA
	{
	protected $valor,$qtd, $valorTotal;
	
	protected function setValor($valor){
			$this->valor = $valor; 
		}
	
	protected function getValor(){
			return $this->valor ;
		
		}
	
	protected function setQtd($qtd){
			$this->qtd = $qtd; 
	}	
	protected function getQtd(){
			return $this->qtd ;
		
	}
	protected function getValorTotal(){
		return ($this->qtd * $this->valor);
	}
}	

?>