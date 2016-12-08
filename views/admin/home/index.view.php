<?php require '../views/partials/header.php'; ?> 
<div class="container top-buffer">
	<div class="row" style="margin-top: 20px;">
    <?php if(!empty($MESSAGE)): ?>
        <div class="alert alert-success" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Success:</span>
          <?php print($MESSAGE); ?>
        </div>
    <?php endif ?>
    </div>
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
