<?php

class Movie {
	public static function all($database_connection) {
		try {
			$sql = 'SELECT id, name FROM movies where 1 ';
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
			$sql = 'SELECT id, name FROM movies where id = :id LIMIT 1';
			$query = $database_connection->prepare($sql);
		    $query->bindParam(':id', $movie_id);
			$query->execute();
			$query->setFetchMode(PDO::FETCH_ASSOC); 
			return $query->fetch();
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	public static function find_set($database_connection, $movie_ids) {
		try {
			$sql = 'SELECT id, name FROM movies where FIND_IN_SET(id, :ids)';
			$query = $database_connection->prepare($sql);
			$movie_string = implode(",", $movie_ids);
		    $query->bindParam(':ids', $movie_string);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
}