<?php 


// Destruction de la session
session_destroy();

session_start();
session_regenerate_id();

// Redirection
header('Location: index.php?page=home');