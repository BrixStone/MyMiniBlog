@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
    body {
        background-color: purple;
        color: white;
        font-family: Arial, sans-serif;
    }

    h1 {
        font-size: 40px;
    }

    h2 {
        color: yellow;
    }

    .box {
        background: rgba(255, 255, 255, 0.10);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);

        padding: 20px;
        margin: 20px;
        border-radius: 15px;

        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    }

    .box1 {
        background: rgba(255, 255, 255, 0.10);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);

        padding: 20px;
        margin: 20px;
        border-radius: 15px;

        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    }

    a {
        margin: 0;
        color: white;
    }

    button {
        background-color: #555;
        color: white;
        border: none;
        padding: 10px 20px;
        margin-top: 10px;
        cursor: pointer;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(206, 205, 205, 0.1);
    }

    button:hover {
        background-color: #c600a8;
        transition: ease 0.3s;
    }
        .container {
            margin: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>HomePage</h1>
        <h3>Welcome to MiniBlog!</h3>


        <p>Make your own posts!</p>
        <p>Upload your words and share your thoughts with the world!</p>
        <button class="btn btn-primary" onclick="window.location.href='{{ route('posts.index') }}'">Let's Get Started!</button>
        <button class="btn btn-about" onclick="window.location.href='{{ route('about') }}'">Learn More</button>
    </div>
</body>
</html>
    
@endsection