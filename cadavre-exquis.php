<?php
	$nom = ['le chat du voisin', 'ma grand-mère', 'Alexandre le Grand', 'Chuck Norris', 'Céline Dion', 'le pape', 'Frodon', 'ma petite soeur', 'le facteur', 'un kangourou', 'mon prof de maths', 'Superman', 'un bonhomme de neige', 'Barbie', 'le père Noël', 'le boss du dernier niveau', 'la mariée', 'le plombier', 'le roi', 'la reine', 'un perroquet déplumé', 'Napoléon', 'le roi Arthur', 'Merlin', 'un loup-garou', 'Dracula', 'un extra-terrestre', 'le prince charmant', 'une licorne', 'la petite souris', 'le lapin de Pâques', 'Madame la Duchesse', 'Astérix', 'Lucky Luke', 'le Grand Schtroumpf'];

	$verbe = ['a mangé', 'a toujours détesté', 'a vendu', 'adore', 'a tué', 'a battu aux échecs', 'a recueilli', 's\'acharne sur', 'apprécie', 'a bu', 'a provoqué en duel', 'a joué un sale tour à', 'a épousé', 'a voyagé avec', 'ne supporte pas', 'a adoubé', 'a embauché', 'a renvoyé', 'encourage', 'se désespère de rencontrer', 'voudrait partir en vacances avec', 'a complètement oublié', 'a téléchargé', 'a voté pour', 'est tout à fait contre', 'a fait un gros câlin à', 's\'est brossé les dents avec'];

	$complement = ['au petit-déjeuner', 'au 12ème siècle', 'le jour de son anniversaire', 'pour s\'amuser', 'parce que c\'était l\'heure', 'par amour', 'avec des frites', 'sur le tabouret de la cuisine', 'à Paris', 'sous la pluie', 'le premier jour des soldes', 'en pleine voie', 'pour 5 euros', 'pour sauver sa peau', 'sans s\'en rendre compte', 'avant de se marier', 'au cinéma', 'sur la banquise', 'dans le jardin', 'avec une brosse à dents', 'à la petite cuillère', 'avec une batte de base-ball', 'sur le pont d\'Avignon', 'à -50%', 'en pleine nuit', 'un soir de pleine lune', 'pendant son cours d\'aqua-poney'];


for ($i = 1; $i <= 10; $i++) {

	$phrase = $nom[array_rand($nom)] . ' ' . $verbe[array_rand($verbe)] . ' ' . $nom[array_rand($nom)] . ' ' . $complement[array_rand($complement)] . '.' ."<br>";
	echo $phrase;
}
	?>
