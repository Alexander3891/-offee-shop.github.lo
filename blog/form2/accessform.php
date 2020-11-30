<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>The Starbuzz Bean Machine</title>
	<link rel="stylesheet" href="starbuzz.css">
	<link rel="stylesheet" href="accessform.css">
</head>

<body>

	<h1>The Starbuzz Bean Machine</h1>
	<h2>Fill out the form below and click "order now" to order</h2>
	<div class="wrapper">
		<form action="http://www.starbuzzcoffee.com/processorder.php" method="post">
			<fieldset>
				<legend>Order details</legend>
				<div class="tableRow">
					<label for="beans">
						Choose your beans:
					</label>
					<select id="beans" name="beans">
						<option value="House Blend">House Blend</option>
						<option value="Bolivia">Shade Grown Bolivia Supremo</option>
						<option value="Guatemala">Organic Guatemala</option>
						<option value="Kenya">Kenya</option>
					</select>
				</div>
				<div class="tableRow">
					<label>Type:</label>
					<p>
						<input type="radio" id="whole_beantype" name="beantype" value="whole">
						<label for="whole_beantype">Whole bean</label><br>
						<input type="radio" id="ground_beantype" name="beantype" value="ground" checked>
						<label for="ground_beantype">Ground</label>
					</p>
				</div>
				<div class="tableRow">
					<label for="bags">Number of bags:</label>
					<input type="number" id="bags" name="bags" min="1" max="10">
				</div>
				<div class="tableRow">
					<label for="date">Must arrive by date:</label>
					<input type="date" name="date">
				</div>
				<div class="tableRow">
					<label>Extras:</label>
					<p>
						<input type="checkbox" id="giftwrap_extras" name="extras[]" value="giftwrap">
						<label for="giftwrap_extras">Gift wrap</label><br>
						<input type="checkbox" id="catalog_extras" name="extras[]" value="catalog" checked>
						<label for="catalog_extras">Include catalog with order</label>
					</p>
				</div>
			</fieldset>
			<fieldset>
				<legend>Ship to</legend>
				<div class="tableRow">
					<label for="name">Name:</label>
					<input type="text" id="name" name="name" value="" placeholder="Buckaroo Banzai" required>
				</div>
				<div class="tableRow">
					<label for="address">Address:</label>
					<input type="text" id="address" name="address" value="" placeholder="Banzai Institute" required>
				</div>
				<div class="tableRow">
					<label for="city">City:</label>
					<input type="text" id="city" name="city" value="" placeholder="Los Angeles" required>
				</div>
				<div class="tableRow">
					<label for="state">State:</label>
					<input type="text" id="state" name="state" value="" placeholder="CA" required>
				</div>
				<div class="tableRow">
					<label for="zip">Zip:</label>
					<input type="text" id="zip" name="zip" value="" placeholder="90050" required>
				</div>
				<div class="tableRow">
					<label for="phone">Phone:</label>
					<input type="tel" id="phone" name="phone" value="" placeholder="310-555-1212" required>
				</div>
				<div class="tableRow">
					<label for="comments">Customer Comments:</label>
					<textarea id="comments" name="comments"></textarea>
				</div>
				<div class="tableRow">
					<label></label>
					<input type="submit" value="Order Now">


				</div>


			</fieldset>
			<fieldset>
				<legend>Сome back</legend>
				<div class="home">
					<a href="../index.php">HOME</a>
				</div>
			</fieldset>

		</form>
	</div>
</body>

</html>