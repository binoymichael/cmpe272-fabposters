<?php require '../views/partials/header.php'; ?> 
<div class="container contacts">
    	<ul class="nav nav-tabs">
		  <li role="presentation"><a href="/users/new">Create New User</a></li>
		  <li role="presentation" class="active"><a href="#">View All Users</a></li>
		</ul>
		<br/>
		<br/>
		<div class="row">
		    <div class="col-sm-3">
				<?php if(isset($_SESSION['message'])): ?>
					<div class="alert alert-success alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <?php print($_SESSION['message']); unset($_SESSION['message']); ?>
					</div>
				<?php endif ?>
		    </div>
		</div>
		<div class="row">
			<form class="form-inline" action="/users" method="get">
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" name="name" id="name" value="<?php isset($_GET['name']) ? print($_GET['name']) : '';?>">
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" class="form-control" name="email" id="email" value="<?php isset($_GET['email']) ? print($_GET['email']) : '';?>">
			  </div>
			  <div class="form-group">
			    <label for="phone">Phone</label>
			    <input type="text" class="form-control" name="phone" id="phone" value="<?php isset($_GET['phone']) ? print($_GET['phone']) : '';?>">
			  </div>
			  <button type="submit" class="btn btn-default">Search</button>
			</form>
		</div>
		<br/>
		<div class="row">
			<?php if(count($users) > 0): ?>
				<table class="table">
				<thead>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Home Phone</th>
						<th>Cell Phone</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($users as $user) {
							echo '<tr>';
								echo "<td>" . $user['first_name'] . "</td>";
								echo "<td>" . $user['last_name'] . "</td>";
								echo "<td>" . $user['email'] . "</td>";
								echo "<td>" . $user['home_phone'] . "</td>";
								echo "<td>" . $user['cell_phone'] . "</td>";
								echo "<td>" . $user['address'] . "</td>";
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
<?php require '../views/partials/footer.php'; ?>
