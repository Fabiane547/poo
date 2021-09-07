<?php 
include_once("autoload.php");
class VIEWALUNO extends ALUNOS
{
	public function setDadosAluno($nome,$setMatricula, $cpf,$rg,$data, $valor,$qtd ){
			self::setNome($nome);
			self::setMatricula($setMatricula);
			self::setCpf($cpf);
			self::setRg($rg);
			self::setDataNascimento($data);
			self::setValor($valor);
			self::setQtd($qtd);

	}
	public function getDadosAluno(){
			$this->nome = self::getNome();
			$this->matricula =self::getMatricula();
			$this->cpf = self::getCpf();
			$this->rg = self::getRg();
			$this->data = self::getDataNascimento();
			$this->valor = self::getValor();
			$this->qtd = self::getQtd();
			$this->valorTotal = self::getValorTotal();
	}
	public function printAluno(){
		echo "ola ".$this->nome."<br>";
		echo "sua matricula: ".$this->matricula."<br>" ;
		echo "O seu cpf ".$this->cpf."<br>";
		echo "o seu rg ".$this->rg."<br>";
		echo "a data do seu nascimetno eh ".$this->data."<br>";
		echo "Valor da copia ".$this->valor."<br>";
		echo "Quantidade de copia ".$this->qtd."<br>";
		echo "Valor total para pagamento R$: ".$this->valorTotal."<br>";

	}
}
?>