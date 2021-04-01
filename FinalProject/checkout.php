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

<?php

include 'nav.php';

?>

<body id="checkout-page">
	<div id="site">
		<div id="content">
			<h1>Checkout</h1>
			<table id="checkout-cart" class="shopping-cart">
				<thead>
					<tr>
						<th scope="col">Item</th>
						<th scope="col">Qty</th>
						<th scope="col">Price</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
			<div id="pricing">

				<p id="shipping">
					<strong>Shipping</strong>: <span id="sshipping"></span>
				</p>

				<p id="sub-total">
					<strong>Total</strong>: <span id="stotal"></span>
				</p>
			</div>

			<form action="order.php" method="get" id="checkout-order-form">
				<h2>Your Details</h2>
				<!--Row starts here-->
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<fieldset id="fieldset-billing">
							<legend>Billing</legend>
							<div>
								<label for="name">Name</label>
								<input type="text" name="name" id="name" data-type="string" data-message="This field cannot be empty" />
							</div>
							<div>
								<label for="email">Email</label>
								<input type="text" name="email" id="email" data-type="expression" data-message="Not a valid email address" />
							</div>
							<div>
								<label for="city">City</label>
								<input type="text" name="city" id="city" data-type="string" data-message="This field cannot be empty" />
							</div>
							<div>
								<label for="address">Address</label>
								<input type="text" name="address" id="address" data-type="string" data-message="This field cannot be empty" />
							</div>
							<div>
								<label for="zip">ZIP Code</label>
								<input type="text" name="zip" id="zip" data-type="string" data-message="This field cannot be empty" />
							</div>
							<div>
								<label for="country">Country</label>
								<select name="country" id="country" data-type="string" data-message="This field cannot be empty">
									<option value="">Select</option>
									<option value="US">Ireland</option>
									<option value="IT">UK</option>
								</select>
							</div>
						</fieldset>
					</div>
					<div class="col-lg-6 col-md-6">
						<fieldset id="fieldset-shipping">

							<legend>Shipping</legend>

							<div>
								<label for="sname">Name</label>
								<input type="text" name="sname" id="sname" data-type="string" data-message="This field cannot be empty" />
							</div>
							<div>
								<label for="semail">Email</label>
								<input type="text" name="semail" id="semail" data-type="expression" data-message="Not a valid email address" />
							</div>
							<div>
								<label for="scity">City</label>
								<input type="text" name="scity" id="scity" data-type="string" data-message="This field cannot be empty" />
							</div>
							<div>
								<label for="saddress">Address</label>
								<input type="text" name="saddress" id="saddress" data-type="string" data-message="This field cannot be empty" />
							</div>
							<div>
								<label for="szip">ZIP Code</label>
								<input type="text" name="szip" id="szip" data-type="string" data-message="This field cannot be empty" />
							</div>
							<div>
								<label for="scountry">Country</label>
								<select name="scountry" id="scountry" data-type="string" data-message="This field cannot be empty">
									<option value="">Select</option>
									<option value="US">Ireland</option>
									<option value="IT">UK</option>
								</select>
							</div>
						</fieldset>
					</div>
				</div>


				<div id="shipping-same">Same as Billing <input type="checkbox" id="same-as-billing" value="" /></div>
				<p><input type="submit" id="submit-order" value="Submit" class="btn" /></p>
		</div>

		<!--Row ends here-->

		</form>
	</div>



	</div>

	<?php

	include 'footer.php';

	?>



</body>

</html>