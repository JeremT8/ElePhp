<?php

//Definir le demarrage de la session
session_start();
session_regenerate_id(true);

//Récupération du nom du contrôleur. Par defaut "intro
$page = filter_input(INPUT_GET, "page")?? "intro";

$securedRoutes = [
    "cadavre-exquis", "formulaire"
];

if(in_array($page, $securedRoutes) && ! isset($_SESSION['user'])) {
    header("Location: index.php?page=login");
    exit;
}

//Table de routage
$routes = [
    "telechargement" => "upload",
    "contact" => "formulaire",
    "test-lib" => "include-tools",
    "login" => "login"
];

//Résolution du routage
if (array_key_exists($page, $routes)) {
    $controller = $routes[$page];
} else {
    $controller = $page;
}

//Gestion d'un controleur dont le fichier n'existe pas
$controllerPath = "controllers/$controller.php";
if (!file_exists($controllerPath)) {
    $controllerPath = "controllers/not_found.php";
};

require $controllerPath;