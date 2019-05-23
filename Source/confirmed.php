<!DOCTYPE html>
<?php 
//Pizza information
$item = $_GET['item'];
$pizzaSize = $_GET['pizzaSize'];
$pizzaCrust = $_GET['pizzaCrust'];
$pizzaSauce = $_GET['pizzaSauce'];
$pizzaCheese = $_GET['pizzaCheese'];
$toppings = $_GET['toppings'];
$itemMessage = $_GET['itemMessage'];

//Delivery information
$name = $_GET['name']; 
$phone = $_GET['phone'];
$email = $_GET['email'];
$streetAddress = $_GET['streetAddress'];
$city = $_GET['city'];
$state = $_GET['state'];
$postalCode = $_GET['postalCode'];
$birthday = $_GET['birthday'];
$ccType = $_GET['ccType'];
$deliveryMessage = $_GET['deliveryMessage'];

?>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Order <?php echo $item; ?> online confirmation | Pizzaaa</title>
		<meta name="description" content="Thank You for your choosing pizza on Pizzaaa Inc. We strive to ship order in 1 hour.">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<!-- Page-level header -->
		<header>
			<a class="logo" href="index.php"><img src="images/favicon.png" height="75" width="75" title="Pizzaaa Inc. Logo" alt="Pizzaaa Inc. Logo" /></a>
			<h1>Order Confirmation</h1>
		</header>
		<!-- Page-level main content -->
		<main>
			<section>
				<h2>You have finished your virtual steps. Now waiting for the real <?php echo $item; ?>.</h2>
				<p>Dear <?php echo $name; ?>,</p>
				<p>Thank You for your choosing pizza on Pizzaaa Inc. We strive to ship order in 1 hour.</p>
				<fieldset>
					<legend><h3>The <?php echo $item; ?>:</h3></legend>
					<p>Size: <strong><?php echo htmlentities($pizzaSize); ?></strong></p>
					<p>Crust: <strong><?php echo $pizzaCrust; ?></strong></p>
					<p>Sauce: <strong><?php echo $pizzaSauce; ?></strong></p>
					<p>Cheese: <strong><?php echo $pizzaCheese; ?></strong></p>
					<p>Toppings: </p>
					<ul>
					<?php 
						foreach ($toppings as $topping)
						{
							echo '<li><strong>'. $topping . '</strong></li>';
						}
					?>
					</ul>
					<p>Message:<strong><?php echo $itemMessage; ?></strong></p>
				</fieldset>
				<fieldset>
					<legend><h3>Will be delivered to:</h3></legend>
					<p><?php echo $name; ?></p>
					<p><?php echo $streetAddress . ',' . $city . ',' . $state; ?></p>
					<p><?php echo $postalCode; ?></p>
					<p><?php echo $phone; ?></p>
					<p><?php echo $email; ?></p>
					<p>Payment Method: <?php echo $ccType; ?></p>
					<p>Your birthday: <?php echo $birthday; ?></p>
					<p>Note:<strong><?php echo $deliveryMessage; ?></strong></p>
				</fieldset>
				<p>We are always working on upgrading our products and services from your comments and suggestions, please reply to our order confirmation email. We value your feedback.</p>
				<p>Enjoy your special pizza,<br>
					The Pizzaaa Inc. Team</p>
			</section>
			<aside>
				<!-- Newsletter Subscribe Form -->
				<fieldset>
					<legend><h3>Subscribe to Newsletter</h3></legend>
					<form action="subscribe.php" method="get">
						<label for="emailAddress">Email</label>
						<input type="email" name="emailAddress" id="emailAddress" required />
						<button type="submit">Subscribe</button>
					</form>
				</fieldset>
				<!-- Ads -->
				<h3>Hot deal</h3>
				<img src="images/promotion-sidebar.png" alt="Pizza Promotion - Pizzaaa"/>
				<p id="demo"></p>
			</aside>
		</main>
		<!-- Page-level footer -->
		<footer>
			<p><small>© 200385752 - Nhat Mai (Nvi) - Assignment 2 - HTML, CSS, and JS.</small></p>
		</footer>
	</body>
</html>
