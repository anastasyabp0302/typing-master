<!DOCTYPE html>
<html>
<head>
    <title>Typing Test Results</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 800px;
            margin: 50px auto;
            text-align: center;
        }
        .result-details {
            margin-top: 20px;
        }
        .btn-group {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Typing Test Results</h1>
        <div class="result-details">
            <p><strong>Waktu yang Digunakan:</strong> {{ request()->get('timeUsed') }} menit</p>
            <p><strong>Kecepatan Kotor:</strong> {{ request()->get('grossSpeed') }} kpm</p>
            <p><strong>Akurasi:</strong> {{ request()->get('accuracy') }}%</p>
            <p><strong>Kecepatan Bersih:</strong> {{ request()->get('netSpeed') }} kpm</p>
        </div>
        <div class="btn-group">
            <button class="btn btn-primary" onclick="window.location.href='{{ url('courses') }}'">Back</button>
        </div>
    </div>
</body>
</html>
