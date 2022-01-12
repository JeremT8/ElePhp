<?php 

$filter = filter_input(INPUT_GET, "startWith");

$skillPath = 'data/skills.json';

// Lecture des données du fichier skills.json
$skills = file_get_contents($skillPath);

$skillsAsArray = json_decode($skills, true);

$skillsAsObjet = json_decode($skills);

$isPosted = filter_has_var(INPUT_POST, "submit");

if($isPosted) {
	$skillName = filter_input(INPUT_POST, "skill", FILTER_SANITIZE_STRING);

	if(! empty($skillName)) {
		$skillsAsArray[] = [
			"code" => uniqid(),
			"label" => $skillName
			
		];
		file_put_contents($skillPath, json_encode($skillsAsArray));

		header("location:". getLinkToRoute("skills"));
	}
};

// Convertie les labels de $skills en majuscule
$skillsAsArray = array_map(
	function($item) {
		$item["label"] = strtoupper($item["label"]);
		return $item;
},  $skillsAsArray);


// Liens vers les premieres lettres des $skills 
$letters = array_map(
	function($item) {
		return substr($item, 0, 1);
	},
	array_column($skillsAsArray, "label")
);

$letters = array_unique($letters);


// Filtrage des données
$skillsAsArray = array_filter(
	$skillsAsArray,
	function($item) use ($filter) {
		return str_starts_with($item["label"], $filter);
	} );





echo render("skills", [
	"skills" => $skillsAsArray,
	"skillsObj" => $skillsAsObjet,
	"letters" => $letters
]);