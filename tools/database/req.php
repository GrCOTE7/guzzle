<?php

/**
 * Request.
 */
function req(string $sql, array $args = [])
{
	include __DIR__ . '/cnx.php';

	try {
		$req = $connection->prepare($sql);
		foreach ($args as $v) {
			$argsCleaned[] = filter_var($v, FILTER_SANITIZE_SPECIAL_CHARS);
		}
		$req->execute($argsCleaned ?? []);
	} catch (Exception $e) {
		echo 'Erreur : ' . $e->getMessage() . '<br />';
	}

	return $req->fetchAll(PDO::FETCH_ASSOC);
}
