<?php


/**
 * Récupération des infos de la route
 *
 * @param string $page
 * @param array $routes
 * @return array un tableau contenant le nom de la route et son chemin
 */
function getRouteInfos(string $page, array $routes, string $notFound = "not_found"): array {
	// Résolution du routage
	if(array_key_exists($page, $routes)){
		$controller = $routes[$page];
	} else {
		$controller = $page;
	}

	// Gestion d'un contrôleur dont le fichier n'existe pas
	$controllerPath = "controllers/$controller.php";
	if(! file_exists($controllerPath)){
		$controllerPath = "controllers/$notFound.php";
	}

	return [
		"controller" => $controller,
		"controllerPath" => $controllerPath
	];

}


