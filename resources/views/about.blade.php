@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <style>
        .container {
            margin: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>About</h1>
        <p>This website is a simple blogging platform where users can create and share their thoughts with the world.</p>
        <p>It is built using Laravel, a popular PHP framework, and utilizes Blade templating for the front-end.</p>
        <p>Feel free to explore the website, create posts, and engage with the content
!</p>
    </div>
</body>
</html>
    
@endsection