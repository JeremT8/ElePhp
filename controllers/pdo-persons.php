<?php 
// Connexion au serveur de la BD
$db = new PDO (
	"mysql:host=127.0.0.1;dbname=php_cda_2022;charset=utf8",
	"root",
	""
);

// Recuperation des parametres du script transmi dans l'url
$id =(int) filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$action = filter_input(INPUT_GET, "action", FILTER_DEFAULT);


// Verification de la presence d'une variables
$isPosted = filter_has_var(INPUT_POST, "first_name");

if($isPosted) {
	// Recuperation des données
	$firstName = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_STRING);
	$lastName = filter_input(INPUT_POST, "last_name", FILTER_SANITIZE_STRING);

	if(!empty(trim($lastName)) && ! empty(trim($firstName))){
		$sql = "INSERT INTO persons (first_name, last_name) VALUES (?, ?)";
		$statement = $db->prepare($sql);
		$statement->execute([$firstName, $lastName]);
		header("Location". getLinkToRoute("pdo-persons"));
	}
}


// Gestion de la supression
if($id && $action === "delete") {
	$sql = "DELETE FROM persons WHERE id = $id";
	$db->exec($sql);
	header("Location:". getLinkToRoute("pdo-persons"));
}

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



