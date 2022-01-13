<?php

define("USER_PATH", "database/users.json");

function getUserList(): array
{
	$data = file_get_contents(USER_PATH, true);
	return json_decode($data, true);
}


function authenticateUser(string $login, string $password): bool
{
	$userList = getUserList();
	$user = array_filter(
		$userList,
		function ($item) use ($login, $password) {
			return $item["login"] == $login && $item["password"] == $password;
		}
	);
	return count($user) > 0;
}


function saveUser(int $id, string $login, string $password): void {
	$queryParams = [$login, $password];
	if(empty($id)) {
		$queryParams [] = password_hash($password, PASSWORD_DEFAULT);
		$sql = "INSERT INTO users (user_login, user_password) VALUES (?, ?)";
	} else {
		$queryParams [] = $id;
		$sql = "UPDATE set user_login=? WHERE id=?";
	}

	$statement = getPDO()->prepare($sql);
	$statement->execute($queryParams);
}

function authentificateUser(string $login, string $password) : bool {
	$sql = "SELECT user_password FROM users WHERE user_login = ?";
	$statement = getPDO()->prepare($sql);
	$statement->execute([$login]);
	$user = $statement->fetch();
	if($user === false ) {
		return false;
	}

	return password_verify($password, $user->user_password);
}