<?php 

/**
 * Fonction de conversion de snake_case vers le camelCase
 *
 * @param [type] $varName 
 * @return void
 */
function snakeCaseToCamelCase(string $varName): string {
	$arrayName = explode('_', $varName);
	for ($i = 0; $i < count($arrayName); $i++) {
		$arrayName[$i] = ucfirst($arrayName[$i]);
	}

	return implode('', $arrayName);
}