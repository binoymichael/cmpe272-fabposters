<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fabposters</title>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
		.jumbotron { 
			margin-top: 20px;
		    background-color: #ffffff; 
		    color: #000000;
			margin-bottom: 0px;
			padding-bottom: 0px;
		}
		.jumbo-text {
			margin-left: 25%;
			margin-right: 25%;
		}

		.navbar {
		    margin-bottom: 0;
		    background-color: #ffffff;
		    z-index: 9999;
		    border: 0;
		    font-size: 12px !important;
		    line-height: 1.42857143 !important;
		    letter-spacing: 4px;
		    border-radius: 0;
		}

		.navbar li a, .navbar .navbar-brand {
		    color: #000 !important;
		}

		.navbar-nav li a:hover, .navbar-nav li.active a {
		    color: #00aa00 !important;
		    background-color: #000 !important;
		}

		.navbar-default .navbar-toggle {
		    border-color: transparent;
		    color: #000 !important;
		}

		.poster {
			width:200px;
		  	height:270px;	
		  	margin-bottom: 5px;
		}
		a, a:hover {
			color: #00aa00;
		}
	</style>
  </head>
  <body>
  	<div class="jumbotron text-center">
	  <h1>fabposters</h1> 
	  <p class="jumbo-text">We are a fictional poster design company based out of ENG 337, Charles Davidson College of Engineering, San Jose State University.</p>
	  <p class="jumbo-text">Check out our entire collection <a href="products">here.</a><br/><a href="contact">Contact us</a>, if you need to make custom orders</p>
	</div>

	<div class="container-fluid text-center">
	  <h3>Best Sellers</h3>
	  <br>
	  <div class="row">
	    <div class="col-sm-2 col-sm-offset-2">
		  <img class="poster" src="images/lotr2.jpg" alt="gandalf">
		  <button type="button" class="btn btn-success">
			  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Buy Gandalf
		  </button>
	    </div>
	    <div class="col-sm-2">
		  <img class="poster" src="images/interstellar.jpg" alt="interstellar">
		  <button type="button" class="btn btn-success">
			  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Buy Interstellar
		  </button>
	    </div>
	    <div class="col-sm-2">
		  <img class="poster" src="images/inception.jpg" alt="inception">
		  <button type="button" class="btn btn-success">
			  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Buy Inception
		  </button>
	    </div>
	    <div class="col-sm-2">
		  <img class="poster" src="images/gladiator.jpg" alt="gladiator">
		  <button type="button" class="btn btn-success">
			  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Buy Gladiator
		  </button>
	    </div>
	  </div>
	    <br><br>
	</div>

	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <a class="navbar-brand" href="#">fabposters</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="home">HOME</a></li>
	        <li><a href="products">PRODUCTS</a></li>
	        <li><a href="about">ABOUT</a></li>
	        <li><a href="news">NEWS</a></li>
	        <li><a href="contact">CONTACT</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<footer class="container-fluid text-center">
	  <p>Website created for SJSU CMPE-272 course. Credits for all images in this site are mentioned <a href="credits">here.</a></p> 
	</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>