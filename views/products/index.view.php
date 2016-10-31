<?php require '../views/partials/header.php'; ?> 
<div class="container-fluid contacts text-center">
	<?php 
		for($i = 0; $i < count($movies)/4; $i++) {
			echo '<div class="row top-buffer">';
			for($j = 0; $j < 4; $j++) {
				$first_row = "<div class='col-sm-2";
				if ($j == 0) {
					$first_row = $first_row . " col-sm-offset-2";
				}
				$first_row = $first_row . "'>";
					echo "$first_row";
					$movie = $movies[$i*4 + $j];
					$movie_name = $movie['name'];
					$movie_capitalised = capitalised($movie_name);
					echo "<img class='poster' src='images/$movie_name.jpg' alt='$movie_name'>";
					echo "<a href='products/" . $movie['id'] . "/show' class='btn btn-success'>";
					echo "<span class='glyphicon glyphicon-eye-open'; aria-hidden='true'></span> View " . $movie_capitalised; 
				  	echo "</a>";
				echo '</div>';
			}
			echo '<br/><br/>';
			echo '</div>';
	    }
	?>
</div>
<?php require '../views/partials/footer.php'; ?>
