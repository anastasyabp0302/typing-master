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
                <h2>1. Pilih Teks</h2>
                <select id="textSelect" class="form-select mb-3">
                    <option value="Tanaman kopi adalah semak cemara dengan dedaunan yang lebat. Coffea arabica membentuk tunas utama tegak dari mana cabang-cabangnya bercabang secara horizontal selama beberapa tingkat">Tumbuhan</option>
                    <option value="Hutan hujan tropika atau sering juga ditulis sebagai hutan hujan tropis adalah bioma berupa hutan yang selalu basah atau lembap, yang dapat ditemui di wilayah sekitar khatulistiwa; yakni kurang lebih pada lintang 0°–10° ke utara dan ke selatan garis khatulistiwa">Hutan Hujan Tropis</option>
                    <option value="Tomat atau rangam adalah tumbuhan dari keluarga Solanaceae, tumbuhan asli Amerika Tengah dan Selatan, dari Meksiko sampai Peru. Tomat merupakan tumbuhan siklus hidup singkat, dapat tumbuh setinggi 1 sampai 3 meter.">Tanaman Tomat</option>
                    <option value="Kakao merupakan tumbuhan tahunan (perennial) berbentuk pohon, di alam dapat mencapai ketinggian 10m. Meskipun demikian, dalam budi daya tanaman ini tingginya dibuat tidak lebih dari 5m, tetapi dengan tajuk menyamping yang meluas. Hal ini dilakukan untuk memperbanyak cabang produktif.">Kakao</option>
                </select>

                <h2>2. Pilih Durasi</h2>
                <select id="timeSelect" class="form-select mb-3">
                    <option value="5">5 menit</option>
                    <option value="10">10 menit</option>
                    <option value="15">15 menit</option>
                </select>

                <h2>3. Mulai Tes</h2>
                <button onclick="startTypingTest()" class="btn btn-primary">Mulai</button>
            </div>
        </div>
        <div class="right-section">
            <a href="/" class="btn btn-danger">Tutup</a>
            <div class="mt-4">
                <div class="menu-item mb-2 active">
                    <a href="#">TES KETIK</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function startTypingTest() {
            const selectedText = document.getElementById('textSelect').value;
            const selectedTime = document.getElementById('timeSelect').value;

            // Redirect to typing test page with chosen text and time
            window.location.href = `/typing-test?text=${encodeURIComponent(selectedText)}&time=${selectedTime}`;
        }
    </script>
</body>
</html>
