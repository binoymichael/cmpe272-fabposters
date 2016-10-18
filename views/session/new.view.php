<?php require '../views/partials/header.php'; ?> 

<div class="container-fluid contacts">
	<div class="row">
	    <div class="col-sm-3 col-sm-offset-2">
			<?php if(!empty($MESSAGE)): ?>
			    <div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  <?php print($MESSAGE); ?>
				</div>
			<?php endif ?>
	    </div>
	</div>
	<div class="row">
	    <div class="col-sm-2 col-sm-offset-2">
			<form action="/login" method="post">
			  <div class="form-group">
			    <label for="username">Username:</label>
			    <input type="text" class="form-control" name="username" id="username" required>
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" name="password" id="pwd" required>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
  </div>
</div>

<?php require '../views/partials/footer.php'; ?> 
