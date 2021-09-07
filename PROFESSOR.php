<?php 
include_once("autoload.php");

class PROFESSOR extends PESSOAS
{
	protected $salario, $disciplina, $nome,$cpf, $rg, $data;	
	
	protected function setSalario($salario){
			$this->salario = $salario; 
		}
	protected function getSalario(){
			return $this->salario; 
		}
	protected function setDiscplina($disciplina){
			$this->disciplina = $disciplina; 
		}
	protected function getDiscplina(){
			return $this->disciplina; 
		}

}
?>