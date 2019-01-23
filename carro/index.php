<?php

	require_once('carro.php');
	
	$meuCarro = new Carro();
	
	$meuCarro->setMarca('Honda');
	$meuCarro->setCor('branco');
	$meuCarro->setModelo('HRV');
	$meuCarro->setAno('2016');
	
	echo $meuCarro->getMarca()."<br>";
	echo $meuCarro->getModelo()."<br>";
	echo $meuCarro->getAno(2050)."<br>";
	echo $meuCarro->getCor()."<br>";


?>
