<?php
     $data = json_decode(file_get_contents("php://input"), true);
     foreach ($data as $movie_id => $quantity) 
     {
	    Movie::update($database_connection, $movie_id, $quantity);
     }

    
