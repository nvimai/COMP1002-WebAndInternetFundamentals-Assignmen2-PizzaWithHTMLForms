<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Subscribe | Pizzaaa</title>
		<meta name="description" content="You have subscribed our Pizzaaa Inc. website to have newsletter: discount, flyers, coupons, promotions,...">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<!-- Page-level header -->
		<header>
			<a class="logo" href="index.php"><img src="images/favicon.png" height="75" width="75" title="Pizzaaa Inc. Logo" alt="Pizzaaa Inc. Logo" /></a>
			<h1>Subscribe for Newsletter from Pizzaaa Inc.</h1>
		</header>
		<!-- Page-level main content -->
		<main>
			<section>
				<h2>Thank You for Subscribing</h2>
				<?php
				// Capture the value of the emailAddress INPUT from the index.php page by defining a PHP variable called '$emailAddress' and setting the value to the email address as entered by the user in the FORM on index.php
					$emailAddress = $_GET['emailAddress'];
				// Use the PHP function, echo() to create an HTML paragraph element that confirms the user's email address -->
					echo('<p>Your email address, '.$emailAddress.' has been added to our list of subscribers. Now you will have our newsletter: discount, flyers, coupons, promotions,...</p>');
				?>
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
