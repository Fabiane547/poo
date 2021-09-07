<?php

include_once("autoload.php");
abstract class PESSOAS extends FOTOCOPIA 
{
	
		protected $nome,$cpf,$rg,$data_nascimento;

		protected function setNome($nome){
			$this->nome = $nome; 
		}
		protected function setCpf($cpf){
			$this->cpf = $cpf ;
		}
		protected function setRg($rg){
			$this->rg = $rg ;
		}
		protected function setDataNascimento($data_nascimento){
			$this->data_nascimento = $data_nascimento; 
		}
		protected function getNome(){
			return $this->nome ;
		}
		protected function getCpf(){
			return $this->cpf ;
		}
		protected function getRg(){
			return $this->rg ;
		}
		protected function getDataNascimento(){
			return $this->data_nascimento; 
		}

}


?>