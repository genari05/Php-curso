<?php

$var_01 = 10;
$var_02 = 20;

if ($var_01 >= 10)
{
// código se a condiçãoUm for atendida
	echo "Sua compra pode ser parcelada" . "<br>";
	echo $var_02 / $var_01 == 2 ? "Em 10x "  : "FALSE";
}
elseif ($var_02 == 10)
{
// código se a condiçãoDois for atendida
	echo "condição 02";
}
else
{
// código se nenhum das condições forem atendidas
	echo "condição 03";
}
?>