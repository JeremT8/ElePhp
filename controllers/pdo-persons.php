<?php
// Connexion au serveur de la BD
$db = getPDO();

// Recuperation des parametres du script transmi dans l'url
$id = (int) filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$action = filter_input(INPUT_GET, "action", FILTER_DEFAULT);


// Verification de la presence d'une variables
$isPosted = filter_has_var(INPUT_POST, "first_name");

if ($isPosted) {
	// Recuperation des données
	$firstName = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_STRING);
	$lastName = filter_input(INPUT_POST, "last_name", FILTER_SANITIZE_STRING);
	$id = (int)filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);

	if (!empty(trim($lastName)) && !empty(trim($firstName))) {
		$queryParams = [$firstName, $lastName];

		if(empty($id)) {
		$sql = "INSERT INTO persons (first_name, last_name) VALUES (?, ?)";
		} else {
			$sql = "UPDATE persons SET first_name=?, last_name=? WHERE id=?";
			$queryParams[] = $id;
		}
		$statement = $db->prepare($sql);
		$statement->execute($queryParams);
		header("Location" . getLinkToRoute("pdo-persons"));
		exit;
	}
}


// Gestion de la supression
if ($id && $action === "delete") {
	$sql = "DELETE FROM persons WHERE id = $id";
	$db->exec($sql);
	header("Location:" . getLinkToRoute("pdo-persons"));
	exit;
}

// En cas de modification, récupération des infos de la personne à modifier
if ($id && $action === "update") {
	$sql = "SELECT * FROM persons WHERE id = $id";
	$result = $db->query($sql);
	$currentPerson = $result->fetch();
} else {
	$currentPerson = new StdClass();
	$currentPerson->first_name = "";
	$currentPerson->last_name = "";
	$currentPerson->id = null;
}

// Requête pour lister toutes les personnes
$sql = "SELECT * FROM persons";
$result = $db->query($sql);

$data = $result->fetchAll();



// Affichage de la vue
echo render(
	"persons",
	[
		"personList" => $data,
		"currentPerson" => $currentPerson
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
