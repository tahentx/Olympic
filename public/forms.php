<!DOCTYPE html>
<html>
<head>
	<title>2/7 Homework</title>
</head>
<body>
	<h1>PIZZA TIME BABY!!!</h1>

	<iframe src="//giphy.com/embed/bxQKzvlXsCXpm" width="480" height="250" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/pizza-chris-evans-literally-me-bxQKzvlXsCXpm">via GIPHY</a></p>

    <p>Will this be delivery or pickup?</p>
	<label><input type="radio" name="q1" value="Delivery">
    Delivery</label>
	<label><input type="radio" name="q1" value="Pickup">
    Pickup</label>			

    <h3>Delivery Options</h3>
    <label for="os">What part of town are you in? </label>
	<select id="area" name="area[]" multiple>
    <option value="North">North</option>
    <option value="South">South</option>
    <option value="East">East</option>
    <option value="West">West</option>
	</select>

	<h3>Please Select Your Crust Type</h3>
	<label for="Crust">Select your crust type: </label>
	<select id="Crust" name="Crust">
    <option>Thin</option>
    <option>Deep Dish</option>
    <option>Stuffed</option>
    <option>Chicago-style</option>
    <option>No crust</option>
	</select><br>
	<br>
	
	<h3>What size, playa?</h3>
	<label for="size">Select your pizza size: </label>
	<select id="size" name="size">
    <option>Small</option>
    <option>Medium</option>
    <option>Large</option>
    <option>X-Large</option>
    </select>

	<h3>Pick your toppings, champ!</h3>
	<p>What toppings do you like?</p>
	<label><input type="checkbox" id="os1" name="os[]" value="Pepperoni"> Pepperoni</label>
	<label><input type="checkbox" id="os2" name="os[]" value="Sausage"> Sausage</label>
	<label><input type="checkbox" id="os3" name="os[]" value="Canadian Bacon"> Canadian Bacon</label><br>
	<br>

	<h3>Anything else?</h3>
	<p>We got extras to add to your order!</p>
	<label><input type="checkbox" id="os1" name="os[]" value="Buffalo Wings">Buffalo Wings</label>
	<label><input type="checkbox" id="os2" name="os[]" value="Breadsticks"> Breadsticks</label>
	<label><input type="checkbox" id="os3" name="os[]" value="Jalepeno Poppers"> Jalepeno Poppers</label><br>
	<br>
	<p>
	<label for="special delivery instructions">Is there anything we need to do when we drop off your pizza?: </label><br>
	<textarea id="special delivery instructions" name="special delivery instructions" rows="5" cols="40"> ex. enter gate code, leave on front step, etc. </textarea><br>
	<br>
	<label for="Promo Code">Do you have a promo code?</label>
	<input type="text" id="promo code" name="promo code" value=ex"PIZZA123">
	</p>
	<br>
	<button type="submit">Let's chow!</button>

</body>
</html>