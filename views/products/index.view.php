<?php require '../views/partials/header.php'; ?> 
<div class="container-fluid products-buffer">
<div class="row">
<div class="col-sm-5 col-sm-offset-1">
	<h4>Recently viewed</h4>
	<?php
		if (count($last_viewed) == 0) {
			echo 'None';
		}
		for($i = 0; $i < count($last_viewed); $i++) {
			echo "<div class='col-sm-2' style='margin-right:12px'>";
				$l_movie_id = $last_viewed[$i];
				$l_movie_name = $last_viewed_movies[$last_viewed[$i]][0];
				echo "<a href='products/" . $l_movie_id . "/show'>";
					echo "<img class='smallposter' src='images/$l_movie_name.jpg' alt='$l_movie_name'>";
			  	echo "</a>";
			echo "</div>";
		}
	?>
</div>
<div class="col-sm-5">
	<h4>Most Viewed</h4>
	None
</div>
</div>

<br/>
<div class="row">
	<div class="col-sm-2 col-sm-offset-1"><h4>All Products</h4></div>
</div>
<br/>
<div class="row text-center">
	<?php 
		$cols = 5;
		for($i = 0; $i < count($movies)/$cols; $i++) {
			echo '<div class="row bottom-buffer">';
			for($j = 0; $j < $cols; $j++) {
				if (($i * $cols + $j) < count($movies)) {
					$first_row = "<div class='col-sm-2";
					if ($j == 0) {
						$first_row = $first_row . " col-sm-offset-1";
					}
					$first_row = $first_row . "'>";
						echo "$first_row";
						$movie = $movies[$i*$cols + $j];
							$movie_name = $movie['name'];
							$movie_capitalised = capitalised($movie_name);
							echo "<img class='poster' src='images/$movie_name.jpg' alt='$movie_name'>";
							echo "<a href='products/" . $movie['id'] . "/show' class='btn btn-success'>";
							echo "<span class='glyphicon glyphicon-eye-open'; aria-hidden='true'></span> View " . $movie_capitalised; 
						  	echo "</a>";
					echo '</div>';
				}
			}
			echo '<br/><br/>';
			echo '</div>';
	    }
	?>
</div>
</div>
<?php require '../views/partials/footer.php'; ?>
