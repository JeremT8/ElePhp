<?php

// Récuperation du nom du contrôleur par défaut
$controller = filter_input(INPUT_GET, "page") ?? "intro";

// Gestion d'un contrôleur dont le fichier n'existe pas
$controllerPath = "controllers/$controller.php";
if(! file_exists($controllerPath)) {
	$controllerPath = "controllers/not_found.php";
}

require $controllerPath;