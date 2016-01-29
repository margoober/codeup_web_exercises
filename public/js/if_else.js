// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'purple', 'violet'];
var randColor = colors[Math.floor(Math.random()*colors.length)];

var name = prompt("What is your name?")
var favorite = prompt("What is your favorite color, " + name + "?"); // TODO: change this to your favorite color from the list

console.log("Your favorite color is " + favorite + "?")
console.log((favorite == randColor)? "You have the same favorite as me! We both love " + randColor + "...": "Our tastes diverge. Hmmph. Mine is " + randColor +"...")

if (randColor == "red") {
	console.log("Because red is the color of the redsnake.");
} else if (randColor == "orange") {
	console.log("Because orange is the color of some kinds of juices.");
} else if (randColor == "yellow") {
	console.log("Because yellow is the color of my strange yellow wife!");
} else if (randColor == "green") {
	console.log("Because green is the color of greenhoppers!");
} else if (randColor == "blue") {
	console.log("Because blue is the color of the bluest boats.");
} else if (randColor == "purple") {
	console.log("Because purple is the poor man's violet.");
} else if (randColor == "violet") {
	console.log("Because violet is the snob's purple");
} else {
	console.log("Pick a legitimate color.");
}


// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
