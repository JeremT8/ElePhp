<?php 


// Destruction de la session
session_destroy();

session_start();
session_regenerate_id();

addFlash('Vous etes déconnecté');

// Redirection
header('Location: index.php?page=home');