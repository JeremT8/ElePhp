<?php 

function genericFindAll(string $tableName) {
	$sql = "SELECT * FROM `$tableName`";
	$result = getPDO()->query($sql);
	return $result->fetchAll(PDO::FETCH_ASSOC);
};

function getOptionsForSelect(array $data, $columnName) {
	$html = "";
	foreach($data as $row) {
		$html .= "<option value=\"{$row['id']}\">{$row[$columnName]}</option>";
	}
	return $html;
};