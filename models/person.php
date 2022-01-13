<?php

/**
 * Retourne la liste des personnes depuis la base de données
 *
 * @return array
 */
function findAllPersons(): array
{
	// Requête pour lister toutes les personnes
	$sql = "SELECT * FROM persons";
	$result = getPDO()->query($sql);

	$data = $result->fetchAll();
	return $data ?? [];
}


/**
 * fonction de suppression d'un $person dans la base de données
 *
 * @param integer $id
 * @return void
 */
function deleteOnePersonById(int $id): void
{
	$sql = "DELETE FROM persons WHERE id = $id";
	getPDO()->exec($sql);
}


/**
 * fonction qui hydrate le formulaire
 *
 * @return StdClass
 */
function getEmptyPerson(): StdClass
{
	$currentPerson = new StdClass();
	$currentPerson->first_name = "";
	$currentPerson->last_name = "";
	$currentPerson->id = null;

	return $currentPerson;
}


/**
 * function de recuperation d'une $person par rapport a son ID
 *
 * @param integer $id
 * @return StdClass
 */
function getOnePersonById(int $id): StdClass
{
	$sql = "SELECT * FROM persons WHERE id = $id";
	$result = getPDO()->query($sql);
	$currentPerson = $result->fetch();

	return $currentPerson ?? getEmptyPerson();
}



/**
 * function d'ajout et de modification d'un element person dans la base de donnée
 *
 * @param integer $id
 * @param string $firstName
 * @param string $lastName
 * @return void
 */
function savePerson(int $id, string $firstName, string $lastName): void
{
	$queryParams = [$firstName, $lastName];

	if (empty($id)) {
		$sql = "INSERT INTO persons (first_name, last_name) VALUES (?, ?)";
	} else {
		$sql = "UPDATE persons SET first_name=?, last_name=? WHERE id=?";
		$queryParams[] = $id;
	}
	$statement = getPDO()->prepare($sql);
	$statement->execute($queryParams);
}
