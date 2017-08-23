<?php

rand(1000, 9999); ?>

<!DOCTYPE html>
<html>
<head>
	<title>My Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
	<link rel="stylesheet" type="text/css" href="plugins/owl/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="plugins/owl/assets/owl.theme.green.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<noscript>
	Please enable Javascript on this website	
</noscript>

<div class="container-fluid subheader"> <!-- 100% -->
	<nav class="navbar navbar-inverse">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    	<ul class="nav navbar-nav navbar-left">
	    		<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Currency<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">USD</a></li>
		            <li><a href="#">EGP</a></li>
		            <li><a href="#">EURO</a></li>
		          </ul>
		        </li>
	    	</ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#" title="Shoppinh Cart"><i class="fa fa-shopping-cart"></i></a></li>
	        <li><a href="#" title="My Wishlist" class="wishlist_link"><i class="fa fa-heart text-warning"></i></a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Login</a></li>
	            <li><a href="#">Register</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
</div>

<div class="container-fluid">
	<div class="container">
		<div class="row">

			<div class="col-md-2 branding">
				<img src="images/logo.png" class="img-responsive" />
			</div>

			<div class="col-md-6">
				<div class="input-group header_margin">
			      <input type="text" class="form-control" placeholder="Search for products...">
			      <span class="input-group-btn">
			        <button class="btn btn-primary" type="button">Search</button>
			      </span>
			    </div>
			</div>

			<div class="col-md-4">
				<div class="btn-group header_margin pull-right">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    0 items - $0.00 <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="#">Product 1</a></li>
				    <li><a href="#">Product 2</a></li>
				  </ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="container">

		<nav class="navbar navbar-default main_navbar" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar_main">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse navbar_main">
					<ul class="nav navbar-nav">
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div>
				</div>
			</div>
		</nav>
	</div>
</div>

<div class="container-fluid">
	<div class="container">
		<div class="home_slider">
			<div id="mainslider" class="owl-carousel owl-theme">
			<?php for ($i=1; $i < 5; $i++): ?>
				<div class="item">
					<img src="images/slide.jpg" />
				</div>
			<?php endfor; ?>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<?php for ($i=0; $i < 9; $i++): ?>
				<div class="col-md-3">
					<div class="thumbnail">
						<div class="img_wrap">
				      	<img src="images/product.svg" />
				      	</div>
					      <div class="caption">
					        <h3>The Product Title <?=$i?></h3>
					        <p>USD 150</p>
					        <p>
					        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a>
					        	<a href="#" class="btn btn-default"><i class="fa fa-heart"></i></a>
					        	<a href="#" class="btn btn-default"><i class="fa fa-list"></i></a>
					        </p>
					      </div>
				    </div>	
				 </div>
			<?php endfor; ?>
		</div>
	</div>
</div>


<div class="container-fluid">
	<div class="container">
		<div id="brands_slider" class="owl-carousel owl-theme">
		<?php for ($i=1; $i <= 6; $i++): ?>
			<div class="item">
				<img src="images/<?=$i?>.png" />
			</div>
		<?php endfor; ?>
		</div>
	</div>
</div>


<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-3">
				<h3>Information</h3>
				
				<ul class="list">
					<li><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3>Information</h3>
				
				<ul class="list">
					<li><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3>Information</h3>
				
				<ul class="list">
					<li><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3>Information</h3>
				
				<ul class="list">
					<li><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/owl/owl.carousel.min.js"></script>
<script src="js/script.js"></script>


</body>
</html>