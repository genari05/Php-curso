<?php 
	

	$cursos = 'PHP';
	$tempRegistro = '10';

	//Regras para contratação: 

    echo "Cursos Realizados:" . "<br>" ;
	echo  ($cursos) ?  : "voce não preencheu o principal fator para ser promovido <br>";

	echo "<br>";
  	echo "Tempo de empresa em anos:" . "<br>" ;
	echo  ($tempRegistro) ?  : "voce não preencheu  ";

	echo "<br><br><br>";
	if($cursos){

		echo "Parabens pelo curso de: " . $cursos;
		if($tempRegistro >= 10){
			echo "<br>";
			echo "voce terá 10% de aumento pelo seus " . $tempRegistro . "Anos de Empresa";

		}
					if($tempRegistro < 10){
						echo "<br>";

						$tempRegistro =  10 - $tempRegistro ;

				echo "Falta " . $tempRegistro . "Ano para ter aumento, logo tera aumento de salario ";
			}

	}