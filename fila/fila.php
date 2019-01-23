<?php 
	function mostraFila($fila){
		for($x = 0; $x < sizeof($fila); $x++){	
			echo $fila[$x] . "<br>";
		}
	}

	function removeDaFila($fila){

		for($x = 0; $x < sizeof($fila); $x++){

			if($x < (sizeof($fila)-1)){
			$fila[$x] = $fila[$x + 1];
				}else{
				$fila[$x] = "";
		}
	}

	return $fila;
}	

	$fila = ['Jose', 'Maria', 'Pedro', 'Fatima','Sebastiao', 'Osvaldo', 'Vera'];
	mostraFila($fila);
	echo "<br><br>";
	$fila = removeDaFila($fila);
	mostraFila($fila);
	echo "<br><br>";
	$fila = removeDaFila($fila);
	mostraFila($fila);
	echo "<br><br>";
	$fila = removeDaFila($fila);
	mostraFila($fila);
	$fila = removeDaFila($fila);
	mostraFila($fila);
	echo "<br><br>";
	


?>