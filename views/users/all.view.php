<?php require '../views/partials/header.php'; ?> 
<div class="container top-buffer">
	<div class="col-sm-3">
		<div class="page-header">
			<h3>Gargoos Users</h3>
		</div>
		<div class="row">
			<?php if(count($gargoos_users) > 0): ?>
				<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($gargoos_users as $user) {
							echo '<tr>';
								echo "<td>" . $user['firstName'] . ' ' . $user['lastName'] . "</td>";
								echo "<td>" . $user['email'] . "</td>";
							echo '</tr>';
						}
					?>
				</tbody>
				</table>

			<?php else: ?>
				No users found!
			<?php endif ?>
		</div>
	</div>
	<div class="col-sm-3 col-sm-offset-1">
		<div class="page-header">
			<h3>Airwind Users</h3>
		</div>
		<div class="row">
			<?php if(count($airwind_users) > 0): ?>
				<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($airwind_users as $user) {
							echo '<tr>';
								echo "<td>" . $user['first_name'] . ' ' . $user['last_name'] . "</td>";
								echo "<td>" . $user['email'] . "</td>";
							echo '</tr>';
						}
					?>
				</tbody>
				</table>

			<?php else: ?>
				No users found!
			<?php endif ?>
		</div>
	</div>
	<div class="col-sm-3 col-sm-offset-1">
		<div class="page-header">
			<h3>Fabposters Users</h3>
		</div>
		<div class="row">
			<?php if(count($fabposters_users) > 0): ?>
				<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($fabposters_users as $user) {
							echo '<tr>';
								echo "<td>" . $user['first_name'] . ' ' . $user['last_name'] . "</td>";
								echo "<td>" . $user['email'] . "</td>";
							echo '</tr>';
						}
					?>
				</tbody>
				</table>

			<?php else: ?>
				No users found!
			<?php endif ?>
		</div>
	</div>
</div>
<?php require '../views/partials/footer.php'; ?>
