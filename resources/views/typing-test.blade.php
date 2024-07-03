<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            margin-top: 20px;
        }

        .typing-text {
            border: 1px solid #ddd;
            padding: 20px;
            font-size: 18px;
            min-height: 200px;
            overflow-y: auto;
            white-space: pre-wrap;
        }

        .time-display {
            font-size: 24px;
            text-align: center;
            margin-top: 20px;
        }

        .typing-input {
            margin-top: 20px;
            width: 100%;
            min-height: 100px;
        }

        .btn-next {
            margin-top: 20px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Typing Test</h1>
        <div class="typing-text" id="typingText"></div>
        <div class="time-display">
            <p>Waktu: <span id="time"></span></p>
        </div>
        <textarea class="typing-input" id="typingInput" placeholder="Mulai mengetik di sini..."></textarea>
        <button class="btn btn-primary btn-next" id="nextButton">Lanjut</button>
    </div>

    <!-- Modal jika waktu habis -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Waktu habis! Silakan tekan "Lanjut" untuk melanjutkan.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('myModal');
            const span = document.getElementsByClassName('close')[0];
            const nextButton = document.getElementById('nextButton');
            let totalSeconds = parseInt(new URLSearchParams(window.location.search).get('time')) * 60;
            const targetText = decodeURIComponent(new URLSearchParams(window.location.search).get('text'));
            const typingTextElement = document.getElementById('typingText');
            const timeElement = document.getElementById('time');
            const typingInput = document.getElementById('typingInput');
            let timerStarted = false;
            let timerInterval;

            const updateTime = () => {
                let minutes = Math.floor(totalSeconds / 60);
                let seconds = totalSeconds % 60;
                if (seconds < 10) seconds = '0' + seconds;
                timeElement.textContent = `${minutes}:${seconds}`;
                if (totalSeconds > 0) {
                    totalSeconds--;
                } else {
                    clearInterval(timerInterval);
                    showModal();
                }
            };

            const startTimer = () => {
                if (!timerStarted) {
                    timerStarted = true;
                    timerInterval = setInterval(updateTime, 1000);
                }
            };

            const showModal = () => {
                modal.style.display = 'block';
            };

            span.onclick = function() {
                modal.style.display = 'none';
            };

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            };

            const highlightText = () => {
                const userInput = typingInput.value;
                let highlightedText = '';
                for (let i = 0; i < targetText.length; i++) {
                    if (i < userInput.length) {
                        if (userInput[i] === targetText[i]) {
                            highlightedText += `<span style="color: green;">${targetText[i]}</span>`;
                        } else {
                            highlightedText += `<span style="color: red;">${targetText[i]}</span>`;
                        }
                    } else {
                        highlightedText += targetText[i];
                    }
                }
                typingTextElement.innerHTML = highlightedText.replace(/\n/g, '<br>');
            };

            const calculateResults = () => {
                const userInput = typingInput.value;
                const wordsTyped = userInput.split(/\s+/).length;
                const minutesTaken = (parseInt(new URLSearchParams(window.location.search).get('time')) * 60 - totalSeconds) / 60;
                const grossSpeed = wordsTyped / minutesTaken;
                const errors = userInput.split('').reduce((acc, char, idx) => acc + (char !== targetText[idx] ? 1 : 0), 0);
                const accuracy = ((userInput.length - errors) / userInput.length) * 100;
                const netSpeed = grossSpeed * (accuracy / 100);

                return {
                    grossSpeed: grossSpeed.toFixed(2),
                    accuracy: accuracy.toFixed(2),
                    netSpeed: netSpeed.toFixed(2),
                };
            };

            typingInput.addEventListener('input', () => {
                startTimer();
                highlightText();
            });

            nextButton.addEventListener('click', () => {
                const results = calculateResults();
                window.location.href = `results?grossSpeed=${results.grossSpeed}&accuracy=${results.accuracy}&netSpeed=${results.netSpeed}&timeUsed=${parseInt(new URLSearchParams(window.location.search).get('time'))}`;
            });
        });
    </script>
</body>
</html>
