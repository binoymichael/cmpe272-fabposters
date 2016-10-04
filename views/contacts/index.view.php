<?php require '../views/partials/header.php'; ?> 
<div class="container-fluid contacts text-center">
  <div class="row">
	<?php for($i = 0; $i < count($contacts); $i++) {?>
	    <div class="col-sm-2 <?php if ($i == 0): ?> col-sm-offset-2 <?php endif ?>">
		    <?php $contact = explode(",", $contacts[$i]); ?>
		    <span style="font-size: 2em;" class="glyphicon glyphicon-<?php echo $contact[0]; ?>"></span>
		    <br/><br/>
		    <span style="font-size: 1.5em;"><?php echo $contact[1]; ?></span><br/>
		    <?php
		    for($j = 2; $j < count($contact); $j++) {
		    	echo "$contact[$j]";
		    	echo "<br/>";
		    }
		    ?>
	    </div>
	<?php } ?>
  </div>
</div>
<?php require '../views/partials/footer.php'; ?>

