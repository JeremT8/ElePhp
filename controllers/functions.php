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


/**
 * Fais la somme d'une liste d'entier
 * et retourne cette somme avec un  préfixe
 * 
 * @param string $message => prefixed message : string
 * @param integer ...$numbers => liste de nombre : int
 * @return string Resultat de la fonction
 */
function add(string $message, int ...$numbers): string{
	$total = 0;
	foreach ($numbers as $n){
	$total += $n;
	}
	return $message . $total;
	}
echo add("Le resultat est : " ,5,8,2,8);

?> 

<br>

<?php

function addString(string &$str) {
	$str .= " dans un pays fort lointain";
	}
	$str ="Il était une fois";
	addString($str);
	echo $str;