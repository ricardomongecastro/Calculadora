
<!DOCTYPE html>
<html>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


<?php 
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!="")
	{

		if ($_POST["operador"] == "suma") {
			print ('EL resultado es :&nbsp'); 
			print($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
			esPrimo($resultado);
			palindromo($resultado);
			

		} elseif ($_POST["operador"] == "resta") {
			print ('EL resultado es :&nbsp'); 
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
			esPrimo($resultado);
			palindromo($resultado);
			
		

		} elseif ($_POST["operador"] == "multiplicacion") {
			print ('EL resultado es :&nbsp'); 
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			esPrimo($resultado);
			palindromo($resultado);
					

		} elseif ($_POST["operador"] == "division") {
			print ('EL resultado es :&nbsp'); 
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			esPrimo($resultado);
			palindromo($resultado);
			


		}
	} else 
	{
		print("Ingresa algun valor");
		print ('<br /><a href="index.html">Volver</a>');
	}

	
	function esPrimo($numero) {
		$contador = 2;
		while ($contador < $numero) {
			if ($numero % $contador) { //realiza las divisiones hasta verificar el residup en 0
				$contador++;
				continue;
			}
			return false;
		}
	 return true;
	}

	if (esPrimo($resultado)) 
	{
		echo "<br />Es Primo";
	} else {
		echo "<br />No es Primo";
	}
     	

    function palindromo($palabra)
		 {
			 $minusculas = explode(" ", strtolower($palabra)); //Convertimos la cadena a minusculas
			 $nuevo="";
			 foreach($minusculas as $nuevaCadena)
			 {
				 trim($nuevaCadena); //Eliminamos los espacios en blanco
				 $nuevo .= $nuevaCadena; 
			 }
			 
			 if($nuevo == strrev($nuevo))// se revisa si es igual de derecha a izquierda
			 {
				 return true;
			 }
			 else {
				 return false;
			 }
			
		 }
		 
		 if (palindromo($resultado)) 
		 {
			echo "<br />Es Palindromo";
		 }else{
			echo "<br />No es Palindromo";
		}
		 print ('<br /><a href="index.html">Volver</a>');

?>
