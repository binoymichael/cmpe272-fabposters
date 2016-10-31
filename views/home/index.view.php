<?php require '../views/partials/header.php'; ?> 
<div class="jumbotron text-center"> <h1>fabposters</h1>
  <p class="jumbo-text">We are a fictional poster design company based out of ENG 337, Charles Davidson College of Engineering, San Jose State University.</p>
  <p class="jumbo-text">Check out our entire collection <a href="products">here.</a><br/><a href="contacts">Contact us</a>, if you need to make custom orders</p>
</div>

<div class="container-fluid text-center">
  <h3>Best Sellers</h3>
  <br>
  <div class="row">
	<?php for($i = 0; $i < count($movies); $i++) {?>
	    <div class="col-sm-2 <?php if ($i == 0): ?> col-sm-offset-2 <?php endif ?>">
		  <img class="poster" src="images/<?php echo $movies[$i]['name']; ?>.jpg">
		  <a href="/products/<?php print($movies[$i]['id']); ?>/show" class="btn btn-success">
			  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View <?php echo capitalised($movies[$i]['name']); ?>
		  </a>
	    </div>
	<?php } ?>
  </div>
    <br><br>
</div>

<?php require '../views/partials/footer.php'; ?>

