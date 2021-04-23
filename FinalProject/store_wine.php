<?php

session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if (count($results) > 0) {
		$user = $results;
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

	<script type="text/javascript" src="js/jquery.shop.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="styles.css">
	<title>West Coast Graphics</title>
</head>

<body>


	<?php
	include 'nav.php';
	?>

	<!--Main container-->




	<div id="site">
		<div id="content">

			<!--First row-->
			<div class="row mx-auto">

				<div class="col-lg-2">

					<?php
					include 'includes/categories.php';
					?>

					<!--Product Column-->
					<div class="col-lg-10 mt-4">
						<div class="row text-center">

							<!--Product card-->
							<div class="col-sm-6 col-lg-4 col-md-4 mb-4">
								<div class="card h-100">
									<a href=""><img class="card-img-top img-fluid" src="img/company-shirt1.jpg" alt="Custom sticker"></a>
									<a href="" onclick="window.open('img/company-shirt1.jpg','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;">Click here to expand</a>
									<div class="card-body" data-name="Custom Tshirt" data-price="15.00">
										<h3 class="product-name">Multicolor Logo Shirt</h3>
										<h2 class="product-price">&euro; 15.00</h2>
										<form class="add-to-cart" action="cart.php" method="get">
											<div>
												<label for="qty-1">Quantity</label>
												<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
											</div>
											<p><input type="submit" value="Add to cart" class="btn btn-primary mt-3" /></p>
										</form>
									</div>
								</div>
							</div>

							<!--Product card-->
							<div class="col-sm-6 col-lg-4 col-md-4 mb-4 d-none d-md-block">
								<div class="card h-100">
									<a href=""><img class="card-img-top img-fluid" src="img/company-shirt4.jpg" alt="Custom sticker"></a>
									<a href="" onclick="window.open('img/company-shirt4.jpg','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;">Click here to expand</a>
									<div class="card-body" data-name="Company TShirt" data-price="12.50">
										<h3 class="product-name">Single Colour Logo</h3>
										<h2 class="product-price">&euro; 12.50</h2>
										<form class="add-to-cart" action="cart.php" method="get">
											<div>
												<label for="qty-1">Quantity</label>
												<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
											</div>
											<p><input type="submit" value="Add to cart" class="btn btn-primary mt-3" /></p>
										</form>
									</div>
								</div>
							</div>
							<!--Product card-->
							<!--Product card-->
							<div class="col-sm-6 col-lg-4 col-md-4 mb-4 d-none d-md-block">
								<div class="card h-100">
									<a href=""><img class="card-img-top img-fluid" src="img/BackBlue.png" alt="Custom sticker"></a>
									<a href="" onclick="window.open('img/BackBlue.png','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=400px'); return false;">Click here to expand</a>
									<div class="card-body" data-name="Card Sticker" data-price="15.00">
										<h3 class="product-name">Single Color Logo</h3>
										<h2 class="product-price">&euro; 15.00</h2>
										<form class="add-to-cart" action="cart.php" method="get">
											<div>
												<label for="qty-1">Quantity</label>
												<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
											</div>
											<p><input type="submit" value="Add to cart" class="btn btn-primary mt-3" /></p>
										</form>
									</div>
								</div>
							</div>
							<!--Produvt Crad end-->

						</div>
					</div>

				</div>
				<!--First row ends here-->

				<!--Second row starts here-->

				<div class="row mt-5 mx-auto">

					<div class="col-lg-2">

					</div>

					<!--Product Column-->
					<div class="col-lg-10 mt-4">
						<div class="row text-center">

							<!--Product card-->
							<div class="col-sm-6 col-lg-4 col-md-4 mb-4">
								<div class="card h-100">
									<a href="img/Custom-van1.jpg" target="_blank"><img class="card-img-top img-fluid" src="img/Custom-van1.jpg" alt="Custom sticker"></a>
									<a href="" onclick="window.open('img/Custom-van1.jpg','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;">Click here to expand</a>
									<div class="card-body" data-name="Van side decal" data-price="50">
										<h3 class="product-name">Van side decal 25'x25'</h3>
										<h2 class="product-price">&euro; 50</h2>
										<form class="add-to-cart" action="cart.php" method="get">
											<div>
												<label for="qty-1">Quantity</label>
												<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
											</div>
											<p><input type="submit" value="Add to cart" class="btn btn-primary mt-3" /></p>
										</form>
									</div>
								</div>

							</div>

							<!--Product card-->
							<div class="col-sm-6 col-lg-4 col-md-4 mb-4 d-none d-md-block">
								<div class="card h-100">
									<a href=""><img class="card-img-top img-fluid" src="img/Card-sticker-2.jpg" alt="Custom sticker"></a>
									<a href="" onclick="window.open('img/Card-sticker-2.jpg','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;">Click here to expand</a>
									<div class="card-body" data-name="Card Sticker" data-price="7.50">
										<h3 class="product-name">10 Single Color Stickers</h3>
										<h2 class="product-price">&euro; 2.50</h2>
										<form class="add-to-cart" action="cart.php" method="get">
											<div>
												<label for="qty-1">Quantity</label>
												<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
											</div>
											<p><input type="submit" value="Add to cart" class="btn btn-primary mt-3" /></p>
										</form>
									</div>
								</div>

							</div>
							<!--Product card-->
							<div class="col-sm-6 col-lg-4 col-md-4 mb-4 d-none d-md-block">
								<div class="card h-100">
									<a href=""><img class="card-img-top img-fluid" src="img/Custom-van-back.jpg" alt="Custom sticker"></a>
									<a href="" onclick="window.open('img/Custom-van-back.jpg','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;">Click here to expand</a>
									<div class="card-body" data-name="Van sign back" data-price="50">
										<h3 class="product-name">Van rear sign 25'x25'</h3>
										<h2 class="product-price">&euro; 50</h2>
										<form class="add-to-cart" action="cart.php" method="get">
											<div>
												<label for="qty-1">Quantity</label>
												<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
											</div>
											<p><input type="submit" value="Add to cart" class="btn btn-primary mt-3" /></p>
										</form>
									</div>
								</div>

							</div>
							<!--Produvt Crad end-->

						</div>
					</div>

				</div>

			</div>
			<!--Second row ends here-->

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