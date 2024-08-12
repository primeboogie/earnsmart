<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circular Timer</title>
    <style>
        body, html {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #060D1F;
            font-family: Arial, sans-serif;
        }

        .timer-container {
            position: relative;
            width: 40px; /* Adjusted to 60px */
            height: 40px; /* Adjusted to 60px */
        }

        .circle {
            width: 100%;
            height: 100%;
            fill: transparent;
            transform: rotate(-90deg);
            transform-origin: center;
        }

        .circle-bg {
            stroke: #ccc;
            stroke-width: 4; /* Adjusted stroke width for smaller size */
        }

        .circle-progress {
            stroke: yellow;
            stroke-width: 4; /* Adjusted stroke width for smaller size */
            stroke-dasharray: 0;
            stroke-dashoffset: 0;
            transition: stroke-dashoffset 0.1s linear;
        }

        .time {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 14px; /* Adjusted font size for smaller size */
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="timer-container">
        <svg class="circle" viewBox="0 0 22 22">
            <circle class="circle-bg" cx="11" cy="11" r="10"></circle>
            <circle class="circle-progress" cx="11" cy="11" r="10"></circle>
        </svg>
        <div class="time" id="time-display">10</div>
    </div>

    <script>
        const totalSeconds = 10;
        let currentSeconds = totalSeconds;
        const radius = 10; /* Adjusted radius to match the smaller circle */
        const circumference = 2 * Math.PI * radius;
        const circleProgress = document.querySelector('.circle-progress');
        const timeDisplay = document.getElementById('time-display');

        circleProgress.style.strokeDasharray = circumference;

        function updateTimer() {
            const percent = (currentSeconds / totalSeconds);
            const offset = circumference - percent * circumference;
            circleProgress.style.strokeDashoffset = offset;

            timeDisplay.textContent = currentSeconds;

            if (currentSeconds > 0) {
                currentSeconds--;
                setTimeout(updateTimer, 1000);
            } else {
                console.log("done");
            }
        }

        // updateTimer();

        
    </script>
</body>
</html>
