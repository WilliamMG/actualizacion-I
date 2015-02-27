<?php

$arreglo = array(
	array(nombre=>'pan', codigo=>'item-1'),
	array(nombre=>'mantequilla', codigo=>'item-2'),
	array(nombre=>'mermelada', codigo=>'item-3'),
	array(nombre=>'cafe en sobre', codigo=>'item-4'),
);

echo(json_encode($arreglo));