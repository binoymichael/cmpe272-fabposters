<?php

class Movie {
	public static function all($database_connection) {
		try {
			$sql = 'SELECT id, name, url FROM movies where 1 ';
			$sql .= ' ORDER BY id';
			$query = $database_connection->prepare($sql);
			$query->execute();
			$query->setFetchMode(PDO::FETCH_ASSOC); 
			return $query->fetchAll();
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	public static function find($database_connection, $movie_id) {
		try {
			$sql = 'SELECT id, name, url FROM movies where id = :id LIMIT 1';
			$query = $database_connection->prepare($sql);
		    $query->bindParam(':id', $movie_id);
			$query->execute();
			$query->setFetchMode(PDO::FETCH_ASSOC); 
			return $query->fetch();
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
}