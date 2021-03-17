<!doctype html>
<html lang="en">

<head>
	<title>Winery</title>
	<meta charset="utf-8" />
	<!-- Required meta tag for Bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="styles.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.shop.js"></script>
</head>

<body>


	<?php
	include 'nav.php';
	?>

	<!--Main container-->
	<div class="container">

		<div id="site">
			<div id="content">

				<!--First row-->
				<div class="row">

					<div class="col-lg-3">

						<h1 class="my-4">Categories</h1>
						<div class="list-group">
							<a href="shirts.php" class="list-group-item">T Shirts</a>
							<a href="#" class="list-group-item">Hoodies</a>
							<a href="#" class="list-group-item">Jumpers</a>
							<a href="#" class="list-group-item">Heat transfers</a>
							<a href="#" class="list-group-item">Decals</a>
						</div>

					</div>

					<div class="col-lg-9 mt-4">
						<div class="row">
							<!--Product card-->
							<div class="col-lg-4 col-md-6 mb-4">
								<div class="card h-100">
									<a href="#"><img class="card-img-top" src="img/430.jpg" alt=""></a>
									<div class="card-body" data-name="Tshirt-1" data-price="10">
										<h3 class="product-name">Tshirt 1</h3>
										<p class="product-price">&euro; 10</p>
										<form class="add-to-cart" action="cart.php" method="get">
											<div>
												<label for="qty-1">Quantity</label>
												<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
											</div>
											<p><input type="submit" value="Add to cart" class="btn" /></p>
										</form>
									</div>
								</div>
								<div class="card-footer">
									<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
								</div>
							</div>
							<!--Product card-->
							<div class="col-lg-4 col-md-6 mb-4">
								<div class="card h-100">
									<a href="#"><img class="card-img-top" src="img/430.jpg" alt=""></a>
									<div class="card-body" data-name="Tshirt-2" data-price="20">
										<h3 class="product-name">Tshirt 2</h3>
										<p class="product-price">&euro; 20</p>
										<form class="add-to-cart" action="cart.php" method="get">
											<div>
												<label for="qty-1">Quantity</label>
												<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
											</div>
											<p><input type="submit" value="Add to cart" class="btn" /></p>
										</form>
									</div>
								</div>
								<div class="card-footer">
									<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
								</div>
							</div>
							<!--Product card-->
							<div class="col-lg-4 col-md-6 mb-4">
								<div class="card h-100">
									<a href="#"><img class="card-img-top" src="img/430.jpg" alt=""></a>
									<div class="card-body" data-name="Tshirt 3" data-price="30">
										<h3 class="product-name">Tshirt 3</h3>
										<p class="product-price">&euro; 30</p>
										<form class="add-to-cart" action="cart.php" method="get">
											<div>
												<label for="qty-1">Quantity</label>
												<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
											</div>
											<p><input type="submit" value="Add to cart" class="btn" /></p>
										</form>
									</div>
								</div>
								<div class="card-footer">
									<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!--First row ends here-->




			</div>
		</div>
	</div>
	<!--Main container ends here-->





	<footer>
		<?php
		include 'footer.php';
		?>
	</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$("h1").addClass("animated bounce");
		});
	</script>
</body>

</html>