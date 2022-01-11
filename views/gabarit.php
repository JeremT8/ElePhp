<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?? "Mon site" ?> </title>
</head>

<body>
	<nav>
		<?php if (isset($_SESSION['user'])) : ?>
			<h3>Bonjour <?= $_SESSION['user'] ?></h3>
			<a href="/index.php?page=logout">Déconnexion</a>
		<?php else : ?>
			<a href="index.php?page=login">Vous n'etes pas connecté, cliquez ici !</a>
		<?php endif; ?>
	</nav>


	<div>
		<?php include "views/$template" ?>
	</div>
</body>

</html>