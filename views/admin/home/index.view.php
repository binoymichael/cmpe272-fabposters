<?php require '../views/partials/header.php'; ?> 
<div class="container top-buffer">
	<div class="page-header">
	  <h2>User List</h2>
	</div>
	<table class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
		<?php
			for($i = 0; $i < count($users); $i++) {
				$users_array = explode(",", $users[$i]);
				$name = $users_array[0];
				$email = $users_array[1];
				echo '<tr>';
					echo "<td>" . $name . "</td>";
					echo "<td>" . $email . "</td>";
				echo '</tr>';
			}
		?>
	</tbody>
	</table>
</div>
<?php require '../views/partials/footer.php'; ?>
