<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing Test</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .left-section {
            width: 60%;
        }

        .right-section {
            width: 30%;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .test-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .test-section h2 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .test-section select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .test-section button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .completed-tests {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .completed-tests h2 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .completed-tests textarea {
            width: 100%;
            height: 150px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
        }

        .completed-tests button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .menu-item {
            margin-bottom: 10px;
        }

        .menu-item a {
            display: block;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
        }

        .menu-item a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Typing Master</a>
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
        <div class="left-section">
            <h1>Typing Test</h1>
            <div class="test-section">
                <h2>1. Test Text</h2>
                <select>
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
                <select>
                    <option value="10">10 min.</option>
                    <option value="15">15 min.</option>
                    <option value="20">20 min.</option>
                </select>
                <h2>3.</h2>
                <button>Start test</button>
                <a href="typing-test">start</a>
            </div>
            <div class="completed-tests">
                <h2>Completed Tests</h2>
                <textarea></textarea>
                <button>View & Print Results</button>
                <button>View & Print Certificate</button>
            </div>
        </div>
        <div class="right-section">
            <a href="/">close</a>
            <button class="close-button">Close</button>
            <div class="menu-item">
                <a href="#">STUDYING</a>
            </div>
            <div class="menu-item">
                <a href="#">TYPING METER</a>
            </div>
            <div class="menu-item">
                <a href="#">CUSTOM REVIEW</a>
            </div>
            <div class="menu-item active">
                <a href="#">TYPING TEST</a>
            </div>
            <div class="menu-item">
                <a href="#">GAMES</a>
            </div>
            <div class="menu-item">
                <a href="#">STATISTICS</a>
            </div>
            <div class="menu-item">
                <a href="#">SETTINGS</a>
            </div>
            <div class="menu-item">
                <a href="#">ABOUT</a>
            </div>
            <img src="typing-master-logo.png" alt="TypingMaster Logo" width="100">
        </div>
    </div>
</body>
</html>