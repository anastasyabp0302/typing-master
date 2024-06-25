<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TypingMaster Pro Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>
<body>
    <div class="login-container">
        <img src="/path/to/logo.png" alt="TypingMaster Pro">
        <h2>Welcome to TypingMaster</h2>
        <form action="/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Enter your name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Enter</button>
            <a href="courses">enter</a>
        </form>
    </div>
</body>
</html>
