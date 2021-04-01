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

	<div id="site">
		<div id="content">
			<h1>Your Shopping Cart</h1>
			<form id="shopping-cart" action="cart.php" method="get">
				<table class="shopping-cart">
					<thead>
						<tr>
							<th scope="col">Item</th>
							<th scope="col">Qty</th>
							<th scope="col" colspan="2">Price</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
				<p id="sub-total">
					<strong>Sub Total</strong>: <span id="stotal"></span>
				</p>
				<ul id="shopping-cart-actions">
					<li>
						<input type="submit" name="update" id="update-cart" class="btn" value="Update Cart" />
					</li>
					<li>
						<input type="submit" name="delete" id="empty-cart" class="btn" value="Empty Cart" />
					</li>
					<li>
						<a href="store_wine.php" class="btn">Continue Shopping</a>
					</li>
					<li>
						<a href="checkout.php" class="btn">Go To Checkout</a>
					</li>
				</ul>
			</form>
		</div>



	</div>

	<?php
	include 'footer.php';
	?>




</body>

</html>