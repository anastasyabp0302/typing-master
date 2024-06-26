<!DOCTYPE html>
<html>
<head>
    <title>Typing Master</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 800px;
            margin: 50px auto;
        }
        .typing-text {
            border: 1px solid #ddd;
            padding: 20px;
            font-size: 18px;
            height: 200px;
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
            height: 100px;
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
        <h1 class="text-center">Typing Master</h1>
        <div class="typing-text" id="typingText">
            ARSIP ELEKTRONIK
            Perkembangan dan pertumbuhan informasi sejak beberapa tahun terakhir ini berjalan sangat cepat. Perubahan informasi tidak lagi terjadi dalam hitungan tahun, bulan, atau hari. Akan tetapi sekarang ini, perubahan informasi terjadi dalam hitungan jam, menit, atau bahkan detik. Setiap orang membutuhkan informasi untuk kepentingan pekerjaan pribadi maupun untuk kepentingan organisasi.
            Informasi telah
        </div>
        <div class="time-display">
            <p>Time: <span id="time">10:00</span></p>
        </div>
        <textarea class="typing-input" id="typingInput" placeholder="Start typing here..."></textarea>
        <button class="btn btn-primary btn-next" id="nextButton">Next</button>
        <button class="btn btn-primary btn-back" id="nextButton">back<a href="courses">back</a></button>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Time's up! Please press "Next" to continue.</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            let timeElement = document.getElementById('time');
            let typingInput = document.getElementById('typingInput');
            let typingTextElement = document.getElementById('typingText');
            let modal = document.getElementById('myModal');
            let span = document.getElementsByClassName('close')[0];
            let nextButton = document.getElementById('nextButton');
            let totalSeconds = 10 * 60; // 10:00 in seconds
            let timerStarted = false;
            let timerInterval;

            const targetText = `ARSIP ELEKTRONIK
Perkembangan dan pertumbuhan informasi sejak beberapa tahun terakhir ini berjalan sangat cepat. Perubahan informasi tidak lagi terjadi dalam hitungan tahun, bulan, atau hari. Akan tetapi sekarang ini, perubahan informasi terjadi dalam hitungan jam, menit, atau bahkan detik. Setiap orang membutuhkan informasi untuk kepentingan pekerjaan pribadi maupun untuk kepentingan organisasi.
Informasi telah`;

            const updateTime = () => {
                let minutes = Math.floor(totalSeconds / 60);
                let seconds = totalSeconds % 60;
                if (seconds < 10) seconds = '0' + seconds;
                timeElement.textContent = minutes + ':' + seconds;
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

            span.onclick = function() {
                modal.style.display = 'none';
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            }

            typingInput.addEventListener('input', () => {
                startTimer();
                highlightText();
            });

            nextButton.addEventListener('click', () => {
                window.location.href = "results.html";
            });
        });
    </script>
</body>
</html>
