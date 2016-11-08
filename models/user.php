<?php

class User {
	public static function is_admin($username, $password) {
		$records = file('../data/admin.txt');
		foreach ($records as $record) {
			$creds = explode(",", rtrim($record));
			if ($creds[0] == $username && $creds[1] == $password) {
				return true;
			}
		}
		return false;
	}

	public static function create($database_connection, $params) {
		try {
			$stmt = $database_connection->prepare(
				"INSERT INTO users (first_name, last_name, email, address, home_phone, cell_phone) 
			     VALUES (:first_name, :last_name, :email, :address, :home_phone, :cell_phone)");
		    $stmt->bindParam(':first_name', $_POST['first_name']);
		    $stmt->bindParam(':last_name', $_POST['last_name']);
		    $stmt->bindParam(':email', $_POST['email']);
		    $stmt->bindParam(':address', $_POST['address']);
		    $stmt->bindParam(':home_phone', $_POST['home_phone']);
		    $stmt->bindParam(':cell_phone', $_POST['cell_phone']);
		    $stmt->execute();
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	public static function select($database_connection, $params) {
		try {
			$params = array();
			$sql = 'SELECT first_name, last_name, email, address, home_phone, cell_phone FROM users where 1 ';
			if (!empty($_GET['name'])) {
			    $sql .= "AND (first_name like ? OR last_name like ?)";
			    $params[] = '%' . $_GET['name'] . '%';
			    $params[] = '%' . $_GET['name'] . '%';
			}

			if (!empty($_GET['email'])) {
			    $sql .= "AND email like ?";
			    $params[] = '%' . $_GET['email'] . '%';
			}

			if (!empty($_GET['phone'])) {
			    $sql .= "AND (home_phone like ? OR cell_phone like ?)";
			    $params[] = '%' . $_GET['phone'] . '%';
			    $params[] = '%' . $_GET['phone'] . '%';
			}

			$sql .= ' ORDER BY id DESC';
			$query = $database_connection->prepare($sql);
			$i = 1;
			foreach ($params as $param) {
			    $query->bindValue($i, $param);
			    $i++;
			}
			$query->execute();
			$query->setFetchMode(PDO::FETCH_ASSOC); 
			return $query->fetchAll();
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
	public static function all($database_connection) {
		try {
			$sql = 'SELECT first_name, last_name, email, address, home_phone, cell_phone FROM users where 1 ';
			$sql .= ' ORDER BY id DESC';
			$query = $database_connection->prepare($sql);
			$query->execute();
			$query->setFetchMode(PDO::FETCH_ASSOC); 
			return $query->fetchAll();
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
}