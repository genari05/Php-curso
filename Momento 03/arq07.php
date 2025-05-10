<?php 

$i = 20;

switch ($i) {

	case 1:
		echo  $i . " Nivel é Adm";
		break;

	case 2:
    	echo $i . " Nivel é Usuario";
		break;
	
	default:
		echo $i . "Aguardando confirmação. ";
		break;
}