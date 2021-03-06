(function() {
	//_____________
	var leftBox = document.getElementById("left").value;
	var rightBox = document.getElementById("right").value;
	var centerBox = document.getElementById("center").value;
	//begin operands
	var buttonPlus = document.getElementById("btnPlus");
	buttonPlus.addEventListener("click", function (event) {
		document.getElementById("center").value = event.target.innerHTML;
		centerBox = event.target.innerHTML;
	});
	var buttonMinus = document.getElementById("btnMinus");
	buttonMinus.addEventListener("click", function (event) {
		document.getElementById("center").value = event.target.innerHTML;
		centerBox = event.target.innerHTML;
	});
	var buttonTimes = document.getElementById("btnTimes");
	buttonTimes.addEventListener("click", function (event) {
		document.getElementById("center").value = event.target.innerHTML
		centerBox = event.target.innerHTML;
	});
	var buttonDivide = document.getElementById("btnDivide");
	buttonDivide.addEventListener("click", function (event) {
		document.getElementById("center").value = event.target.innerHTML;
		centerBox = event.target.innerHTML;
	});
	//end operands
	var logTo = function (event) {
		console.log(event.target.innerHTML);
		if (centerBox == "") {
			document.getElementById("left").value += event.target.innerHTML;
			leftBox += event.target.innerHTML;
		} else {
			document.getElementById("right").value += event.target.innerHTML;
			rightBox += event.target.innerHTML;
		}
	};
	var numbButtons = document.getElementsByClassName("numb");
	//for loop for number buttons; these tell the numbers to log to the right box
	for (var i = 0; i < numbButtons.length; i ++)
		{
			numbButtons[i].addEventListener("click", logTo);
		}
	//the math
	var ans;
	var calculate = function (event) {
		leftO = parseInt(leftBox);
		rightO = parseInt(rightBox);
		console.log("leftO is " + leftO);
		console.log("rightO is " + rightO);
		if (centerBox == "-") {
			ans = leftO - rightO;
		} else if (centerBox == "+"){
			ans = leftO + rightO;
		} else if (centerBox == "*") {
			ans = leftO * rightO;
		} else if (centerBox == "/") {
			ans = leftO / rightO;
		}
		//clearing when you hit equals; in same "calculate" function
		console.log("The answer is " + ans);
		document.getElementById("left").value = ""
		document.getElementById("center").value = ""
		document.getElementById("right").value = ans
	};
	var buttonEquals = document.getElementById("btnEquals");
	buttonEquals.addEventListener("click", calculate);
	var buttonClear = document.getElementById("btnClear");
	buttonClear.addEventListener("click", function (event) {
		document.getElementById("left").value = "";
		document.getElementById("center").value = "";
		document.getElementById("right").value = "";
	})

	//_____________
})();