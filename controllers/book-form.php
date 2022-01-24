<?php 

require "models/generic.php";

$isPosted = filter_has_var(INPUT_POST, "titre");

if($isPosted) {
	$filters = [
		"titre" => FILTER_SANITIZE_STRING,
		"prix" => FILTER_SANITIZE_NUMBER_INT,
		"date_publication" => FILTER_SANITIZE_NUMBER_INT,
		"id_auteurs" => FILTER_SANITIZE_NUMBER_INT,
		"id_editeurs" => FILTER_SANITIZE_NUMBER_INT,
		"id_genres" => FILTER_SANITIZE_NUMBER_INT,
		"id_langues" => FILTER_SANITIZE_NUMBER_INT
	];

	$inputs = filter_input_array(INPUT_POST, $filters);

	var_dump($inputs);

	try {
		$id = genericInsert($inputs, "livres");
		echo $id;
	} catch (PDOException $ex) {
		echo $ex->getMessage();
	}

}

echo render("book-form", [
	"authorOptions" => getOPtionsForSelect(genericFindAll("auteurs") , ["prenom", "nom"]),
	"editorOptions" => getOPtionsForSelect(genericFindAll("editeurs") , ["nom"]),
	"genreOptions" => getOPtionsForSelect(genericFindAll("genres") , ["genres"]),
	"langueOptions" => getOPtionsForSelect(genericFindAll("langues") , ["langues"])
	
]);