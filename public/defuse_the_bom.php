<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>
</head>
<body>
    <h2 id="message">This BOM will self destruct in <span id="timer">10</span> seconds...</h2>
    <button id="defuser">Defuse the BOM</button>
    <br>
    <button id="resumer">Resume the BOM</button>
    <br>
    <button id="reseter">Reset the BOM</button>

    <script>
        var detonationTimer = 10;
        var max = 0
        var interval = 1000;
        function updateTimer() {
            if (detonationTimer == max) {
                alert('EXTERMINATE!');
                document.body.innerHTML = "YOURE ARE DED";
                clearInterval(intervalId);
            } else if (detonationTimer > max) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }
            detonationTimer --;
        }
        var intervalId = setInterval(updateTimer, interval);
        function defuseTheBOM() {
            if (detonationTimer) {
                clearInterval(intervalId);
                alert("BOM DEFUSED")
            }
        }
        function resumeTheBOM() {
                if (detonationTimer == max) {
                    alert('EXTERMINATE!');
                    document.body.innerHTML = 'YOURE ARE DED';
                    clearInterval(intervalId);
                } else if (detonationTimer > max) {
                    document.getElementById('timer').innerHTML = detonationTimer;
                    intervalId = setInterval(updateTimer, interval);
                }
            detonationTimer --;
        }
        function resetTheBOM(){
            if (detonationTimer) {
                clearInterval(intervalId);
                detonationTimer = 10;
                intervalId = setInterval(updateTimer, interval);

                alert("BOM reset");
            };
        }

        //var target = document.getElementById("element id from top of page");
        //target.addEventListener(event trigger, function to be called, false)

        var defuser = document.getElementById('defuser');
        defuser.addEventListener('click', defuseTheBOM, false);
        var resumer = document.getElementById('resumer');
        resumer.addEventListener("click", resumeTheBOM,
        false);
        var reseter = document.getElementById('reseter');
        reseter.addEventListener("click", resetTheBOM,
        false);
    </script>
</body>
</html>
