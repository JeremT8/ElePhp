<?php

//Definir le demarrage de la session
session_start();
session_regenerate_id(true);

// Import des bibliotheque de l'application
require 'lib/flash.php';

//Récupération du nom du contrôleur. Par defaut "intro
$page = filter_input(INPUT_GET, "page")?? "intro";


// Route securisé
$securedRoutes = [
    "cadavre-exquis", "formulaire"
];

// Redirection vers login quand on est anonyme et que l'on veux accedez a une securisée.
if(in_array($page, $securedRoutes) && ! isset($_SESSION['user'])) {
    addFlash("Vous devez être authentifié pour accèdez à la page $page ");
    $_SESSION["redirectPage"] = $page;
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