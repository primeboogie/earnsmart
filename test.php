<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .container {
            background-color: #1562ffda;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }

        .header {
            text-align: center;
            border: 1px solid white;
            border-radius: 10px;
            padding: 10px;
        }

        .title {
            margin: 20px 0;
            color: yellow;
        }

        .content {
            background-color: transparent;
            border: 1px solid white;
            border-radius: 10px;
            padding: 10px;
        }

        h2 {
            color: yellow;
            text-align: left;
        }

        .instructions {
            color: white;
            text-align: left;
            margin-left: 20px; /* Adjust margin to create space for bullets */
            position: relative; /* Ensure relative positioning for absolute bullets */
        }

        .instructions p {
            margin: 10px 0;
            position: relative;
        }

        .instructions p span {
            color: yellow;
        }

        .instructions p::before {
            content: '\2022'; /* Unicode character for bullet point */
            color: yellow;
            font-weight: bold;
            font-size: 20px;
            margin-right: 10px;
            position: absolute;
            left: -20px;
            top: 0;
        }

        .questions {
            background-color: transparent;
            border: 1px solid white;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px; 
        }

        .questions h2 {
            color: yellow;
            text-align: left;
        }

        .quiz {
            margin-top: 20px;
        }

        .quiz h3 {
            color: yellow;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .quiz ul {
            list-style-type: none;
            padding: 0;
        }

        .quiz li {
            margin-bottom: 10px;
        }

        .quiz label {
            color: white;
            cursor: pointer;
            display: block;
            padding: 10px;
            border-radius: 5px;
        }

        .quiz label:hover {
            background-color: #2852ed;
        }

        .quiz input[type="radio"] {
            display: none;
        }

        button {
            background-color: #1562ff;
            color: white;
            border: 3px double white;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            margin: 20px auto 0;
            display: block;
        }

        button:hover {
            background-color: #2852ed;
            color: yellow;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 style="font-size: 18px;">Logo + Earn Empire Connections</h2>
        </div>
        <h2 class="title">Trivia Quiz</h2>
        <div class="content">
            <h2>Instructions</h2>
            <div class="instructions">
                <p>You're going to answer 15 questions, within <span>60 seconds</span>.</p>
                <p>Select the correct answer by clicking at what you think is the correct answer.</p>
                <p>Click the <span>Submit</span> button when done. If time elapses before clicking <span>Submit</span>, the test will be submitted automatically.</p>
            </div>
            <button id="readyButton">Ready</button>
        </div>
        <div class="questions" style="display: none;">
            <h2>Today's Questions:</h2>
            <div class="quiz">
                <h3>Who is your developer:</h3>
                <ul>
                    <li>
                        <input type="radio" id="q1a1" name="q1">
                        <label for="q1a1">Option 1</label>
                    </li>
                    <li>
                        <input type="radio" id="q1a2" name="q1">
                        <label for="q1a2">Option 2</label>
                    </li>
                    <li>
                        <input type="radio" id="q1a3" name="q1">
                        <label for="q1a3">Option 3</label>
                    </li>
                    <li>
                        <input type="radio" id="q1a4" name="q1">
                        <label for="q1a4">Option 4</label>
                    </li>
                </ul>
            </div>
            
            <button id="submitQuiz">Submit</button>
        </div>
    </div>
    <script>
        // JavaScript to handle button click event
        document.getElementById('readyButton').addEventListener('click', function() {
            // Hide the content div
            document.querySelector('.content').style.display = 'none';
            // Show the questions div
            document.querySelector('.questions').style.display = 'block';
        });
    </script>
</body>
</html>