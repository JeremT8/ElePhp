<?php 



/**
 * function générique pour trouver les elements d'une table
 *
 * @param string $tableName
 * @return void
 */
function genericFindAll(string $tableName) {
	$sql = "SELECT * FROM `$tableName`";
	$result = getPDO()->query($sql);
	return $result->fetchAll(PDO::FETCH_ASSOC);
};




/**
 * function générique d'insertion de donnée depuis un formulaire vers une table 
 *
 * @param array $inputs
 * @param string $tableName
 * @return integer
 */
function genericInsert(array $inputs, string $tableName): int {
	$columnList = implode(", ", array_keys($inputs));
	$placeholders = implode(", :", array_keys($inputs));

	$sql = "INSERT INTO `$tableName` ($columnList) VALUES (:$placeholders)";
	
	$pdo = getPDO();
	$statement = $pdo->prepare($sql);
	$statement->execute($inputs);

	return $pdo->lastInsertId();
};




/**
 * function générique de recuperation des options d'un select pour un formulaire?
 *
 * @param array $data
 * @param array $columnsName
 * @return void
 */
function getOPtionsForSelect(array $data,array $columnsName) {
	$html = "";
 
	foreach($data as $row) {
		$columnValues = array_map(function($item) use ($row) {
			return $row[$item];
		}
		, $columnsName);

		$label = implode(' ', $columnValues);


		$html .= "<option value=\"{$row['id']}\">{$label}</option>";
	}
	return $html;
};