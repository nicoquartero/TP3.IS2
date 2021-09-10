<?php
	$texto = strtoupper($_GET["texto"]);
	$letra = strtoupper($_GET["letra"]);
	$cant = strlen($texto);
	$cont = 0;
	echo "<br>caracter de finalizacion: ",$_GET['letra'],"<br>";
	for ($i=1; $i<$cant;$i++)
	{
		if ($texto[$i-1]==$letra and ($texto[$i]==" " or $texto[$i]=="." or $texto[$i]=="," or $texto[$i]==";" or $texto[$i]=="/"))
		{
			$cont += 1;
		}
	}
	if ($texto[$cant-1]==$letra)
	{
		$cont += 1;
	}

	echo "<br>La cantidad de palabras finalizadas en <b>".$letra."</b> son: <b>" . $cont . "</b>";
?>