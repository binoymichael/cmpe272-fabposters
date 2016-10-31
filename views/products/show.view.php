<?php require '../views/partials/header.php'; ?> 
<div class="container-fluid contacts">
<div class="row">
	<div class='col-sm-3 col-sm-offset-3'>
		<?php $movie_name = $movie['name']; 
		$movie_capitalised = capitalised($movie_name);
		echo "<img class='bigposter' src='/images/$movie_name.jpg' alt='$movie_name'>"; 
		?>
	</div>
	<div class='col-sm-4'>
	<?php 
		echo '<div class="col-sm-8">';
		echo "<form action='/products/" . $movie['id']. "/order' method='post'>";
				echo '<select class="form-control">';
				  echo '<option selected>Mini - 8" X 12" ($4.00)</option>';
				  echo '<option>Small - 12" X 18" ($8.00)</option>';
				  echo '<option>Medium - 16" X 24" ($12.00)</option>';
				  echo '<option>Large - 20" X 30" ($16.00)</option>';
				  echo '<option>X-Large - 24" X 36" ($20.00)</option>';
				echo '</select>';

			  echo "<br/>";
			  echo "<div class='checkbox'>";

			    echo "<label>";
			      echo "<input type='checkbox'> Add frame (50% extra)";
			    echo "</label>";
			  echo "</div>";
			  echo "<br/>";
			  echo "<button type='submit' class='btn btn-success'>";
			  	echo "<span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span> Buy $movie_capitalised";
			  echo "</button>";
		echo "</form>";
		echo '</div>';
	?>
	</div>
</div>
</div>
<?php require '../views/partials/footer.php'; ?>
