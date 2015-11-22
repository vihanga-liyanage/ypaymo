<!DOCTYPE html>
<html lang="en">
<head>
  <title>YPayMo-Shop Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="asssets/css/bootstrap.min.css">-->
  <!--<link rel="stylesheet" href="assets/css/bootstrap-theme.css">-->
  
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
  <script type="text/javascript" src="<?php echo base_url("assets/jquery/jquery-2.1.4.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
  
  <!--<script src="assets/jquery/jquery-2.1.4.min.js"></script>-->
  <!--<script src="assets/js/bootstrap.min.js"></script>-->
  
</head>
<style>
	body{
		padding-top : 40px;
	}
</style>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
		<div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  </button>
			  
			  <a href="#" class="navbar-brand" style="padding-left:100px">YPayMo</a>
			  
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
			  <ul class="nav navbar-nav">
				<li><a href="#">About</a>
				<li><a href="#">Contact Us</a>
				<li><a href="#">My Cart</a>
			  </ul>
			</div>
		</div>
	</nav>
	<div class="jumbotron">
		<div class="container text-center">
			<h1>YPayMo - Shop Online</h1>
			<p>Upto 80% off all our products</p>
		</div>
	</div>

	<div class="container">

		<div class="row">

			<div class="col-md-3">
				<p class="lead">Shop Items</p>
				<div class="list-group">
					<a href="#" class="list-group-item">Electrical Items</a>
					<a href="#" class="list-group-item">Computer Parts</a>
					<a href="#" class="list-group-item">Clothing and Footware</a>
				</div>
			</div>
			<div class="col-md-9">

				<div class="row carousel-holder">

					<div class="col-md-12">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
								<li data-target="#carousel-example-generic" data-slide-to="3"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img class="slide-image" src="<?php echo base_url("assets/images/slider1.jpg"); ?>" alt="">
								</div>
								<div class="item">
									<img class="slide-image" src="<?php echo base_url("assets/images/slider2.jpg"); ?>" alt="">
								</div>
								<div class="item">
									<img class="slide-image" src="<?php echo base_url("assets/images/slider3.jpg"); ?>" alt="">
								</div>
								<div class="item">
									<img class="slide-image" src="<?php echo base_url("assets/images/slider4.jpg"); ?>" alt="">
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>

				</div>
					
				<h2>Best Sellers</h2>
					
				<div class="row" style= "padding-top:20px">

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="<?php echo base_url("assets/images/cartImage1.jpg"); ?>" alt="">
							<div class="caption">
								<h4>Samsung Galaxy S6</h4>
								<h4> Price : Rs.95,000</h4>
								<h6>Quantity : 
								<input type="number" step="1" required class="FormNumberInput"  min=1 id="quantity" size ="2" style="width:50px"/></h6>
								<a href="#" class="btn btn-primary" role="button">Add to Cart</a>		
							</div>
						</div>
					</div>
					
						
					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="<?php echo base_url("assets/images/cartImage2.jpg"); ?>" alt="">
							<div class="caption">
								<h4>Apple Laptop</h4>
								<h4> Price : Rs.150,000</h4>
								<h6>Quantity : 
								<input type="number" step="1" required class="FormNumberInput"  min=1 id="quantity" size ="2" style="width:50px"/></h6>
								<a href="#" class="btn btn-primary" role="button">Add to Cart</a>		
							</div>
									
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</div>
	<div class="container">

		<footer>
			<div class="row">
				<div class="col-lg-12">
					<p>Copyright &copy; www.YPayMo.lk 2015</p>
				</div>
			</div>
		</footer>
	</div>
	
</body>
</html>
