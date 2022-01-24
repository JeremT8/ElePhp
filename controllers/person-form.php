<?php
require "models/generic.php";

$isPosted = filter_has_var(INPUT_POST, "persons");
$connexion->beginTransaction();

if ($isPosted) {
	try {
		$addressInput = $_POST["address"];
		$addressFilter = [
			"rue" => FILTER_SANITIZE_STRING,
			"code_postal" => FILTER_SANITIZE_STRING,
			"ville" => FILTER_SANITIZE_STRING
		];
		$address = filter_var_array($addressInput, $addressFilter);


		$addressId = genericInsert($address, "addresses");


		$person = filter_var_array($_POST["persons"], [
			"last_name" => FILTER_SANITIZE_STRING,
			"first_name" => FILTER_SANITIZE_STRING
		]);
		$person["address_id"] = $addressId;

		genericInsert($person, "persons");

		$connexion->commit();
	} catch (PDOException $ex) {
		$connexion->rollBack();
		echo $ex->getMessage();
	}
}


echo render("person-form", []);
