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
?>

<html lang="en">
	<head>
	<meta charset="utf-8" />
		<title>Delivery and Payment Information to get your <?php echo $item; ?> | Pizzaaa</title>
		<meta name="description" content="Pizzaaa! Choose your details ingredients to make your <?php echo $item; ?> yummy"/>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<header>
			<a class="logo" href="index.php"><img src="images/favicon.png" height="75" width="75" title="Pizzaaa Inc. Logo" alt="Pizzaaa Inc. Logo" /></a>
			<h1>Delivery and Payment Information</h1>
		</header>
		<main>
			<section>
				<h2>We cannot deliver your <?php echo $item; ?> without your information!</h2>
				<!-- Send delivery data to confirmed.php when user press the submit button -->
				<form action="confirmed.php" method="GET">
					<!-- Save order value for sending to next step -->
					<input type="text" name="item" hidden value="<?php echo $item; ?>"/>
					<input type="text" name="pizzaSize" hidden value="<?php echo htmlentities($pizzaSize); ?>"/>
					<input type="text" name="pizzaCrust" hidden value="<?php echo $pizzaCrust; ?>"/>
					<input type="text" name="pizzaSauce" hidden value="<?php echo $pizzaSauce; ?>"/>
					<input type="text" name="pizzaCheese" hidden value="<?php echo $pizzaCheese; ?>"/>
					<?php 
						foreach ($toppings as $topping)
						{
							echo '<input type="text" name="toppings[]" hidden value="'. $topping . '"/>';
						}
					?>
					<input type="text" name="itemMessage" hidden value="<?php echo $itemMessage; ?>"/>
					<!-- Let user input their Delivery Information -->
					<fieldset>
						<legend><h3>Delivery Information</h3></legend>
						<div>
							<label for="name">Full Name</label>
							<input type="text" name="name" id="name" required="required" size="20" placeholder="Your Full Name"/>
						</div>
						<div>
							<label for="phone">Phone</label>
							<input type="tel" name="phone" required="required" id="phone" size="20" placeholder="000-000-0000" pattern="[0-9]{3}[ -][0-9]{3}[ -][0-9]{4}"/>
						</div>
						<div>
							<label for="email">Email</label>
							<input type="email" name="email" id="email" size="25" placeholder="example@mail.com"/>
						</div>
						<div>
							<label for="streetAddress">Street Address</label>
							<input type="text" size="25" required="required" name="streetAddress" id="streetAddress" placeholder="Street Number, Street Name"/>
						</div>
						<div>
							<label for="city">City</label>
							<input type="text" size="15" required="required" name="city" id="city"/>
						</div>
						<div>
							<label for="state">State/Province/Region</label>
							<input type="text" size="3" required="required" name="state" id="state"/>
						</div>
						<div>
							<label for="postalCode">Zip/Postal Code</label>
							<input type="text" name="postalCode" required="required" size="10" id="postalCode"/>
						</div>
					</fieldset>
					<!-- Let user input the payment information -->
					<fieldset>
						<legend><h3>Credit Card Details</h3></legend>
							<!-- <label for="amex">American Express</label> -->
							<label>
								<input type="radio" name="ccType" id="amex" value="American Express" />
								<img class="payment" src="images/icon-american-express-payment.png" alt="American Express Payment"/>
							</label>
							<!-- <label for="mc">MasterCard</label>	 -->
							<label>
								<input type="radio" name="ccType" id="mc" value="MasterCard" />
								<img class="payment" src="images/icon-mastercard-payment.png" alt="MasterCard Payment"/>
							</label>
							<!-- <label for="visa">VISA</label>	 -->
							<label>
								<input type="radio" name="ccType" id="visa" checked value="VISA"/>
								<img class="payment" src="images/icon-visa-payment.png" alt="VISA Payment"/>
							</label>
						<div>
							<label for="ccNumber">Credit Card Number</label>
							<input id="ccNumber" type="number" required="required" placeholder="16 digits" name="ccNumber" />
						</div>
						<div>
							<label for="ccYear">Expiration Year</label>
							<select name="ccYear" id="ccYear">
								<option value="2018">18</option>
								<option value="2019">19</option>
								<option value="2020">20</option>
								<option value="2021">21</option>
								<option value="2022">22</option>
								<option value="2023">23</option>
								<option value="2024">24</option>
							</select>
						</div>
						<div>
							<label for="ccMonth">Expiration Month</label>
							<select name="ccMonth" id="ccMonth">
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</div>
						<div>
							<label for="ccSecure">CVV</label>
							<input id="ccSecure" required="required" type="number" size="7" placeholder="3 digits" name="ccSecure" />
						</div>
					</fieldset>
					<!-- Let user input other information -->
					<fieldset>
						<legend><h3>Other Form Elements</h3></legend>
						<p>Please leave some more information having better services from us.</p>
						<div>
							<label for="birthday">Birthday</label>
							<input type="date" name="birthday" id="birthday"/>
						</div>
						<div>
							<label for="deliveryMessage">Note</label>
							<textarea rows="10" cols="20" name="deliveryMessage" id="deliveryMessage" placeholder="Leave your note here!"></textarea>
						</div>
					</fieldset>
					<!-- Submit button and Reset button -->
					<button type="submit" class="submit">Place Order</button>
					<button type="reset" class="reset">Clear Form</button>
				</form>
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
		<footer>
			<p><small>© 200385752 - Nhat Mai (Nvi) - Assignment 2 - HTML, CSS, and JS.</small></p>
		</footer>
	</body>
</html>
