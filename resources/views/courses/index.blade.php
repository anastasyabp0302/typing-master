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

        .left-section {
            width: 60%;
        }

        .right-section {
            width: 30%;
        }

        .menu-item a {
            display: block;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
        }

        .menu-item a:hover, .menu-item.active a {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-between">
        <div class="left-section">
            <h1 class="mb-4">Typing Test</h1>
            <div class="test-section p-4 mb-4 bg-white rounded shadow-sm">
                <h2>1. Test Text</h2>
                <select class="form-select mb-3">
                    <option value="custom">ARSHATRONIX.txt (custom)</option>
                    <option value="aesop">Aesop's Fables</option>
                    <option value="skills">Are Your Typing Skills Hurting Your Job Opportunities?</option>
                    <option value="astronauts">Astronauts</option>
                    <option value="behind">Behind the scene: Movie credits</option>
                    <option value="dna">DNA Research - the Human Genome Project</option>
                    <option value="wpm">Does WPM Really Matter in the Corporate World?</option>
                    <option value="fairy">Fairy Tales/The Emperor's New Clothes (adapted)</option>
                    <option value="history">History of Photography</option>
                </select>
                <h2>2. Duration</h2>
                <select class="form-select mb-3">
                    <option value="10">10 min.</option>
                    <option value="15">15 min.</option>
                    <option value="20">20 min.</option>
                </select>
                <h2>3.</h2>
                <button class="btn btn-primary">Start test</button>
                <a href="typing-test" class="btn btn-link">start</a>
            </div>
            <div class="completed-tests p-4 bg-white rounded shadow-sm">
                <h2>Completed Tests</h2>
                <textarea class="form-control mb-3" rows="6"></textarea>
                <button class="btn btn-primary">View & Print Results</button>
                <button class="btn btn-secondary">View & Print Certificate</button>
            </div>
        </div>
        <div class="right-section">
            <a href="/">close</a>
            <button class="close-button">Close</button>
            <div class="mt-4">
                <div class="menu-item mb-2">
                    <a href="#">STUDYING</a>
                </div>
                <div class="menu-item mb-2">
                    <a href="#">TYPING METER</a>
                </div>
                <div class="menu-item mb-2">
                    <a href="#">CUSTOM REVIEW</a>
                </div>
                <div class="menu-item mb-2 active">
                    <a href="#">TYPING TEST</a>
                </div>
                <div class="menu-item mb-2">
                    <a href="#">GAMES</a>
                </div>
                <div class="menu-item mb-2">
                    <a href="#">STATISTICS</a>
                </div>
                <div class="menu-item mb-2">
                    <a href="#">SETTINGS</a>
                </div>
                <div class="menu-item mb-2">
                    <a href="#">ABOUT</a>
                </div>
            </div>
            <img src="typing-master-logo.png" alt="TypingMaster Logo" width="100" class="mt-4">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
