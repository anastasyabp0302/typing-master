<!DOCTYPE html>
<html>
<head>
    <title>Typing Master</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            width: 600px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        #typing-input {
            width: 100%;
            height: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            resize: none;
            font-size: 16px;
        }

        .results {
            margin-top: 20px;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }

        .language-select {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .language-select select {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .language-select button {
            background-color: #ccc;
            border: none;
            color: #333;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        #results-table {
            width: 100%;
            border-collapse: collapse;
        }

        #results-table th, #results-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        #results-table th {
            background-color: #f0f0f0;
        }
    </style>
    <script>
        let startTime;
        let timerInterval;
        let countdown = 60; // Countdown time in seconds
        const exampleText = "belajar mengetik 10 jari.";

        function startTimer() {
            startTime = new Date();
            timerInterval = setInterval(updateTimer, 1000);
            startCountdown(); // Start countdown when typing begins
        }

        function updateTimer() {
            const currentTime = new Date();
            const timeDiff = Math.floor((currentTime - startTime) / 1000); // in seconds
            document.getElementById('timer').innerText = timeDiff + ' seconds';
        }

        function startCountdown() {
            const countdownElement = document.getElementById('countdown');
            countdownElement.innerText = countdown + ' seconds';
            const countdownInterval = setInterval(() => {
                countdown--;
                countdownElement.innerText = countdown + ' seconds';
                if (countdown <= 0) {
                    clearInterval(countdownInterval);
                    document.getElementById('typing-input').setAttribute('disabled', 'disabled');
                    submitForm(); // Automatically submit form when countdown ends
                }
            }, 1000);
        }

        function stopTimer() {
            clearInterval(timerInterval);
        }

        function getTypingTime() {
            const endTime = new Date();
            const timeDiff = endTime - startTime; // in ms
            return (timeDiff / 1000).toFixed(2); // in seconds
        }

        function submitForm() {
            stopTimer();
            const timeTaken = getTypingTime();
            document.getElementById('time-taken').value = timeTaken;
            document.getElementById('submit-button').disabled = true; // Disable submit button
            document.getElementById('typing-input').setAttribute('disabled', 'disabled'); // Disable textarea
            document.getElementById('results').style.display = 'block'; // Show results section
            document.getElementById('example-text').style.display = 'none'; // Hide example text
            const typingInput = document

        function changeLanguage(language) {
           
            const exampleTextElement = document.getElementById('example-text');
            if (language === 'English') {
                exampleTextElement.innerText = "Learn to type with 10 fingers.";
            } else if (language === 'Indonesian') {
                exampleTextElement.innerText = "belajar mengetik 10 jari.";
            } 
            
        }
    }
    </script>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Typing Master Page</h1>
        <div class="language-select">
            <select id="language-select">
                <option value="English">English</option>
                <option value="Indonesian">Indonesian</option>
            </select>
            <button onclick="changeLanguage(document.getElementById('language-select').value)">Change Language</button>
        </div>
        <p>Example Text: <span id="example-text"><strong>{{ $exampleText }}</strong></span></p>
        <p>Time Taken: <span id="timer">0 seconds</span></p>
        <p>Countdown: <span id="countdown">60 seconds</span></p>
        <form action="/typing/submit" method="POST" onsubmit="submitForm()">
            @csrf
            <textarea name="typing-input" id="typing-input" placeholder="Start typing here..." onfocus="startTimer()"></textarea>
            <input type="hidden" name="time-taken" id="time-taken">
            <p id="results-text"></p>
            <button type="submit" id="submit-button">Submit</button>
        </form>

        <div id="results" style="display: none;">
            <h2>Results:</h2>
            <p>{{ session('results') }}</p>
        </div>
    </div>
</body>
</html>