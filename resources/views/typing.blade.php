<!DOCTYPE html>
<html>
<head>
    <title>Typing Master</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        let startTime;
        let timerInterval;
        let countdown = 60; // Countdown time in seconds

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
        }

        function changeLanguage(language) {
            const exampleTextElement = document.getElementById('example-text');
            if (language === 'English') {
                exampleTextElement.innerText = "Learn to type with 10 fingers.";
            } else if (language === 'Indonesian') {
                exampleTextElement.innerText = "belajar mengetik 10 jari.";
            }
        }
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Typing master</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="register">
                        <img src="user.png" alt="Login" style="width: 30px; height: 30px;">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1>Welcome to the Typing Master Page</h1>
        <div class="language-select">
            <select id="language-select">
                <option value="English">English</option>
                <option value="Indonesian">Indonesian</option>
            </select>
            <button onclick="changeLanguage(document.getElementById('language-select').value)">Change Language</button>
        </div>
        <p>Example Text: <span id="example-text"><strong>belajar mengetik 10 jari.</strong></span></p>
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
