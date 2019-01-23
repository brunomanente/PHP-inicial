<?php
	//index
	require_once('classe.php');
	
	$minhaClasse = new Pessoa();

	$minhaClasse->setNome('Maria');
	$minhaClasse->setIdade('65');
	$minhaClasse->setEndereco('Rua das orquideas');
	
	echo $minhaClasse->getNome()."<br>";
	echo $minhaClasse->getIdade()."<br>";
	echo $minhaClasse->getEndereco()."<br>";

?>