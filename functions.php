<?php

function hello(string $name)
{
	echo "Hello $name <br>";
};

$hola = function (string $name) {
	echo "Hola $name <br>";
};

$f = "hola";
$f2 = "hello";



hello("Sebastien");
$hola("Seastian");
$$f("Sebastopol");
$f2("John");



function add(string $message, int ...$numbers){
	$total = 0;
	foreach ($numbers as $n){
	$total += $n;
	}
	return $message . $total;
	}
echo add("Le resultat est : " ,5,8,2,8);
