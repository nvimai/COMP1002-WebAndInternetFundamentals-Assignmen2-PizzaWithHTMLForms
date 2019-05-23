<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Home | Pizzaaa</title>
		<meta name="description" content="Pizzaaa! Let's get your favourite pizza with Cheese steak, pepperoni, super supreme, meat, chicken caesar, veggie, bbq chiken, ...">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<!-- Page-level header -->
		<header>
			<a class="logo" href="index.php"><img src="images/favicon.png" height="75" width="75" title="Pizzaaa Inc. Logo" alt="Pizzaaa Inc. Logo" /></a>
			<h1>Home</h1>
		</header>
		<!-- Page-level main content -->
		<main>
			<!-- News Section -->
			<section >
				<h2>Choose your favourite pizza</h2>
				<div class="grid-container">
					<article class="grid-item">
						<a href="details.php?item=Pizza+BBQ+Chicken">
							<h3>BBQ Chicken</h3>
							<img src="images/pizza-bbq-chicken.png" alt="BBQ Chicken Pizza" Title="BBQ Chicken Pizza"/>
						</a>
					</article>
					<article class="grid-item">
						<a href="details.php?item=Pizza+Canadian">
							<h3>Canadian</h3>
							<img src="images/pizza-canadian.png" alt="Canadian Pizza" Title="Canadian Pizza"/>
						</a>
					</article>
					<article class="grid-item">
						<a href="details.php?item=Pizza+Cheese">
							<h3>Cheese</h3>
							<img src="images/pizza-cheese.png" alt="Cheese Pizza" Title="Cheese Pizza"/>
						</a> 
					</article>
					<article class="grid-item">
						<a href="details.php?item=Pizza+Chicken+Caesar">
							<h3>Chicken Caesar</h3>
							<img src="images/pizza-chicken-caesar.png" alt="Chicken Caesar Pizza" Title="Chicken Caesar Pizza"/>
						</a>
					</article>
					<article class="grid-item">
						<a href="details.php?item=Pizza+Meat">	
							<h3>Meat</h3>
							<img src="images/pizza-meat.png" alt="Meat Pizza" Title="Meat Pizza"/>
						</a>
					</article>
					<article class="grid-item">
						<a href="details.php?item=Pizza+Pepperoni">	
							<h3>Pepperoni</h3>
							<img src="images/pizza-pepperoni.png" alt="Pepperoni Pizza" Title="Pepperoni Pizza"/>
						</a>
					</article>
					<article class="grid-item">
						<a href="details.php?item=Pizza+Supreme">
							<h3>Supreme</h3>
							<img src="images/pizza-supreme.png" alt="Supreme Pizza" Title="Supreme Pizza"/>
						</a>
					</article>
					<article class="grid-item">
						<a href="details.php?item=Pizza+Veggie">
							<h3>Veggie</h3>
							<img src="images/pizza-veggie.png" alt="Veggie Pizza" Title="Veggie Pizza"/>
						</a>
					</article>
				</div>
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