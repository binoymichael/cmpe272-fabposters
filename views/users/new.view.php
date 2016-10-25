<?php require '../views/partials/header.php'; ?> 
<div class="container contacts">
    	<ul class="nav nav-tabs">
		  <li role="presentation" class="active"><a href="#">Create New User</a></li>
		  <li role="presentation"><a href="/users">View All Users</a></li>
		</ul>
		<br/>
		<br/>
			<form action="/users/create" method="post">
			  <div class="row">
				  <div class="form-group">
				  	<div class="col-sm-4">
					    <label for="first_name">First Name:</label>
					    <input type="text" class="form-control" name="first_name" id="first_name" required>
					    <br/>
					    <label for="last_name">Last Name:</label>
					    <input type="text" class="form-control" name="last_name" id="last_name" required>
					    <br/>
					    <label for="email">Email:</label>
					    <input type="email" class="form-control" name="email" id="email" required>
				  	</div>
				  	<div class="col-sm-4 col-sm-offset-1">
					    <label for="first_name">Address:</label>
					    <input type="text" class="form-control" name="address" id="address">
					    <br/>
					    <label for="last_name">Home Phone:</label>
					    <input type="text" class="form-control" name="home_phone" id="home_phone">
					    <br/>
					    <label for="email">Cell Phone:</label>
					    <input type="text" class="form-control" name="cell_phone" id="cell_phone">
				    </div>
				  </div>
			  </div>
			  <br/>
			  <div class="row">
				  <div class="form-group">
					  	<div class="col-sm-4">
	 						  <button type="submit" class="btn btn-default">Submit</button>
					  	</div>
				  </div>
			  </div>
			</form>
</div>
<?php require '../views/partials/footer.php'; ?>
