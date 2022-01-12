<?php 

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

$skillsAsArray = array_map(
	function($item) {
		$item["label"] = strtoupper($item["label"]);
		return $item;
},  $skillsAsArray);


echo render("skills", [
	"skills" => $skillsAsArray,
	"skillsObj" => $skillsAsObjet
]);