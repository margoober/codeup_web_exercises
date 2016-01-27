<DOCTYPE html>
	<html>
	<head>
		<title>Rat Quiz</title>
		<style>
			.water {
				background-color: white
				;
			}
		</style>
	</head>
	<body>
		<h2><strong>What kind of rat are you?</strong></h2>
		<form method="GET" action="/rats_nest.php">
			<button type="submit">Find out now!</button>
		</form>
	<hr>
<div class="water">
	<h3><strong>Multiple Choice Survey</strong></h3>
	<p><strong>What is your favorite variation on water?</strong></p>
	<form>
		<label>
		    <input type="radio" name="q1" value="slime">
		    Slime
		</label>
		<label>
		    <input type="radio" name="q1" value="slop">
		    Slop
		</label>
		<label>
		    <input type="radio" name="q1" value="muck">
		    Muck
		</label>
		<label>
		    <input type="radio" name="q1" value="mire">
		    Mire
		</label>
		<label>
		    <input type="radio" name="q1" value="sludge">
		    Sludge
		</label>
		<label>
		    <input type="radio" name="q1" value="splort">
		    Splort
		</label>
		<label>
		    <input type="radio" name="q1" value="green water">
		    Green Water
		</label>
		<label>
		    <input type="radio" name="q1" value="sad_sand">
		    Sad Sand
		</label>
		<label>
		    <input type="radio" name="q1" value="devil's_water">
		    Devil's Water
		</label>
		<br>
		<p><strong>Who do you like to splash around with?</strong></p>
	<select name="splash" id="splash" multiple rows="10" cols="50">
		<option selected disabled>--</option>
		<option value="1">My friends</option>
		<option value="2">My regrets</option>
		<option value="3">My sallies (salamandrès)</option>
		<option value="4">Anyone who floats</option>
		<option value="5">ALL ON MY LONESOME</option>
	</select>
	<br>
	<em>To select more than one, hold down your command key!</em>
	<br>
	<br>
		<button type="submit">Splash Away</button>
	</form>
	<hr>
</div>
<p><strong>What kind of plant are you?</strong></p>
<form>
	<label>
		<input type="radio" name="q2" value="susan_plant">
		Susan's bad dead plant
	</label>
	<label>
		<input type="radio" name="q2" value="venus_potato_pit">
		Venus Potato Pit
	</label>
	<label>
		<input type="radio" name="q2" value="A_boring_ass house_plant">A boring ass house plant
	</label>
	<p>
		<button type="submit">This is truly my plant type</button>
	</p>
</form>
</body>
</html>