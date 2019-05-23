<?php $item = $_GET['item']; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8" />
		<title>Order <?php echo $item; ?> online details | Pizzaaa</title>
		<meta name="description" content="Pizzaaa! Choose your details ingredients to make your <?php echo $item; ?> yummy"/>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<header>
			<a class="logo" href="index.php"><img src="images/favicon.png" height="75" width="75" title="Pizzaaa Inc. Logo" alt="Pizzaaa Inc. Logo" /></a>
			<h1>Order <?php echo $item; ?> online details</h1>
		</header>
		<main>
			<section>
				<h2>Please help yourself to have your special pizza from these ingredients below.</h2>
				<!-- Send order data to delivery.php when user press the submit button -->
				<form action="delivery.php" method="GET">
					<input type="text" hidden name="item" id="item" value="<?php echo $item; ?>"/>
					<fieldset>
						<!-- Let user choosing one of these pizza sizes -->
						<legend><h3>Size</h3></legend>
							<div>
								<label for="14Large">14&#34; Large</label>
								<input type="radio" name="pizzaSize" id="14Large" value="14&#34; Large" checked="checked" />
							</div>
							<div>
								<label for="12Medium">12&#34; Medium</label>	
								<input type="radio" name="pizzaSize" id="12Medium" value="12&#34; Medium"  />
							</div>
							<div>
								<label for="9Small">9&#34; Small</label>	
								<input type="radio" name="pizzaSize" id="9Small" value="9&#34; Small"  />
							</div>
					</fieldset>
					<fieldset>
						<!-- Let user choosing one of these type of pizza crust -->
						<legend><h3>Crust</h3></legend>
							<div>
								<label for="panPizza">Pan Pizza</label>	
								<input type="radio" name="pizzaCrust" id="panPizza" value="Pan Pizza" checked="checked" />
							</div>
							<div>
								<label for="stuffedCrust">Stuffed Crust</label>	
								<input type="radio" name="pizzaCrust" id="stuffedCrust" value="Stuffed Crust"  />
							</div>
							<div>
								<label for="thinCrispy">Thin & Crispy</label>
								<input type="radio" name="pizzaCrust" id="thinCrispy" value="Thin & Crispy"  />
							</div>
					</fieldset>
					<fieldset>
						<!-- Let user choosing amount of these type of sauces -->
						<legend><h3>Sauce</h3></legend>
							<select name="pizzaSauce" id="pizzaSauce">
								<optgroup label="Tomato Sauce">
									<option value="Regular - Tomato Sauce">Regular - Tomato Sauce</option>
									<option value="Light - Tomato Sauce">Light - Tomato Sauce</option>
									<option value="Extra - Tomato Sauce">Extra - Tomato Sauce</option>
								</optgroup>
								<optgroup label="Alfredo Sauce">
									<option value="Regular - Alfredo Sauce">Regular - Alfredo Sauce</option>
									<option value="Light - Alfredo Sauce">Light - Alfredo Sauce</option>
									<option value="Extra - Alfredo Sauce">Extra - Alfredo Sauce</option>
								</optgroup>
								<optgroup label="BBQ Sauce">
									<option value="Regular - BBQ Sauce">Regular - BBQ Sauce</option>
									<option value="Light - BBQ Sauce">Light - BBQ Sauce</option>
									<option value="Extra - BBQ Sauce">Extra - BBQ Sauce</option>
								</optgroup>
							</select>
					</fieldset>
					<fieldset>
						<!-- Let user choosing one of these type of cheeses -->
						<legend><h3>Cheese</h3></legend>
							<div>
								<label for="cheeseRegular">Regular</label>	
								<input type="radio" name="pizzaCheese" id="cheeseRegular" value="Regular" checked="checked" />
							</div>
							<div>
								<label for="cheeseRemove">Remove</label>	
								<input type="radio" name="pizzaCheese" id="cheeseRemove" value="Remove"  />
							</div>
							<div>
								<label for="cheeseLight">Light</label>	
								<input type="radio" name="pizzaCheese" id="cheeseLight" value="Light"  />
							</div>
							<div>
								<label for="cheeseExtra">Extra</label>
								<input type="radio" name="pizzaCheese" id="cheeseExtra" value="Extra"  />
							</div>
					</fieldset>
					<fieldset>
						<!-- User chooses the toppings if they like or not -->
						<legend><h3>Toppings</h3></legend>
							<div>
								<label for="pepperoni">Pepperoni</label>
								<!-- Remove name attribute of input for preventing to send value  -->
								<input type="checkbox" checked="checked" id="pepperoni" onchange="pepperoniChange()">
								<!-- Only send value if the checkbox element above is checked and the select element below is not disabled -->
								<select name="toppings[]" id="toppingsPepperoni">
									<option value="Regular - Pepperoni">Regular</option>
									<option value="Double - Pepperoni">Double</option>
								</select>
							</div>
							<div>
								<label for="baconCrumble">Bacon Crumble</label>
								<!-- Remove name attribute of input for preventing to send value -->
								<input type="checkbox" checked="checked" id="baconCrumble" onchange="baconCrumbleChange()">
								<!-- Only send value if the checkbox element above is checked and the select element below is not disabled -->
								<select name="toppings[]" id="toppingsBaconCrumble">
									<option value="Regular - Bacon Crumble">Regular</option>
									<option value="Double - Bacon Crumble">Double</option>
								</select>
							</div>
							<div>
								<label for="ham">Ham</label>
								<!-- Remove name attribute of input for preventing to send value -->
								<input type="checkbox" checked="checked"  id="ham" onchange="hamChange()">
								<!-- Only send value if the checkbox element above is checked and the select element below is not disabled -->
								<select name="toppings[]" id="toppingsHam">
									<option value="Regular - Ham">Regular</option>
									<option value="Double - Ham">Double</option>
								</select>
							</div>
							<div>
								<label for="beef">Beef</label>
								<!-- Remove name attribute of input for preventing to send value -->
								<input type="checkbox" checked="checked"  id="beef" onchange="beefChange()">
								<!-- Only send value if the checkbox element above is checked and the select element below is not disabled -->
								<select name="toppings[]" id="toppingsBeef">
									<option value="Regular - Beef">Regular</option>
									<option value="Double - Beef">Double</option>
								</select>
							</div>
							<div>
								<label for="grilledChickenBreast">Grilled Chicken Breast</label>
								<!-- Remove name attribute of input for preventing to send value -->
								<input type="checkbox" checked="checked" id="grilledChickenBreast" onchange="grilledChickenBreastChange()">
								<!-- Only send value if the checkbox element above is checked and the select element below is not disabled -->
								<select name="toppings[]" id="toppingsGrilledChickenBreast">
									<option value="Regular - Grilled Chicken Breast">Regular</option>
									<option value="Double - Grilled Chicken Breast">Double</option>
								</select>
							</div>
					</fieldset>
					<fieldset>
						<!-- Let user leave a message for more order information -->
						<legend><h3>Other order Information</h3></legend>
						<div>
							<label for="itemMessage">Messages</label>
							<textarea rows="10" cols="20" name="itemMessage" id="itemMessage" placeholder="Leave any messages here!"></textarea>
						</div>
					</fieldset>
					<!-- Submit button and Reset button -->
					<button type="submit" class="submit">Check Out</button>
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
		
		<script>
			//Disable sending topping value if user does not choose the pepperoni topping
			function pepperoniChange() {
				var inputElements = document.getElementById('pepperoni');
				if(inputElements.checked)
					document.getElementById("toppingsPepperoni").disabled = false;
				else
					document.getElementById("toppingsPepperoni").disabled = true;
			}
			//Disable sending topping value if user does not choose the Bacon Crumble topping
			function baconCrumbleChange() {
				var inputElements = document.getElementById('baconCrumble');
				if(inputElements.checked)
					document.getElementById("toppingsBaconCrumble").disabled = false;
				else
					document.getElementById("toppingsBaconCrumble").disabled = true;
			}
			//Disable sending topping value if user does not choose the Ham topping
			function hamChange() {
				var inputElements = document.getElementById('ham');
				if(inputElements.checked)
					document.getElementById("toppingsHam").disabled = false;
				else
					document.getElementById("toppingsHam").disabled = true;
			}
			//Disable sending topping value if user does not choose the Beef topping
			function beefChange() {
				var inputElements = document.getElementById('beef');
				if(inputElements.checked)
					document.getElementById("toppingsBeef").disabled = false;
				else
					document.getElementById("toppingsBeef").disabled = true;
			}
			//Disable sending topping value if user does not choose the Grilled Chicken Breast topping
			function grilledChickenBreastChange() {
				var inputElements = document.getElementById('grilledChickenBreast');
				if(inputElements.checked)
					document.getElementById("toppingsGrilledChickenBreast").disabled = false;
				else
					document.getElementById("toppingsGrilledChickenBreast").disabled = true;
			}
		</script>
	</body>
</html>
