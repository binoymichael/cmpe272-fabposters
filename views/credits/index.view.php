<?php require '../views/partials/header.php'; ?> 
<div class="container contacts">
	<table class="table">
	<thead>
		<tr>
			<th>Image</th>
			<th>Reference URL</th>
		</tr>
	</thead>
	<tbody>
		<?php
			for($i = 0; $i < count($movies); $i++) {
				$movie_array = explode(",", $movies[$i]);
				$name = $movie_array[0];
				$link = $movie_array[1];
				echo '<tr>';
					echo "<td>" . capitalised($name) . "</td>";
					echo "<td><a target='_blank' href='$link'>$link</a></td>";
				echo '</tr>';
			}
		?>
	</tbody>
	</table>
</div>
<?php require '../views/partials/footer.php'; ?>
