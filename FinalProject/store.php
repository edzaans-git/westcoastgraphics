<!doctype html>
<html lang="en">
	<head>
		<title>Winery</title>
		<meta charset="utf-8" />
		<!-- Required meta tag for Bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    	<link rel="stylesheet" href="styles.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.shop.js"></script>
	</head>
	<body>

	
		<?php
            include 'nav.php';
        ?>
	

		<div id="site">
			<header id="masthead">
				<h1>Winery <span class="tagline">Wines for web developers since 1999</h1>
			</header>
			<div id="content">
				<div id="products">
					<ul>
						<li>
							<div class="product-image">
								<img src="images/wine1.jpg" alt="" />
							</div>
							<div class="product-description" data-name="Wine #1" data-price="5">
								<h3 class="product-name">Wine #1</h3>
								<p class="product-price">&euro; 5</p>
								<form class="add-to-cart" action="cart.php" method="get">
									<div>
										<label for="qty-1">Quantity</label>
										<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
									</div>
									<p><input type="submit" value="Add to cart" class="btn" /></p>
								</form>
							</div>
						</li>
						<li>
							<div class="product-image">
								<img src="images/wine2.jpg" alt="" />
							</div>
							<div class="product-description" data-name="Wine #2" data-price="8">
								<h3 class="product-name">Wine #2</h3>
								<p class="product-price">&euro; 8</p>
								<form class="add-to-cart" action="cart.php" method="get">
									<div>
										<label for="qty-2">Quantity</label>
										<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
									</div>
									<p><input type="submit" value="Add to cart" class="btn" /></p>
								</form>
							</div>
						</li>

						<li>
							<div class="product-image">
								<img src="images/wine3.jpg" alt="" />
							</div>
							<div class="product-description" data-name="Wine #3" data-price="11">
								<h3 class="product-name">Wine #3</h3>
								<p class="product-price">&euro; 11</p>
								<form class="add-to-cart" action="cart.php" method="get">
									<div>
										<label for="qty-3">Quantity</label>
										<input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
									</div>
									<p><input type="submit" value="Add to cart" class="btn" /></p>
								</form>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<footer>
		<?php
            include_once '../footer.php';
        ?>
		</footer>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script>$(document).ready(function(){ $("h1").addClass("animated bounce"); });</script>
	</body>
</html>	
