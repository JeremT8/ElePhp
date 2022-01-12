<?php

$path = '.';
$scan = scandir("$path");
	foreach ($scan as $item) {
			if ($item == '.' || $item == '..') {
			} elseif (is_file($path . '/' . $item)) {
				echo $item . ' (fichier)';
			} elseif (is_dir($path . '/' . $item)) {
				echo $item . ' [dossier]';
			}
			echo "<br>";
		}
