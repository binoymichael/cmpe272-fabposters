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
}