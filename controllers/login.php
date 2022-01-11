<?php


$isPosted = filter_has_var(INPUT_POST, "submit");
$errors = [];

if($isPosted) {
	$login = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_DEFAULT);

	if(empty($login)) {
		array_push($errors, "Vous devez saisir le login");
	}
	if(empty($password)) {
		array_push($errors, "Vous devez saisir un mot de passe");
	}

	if (count($errors) == 0) {
		if ($login == "user" && $password == "123") {
			$_SESSION['user'] = $login;
			header("Location: index.php?page=home");
			exit;
		} else {
			array_push($errors, "Vous informations de connexion sont incorrecte");
		}
	}
	
}


$hasErrors = count($errors) > 0;
$title = 'Login to myself';

$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);



$template = "$controller.php";

// Affichage de la vue (view/home.php)
require 'views/gabarit.php';