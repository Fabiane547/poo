<?php
include_once("class/autoload.php");

$dadosAluno = new VIEWALUNO; 
$dadosAluno->setDadosAluno("nome do aluno","AP_123","123","123","01/01/1991",'0.10','30');
$dadosAluno->getDadosAluno();
$dadosAluno->printAluno();

echo "<br>";


$dadosProf = new VIEWPROF; 
$dadosProf->setDadosProf("nome do professor","1500","PHP OOP","123","123","01/01/1991",'0.08','30');
$dadosProf->getDadosProf();
$dadosProf->printProf();



?>