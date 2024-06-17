<!DOCTYPE html>
<html>
<head>
    <title>Typing Master</title>
</head>
<body>
    <h1>Typing Master</h1>
    <form action="/submit" method="post">
        @csrf
        <textarea name="typing-input" id="typing-input" cols="30" rows="10"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>