<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!--var_dump dumps out the form inputs.-->

<!DOCTYPE html>
<html>
<head>
	<title>My First Form</title>
	<style>
		.lone {
			background-color: blue;
		}
		.alpha_rat {
			background-color: peachpuff;
		}
		.lone_button{
			background-color: green;
			text-align: center;
		}
		.lone_question {
			color: yellow;
			background-color: green;
		}
		.lone_title {
			color: yellow;
		}
	</style>
</head>
<body>

	<h2>Моя Первая Форма</h2>
	
<!--METHOD
GET requests are search forms because GET requests allow you to save the entire GET request in the URL. That means you can make a link out of a search.

This is why POST requests are used for passwords!!!

If you forget to add a method, it defaults to GET.
-->

<!--ACTION
specifies WHO gets the information

Everything after the ?question mark? in the URL is called the QUERY
We use QUERY to get a very specific GET request.
-->
	<form method="GET" action="/myfirstform.php">
	    <p>
	        <label for="username">Username</label>
	        <input id="username" name="name" type="text">
	    </p>
	    <p>
	        <label for="password">Password</label>
	        <input id="password" name="password" type="password">
	    </p>
	    <p>
	        <button type="submit">This is the loooooooooooooooooooooooooooongest button in the world.</button>
	    </p>
	    <br>
	</form>
<!--label for="____" MUST MATCH input id="_____"-->


	<form method="POST" action="/myfirstform.php">
		<p>
			<label for="username">Your Username</label>
			<input placeholder="Username, please." id="your username" name="your name" type="text">
		</p>
		<p>
			<label for="password">Your Password</label>
			<input placeholder="Пароль, пожалуйста" id="your password" name="your password" type="password">

		</p>
		<p>
			<button type="submit">click me 4 a real good time</button>
			<!-- adding value="login" to input type="submit" essentially creates the same thing as a button-->
			<br>
			<button type="submit">Log in</button>
		</p>
	<br>
	</form>
	<hr>
	<br>
		<!--TEXT AND TEXTAREA-->

	<p>
		<input type="hidden" id="first_name" name="first_name" value="" placeholder="First Name">
		<!--Hidden inputs are used for tracking user behavior-->

	</p>
	<p>
		<label for="email_body">Message Body</label>
		<br>
		<textarea id="email_body" name="email_body" rows="5" cols="50">Tell mama a story in this box.</textarea>

	</p>
	<br>
	<hr>

	<p>
		<h2>Email a Pal!</h2>
		<form method="POST" action="/myfirstform.php">
			<p>
				<label for="to">To</label>
				<input placeholder="What's your pal's email?" id="to" name="to" type="text">
			</p>
			<p>
				<label for="from">From</label>
				<input placeholder="What's your email?" id="from" name="from" type="text">
			</p>
			<p>
				<label for="subject">Subject</label>
				<input placeholder="What's youre subject?" id="subject" name="subject" type="text">
			<hr>	
			</p>
			<p>
				<h3>Body</h3>
				<textarea id="body" cols="100" rows="10">Now write a nice email!</textarea>
			</p>
			<p>
				<input type="checkbox" id="save_copy" name="save_copy" value="yes" checked>
				<label for="save_copy">Save a copy to my outbox</label>
			</p>
			<p>
				<input type="checkbox" id="smile" name="smile" value="yes" checked>
				<label for="smile">Send your friend a smiley face!</label>
			</p>
			<p>
				<button type="submit">Put it in the mail!</button>
			</p>


		</form>
	</p>
	<p>
		<h1>Sign up for the Pangolin Forum!</h1>
		<form method="post" action="/myfirstform.php">
			<p>
				<label for="first_name">First Name</label>
				<input placeholder="What's your name!" id="first_name" name="first_name" type="text">
			</p>
			<p>
				<label for="last_name">Last Name</label>
				<input placeholder="AKA your surname" id="last_name" name="last_name" type="text">
			</p>
			<p>
				<label for="email">Your email</label>
				<input placeholder="stick it here!" id="email" name="email" type="text">
			</p>
			<p>
				<label for="password">Create a password!</label>
				<input id="email" name="email" type="password">
			</p>
			<p>
				<label for="confirm">Confirm that puppy!</label>
				<input id="confirm" name="confirm" type="password">
			</p>
			<p>
				<input type="checkbox" id="pangomail" name="pangomail" value="yes">
				<label for="pangomail">Sign me up to receive cute pangolin pics!</label>
			</p>
			<button type="submit">Let's</button>
		</form>
	</p>
	<p>
		<h1>Checkboxes!</h1>
		<input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
<label for="mailing_list">Sign me up for the mailing list!</label>
<hr>
<br>
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
<!-- FIGURE OUT HOW TO DO MULTIPLE POSSIBLE ANSWERS IN CHECKLIST!-->
<hr>

	<div class="lone">
		<p>
		<form>
			<p>
				<div class="lone_title">
					<h1>Lonely Test</h1>
				</div>
				<div class="lone_question">
					<label for="lonely">Are you lonely?</label>
					<br>
				</div>
				<select name="lonely" id="lonely">Are you lonely?
					<option selected disabled>--</option>
					<option value="1">hell ya</option>
					<option value="2">no im ok</option>
				</select>
			</p>
		<div class="lone_button">
			<button type="submit">OK</button>
		</div>
		</form>
		</p>
	</div>

<hr>
<div class="alpha_rat">
	<p>
		<strong>What kind of rat are you?</strong>
	</p>
</div>
		<form method="GET" action="/rats_nest.php">
			<button type="submit">Find out now!</button>
		</form>

</body>
</html>