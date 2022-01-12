<?php 

echo getLinkToRoute("home", ["sort" => "asc", "pageNumber" => 5]);

/***
 * ob_start();

echo "Hello";
include 'views/login.php';

$output = ob_get_clean();

var_dump($output);
 */
