<?php 
include_once("autoload.php");
class VIEWPROF extends PROFESSOR
{
	
	public function setDadosProf($nome,$salario,$disciplina, $cpf,$rg,$data, $valor,$qtd ){
			self::setNome($nome);
			self::setSalario($salario);
			self::setDiscplina($disciplina);
			self::setCpf($cpf);
			self::setRg($rg);
			self::setDataNascimento($data);
			self::setValor($valor);
			self::setQtd($qtd);

	}
	public function getDadosProf(){
			$this->nome = self::getNome();
			$this->salario =self::getSalario();
			$this->disciplina =self::getDiscplina();
			$this->cpf = self::getCpf();
			$this->rg = self::getRg();
			$this->data = self::getDataNascimento();
			$this->valor = self::getValor();
			$this->qtd = self::getQtd();
			$this->valorTotal = self::getValorTotal();
	}
	public function printProf(){
		echo "ola ".$this->nome."<br>";
		echo "seu salario: ".$this->salario."<br>" ;
		echo "sua disciplina: ".$this->disciplina."<br>" ;
		echo "O seu cpf ".$this->cpf."<br>";
		echo "o seu rg ".$this->rg."<br>";
		echo "a data do seu nascimetno eh ".$this->data."<br>";
		echo "Valor da copia ".$this->valor."<br>";
		echo "Quantidade de copia ".$this->qtd."<br>";
		echo "Valor total para pagamento R$: ".$this->valorTotal."<br>";
	
	}
}
 ?>