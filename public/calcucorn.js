	(function() {
		//_________________________
		var leftBox = document.getElementById("left").value;
		var centerBox = document.getElementById("center").value;
		var rightBox = document.getElementById("right").value;
		//begin operands
		var buttonPlus = document.getElementById("btnPlus");
			buttonPlus.addEventListener("click", function (event) {
			document.getElementById("center").value = event.target.innerHTML
			centerBox = event.target.innerHTML;
			console.log(event.target.innerHTML);
			});
		var buttonMinus = document.getElementById("btnMinus");
			buttonMinus.addEventListener("click", function (event) {
			document.getElementById("center").value = event.target.innerHTML;
			centerBox = event.target.innerHTML;
			console.log(event.target.innerHTML);
			});
		var buttonTimes = document.getElementById("btnTimes");
			buttonTimes.addEventListener("click", function (event) {
			document.getElementById("center").value = event.target.innerHTML
			centerBox = event.target.innerHTML;
			console.log(event.target.innerHTML);
			});
		var buttonDivide = document.getElementById("btnDivide");
			buttonDivide.addEventListener("click", function (event) {
			document.getElementById("center").value = event.target.innerHTML
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
		//for loops for number buttons
		for (var i = 0; i < numbButtons.length; i++)
			{
				numbButtons[i].addEventListener("click", logTo);
			}
//THE MATH
		var ans;
		var calculate = function (event) {
			left = parseInt(leftBox)
			right = parseInt(rightBox)
			console.log(left)
			console.log(right)
			if (centerBox == "-") {
				ans = left - right
			} else if (centerBox == "+") {
				ans = left + right
			} else if (centerBox == "*") {
				ans = left * right
			} else if (centerBox == "/") {
				ans = left / right
			}
			console.log(ans)
			document.getElementById("left").value = ""
			document.getElementById("center").value = ""
			document.getElementById("right").value = ans
		};
		var buttonEquals = document.getElementById("btnEquals");
		buttonEquals.addEventListener("click", calculate)
		var buttonClear = document.getElementById("btnClear");
		buttonClear.addEventListener("click", function () {
			document.getElementById("left").value = ""
			document.getElementById("center").value = ""
			document.getElementById("right").value = "s"
		})

		//_________________________
	})();