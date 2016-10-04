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
					$movie = explode(",", $movies[$i*4 + $j])[0];
					$movie_capitalised = capitalised($movie);
					echo "<img class='poster' src='images/$movie.jpg' alt='$movie'>";
					echo "<form action='products/order' method='post'>";
							echo '<select class="form-control">';
							  echo '<option selected>Mini - 8" X 12" ($4.00)</option>';
							  echo '<option>Small - 12" X 18" ($8.00)</option>';
							  echo '<option>Medium - 16" X 24" ($12.00)</option>';
							  echo '<option>Large - 20" X 30" ($16.00)</option>';
							  echo '<option>X-Large - 24" X 36" ($20.00)</option>';
							echo '</select>';
						  echo "<div class='checkbox'>";

						    echo "<label>";
						      echo "<input type='checkbox'> Add frame (50% extra)";
						    echo "</label>";
						  echo "</div>";
						  echo "<button type='submit' class='btn btn-success'>";
						  	echo "<span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span> Buy $movie_capitalised";
						  echo "</button>";
					echo "</form>";
				echo '</div>';
			}
			echo '<br/><br/>';
			echo '</div>';
	    }
	?>
</div>
<?php require '../views/partials/footer.php'; ?>
