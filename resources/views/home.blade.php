<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first php file</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="home">
    <h1>HOMEPAGE</h1>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('contact') }}">Contact</a>
    <a href="{{ route('aboutme') }}">About Me</a>
    <p>Developed by: Juan Dela Cruz</p>

</body>
</html>