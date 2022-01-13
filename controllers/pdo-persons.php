<?php 
// Connexion au serveur de la BD
$db = new PDO (
	"mysql:host=127.0.0.1;dbname=php_cda_2022;charset=utf8",
	"root",
	""
);

// Requête pour lister toutes les personnes
$sql = "SELECT * FROM persons";
$result = $db->query($sql);

$data = $result->fetchAll(PDO::FETCH_OBJ);



// Affichage de la vue
echo render(
	"persons",
	[
		"personList" => $data
	]
	);




/**
 * Récupération des résultat dans une boucle while
 * $row = $result->fetch(PDO::FETCH_OBJ);
*
*  while ( $row !== false)  {
*	echo "<p> {$row->first_name} {$row->last_name} </p>";
*	$row = $result->fetch(PDO::FETCH_OBJ);
*}
*/



/**
 * Récuperation des résultats un à un
 * $row = $result->fetch(PDO::FETCH_ASSOC);
* var_dump($row);
* echo "<p> {$row['first_name']} {$row['last_name']} </p>"; 
* 
* $row = $result->fetch(PDO::FETCH_NUM);
* var_dump($row);
* echo "<p> {$row[2]} {$row[1]} </p>"; 
 */



