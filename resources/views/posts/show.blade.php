@extends('layouts.app')

@section('content')
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
        background: repeating-linear-gradient(
               to right,
               #8b5cf6 0%,
               #ec4899 2%,
               #06b6d4 5%,
               #8b5cf6 7%
            );
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
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

    .box3 {
    display: flex;
    align-items: center;
    gap: 10px;
}

.box3 form {
    margin: 0;
}

.action-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 48px;
    padding: 0 22px;
    box-sizing: border-box;

    border: none;
    border-radius: 12px;
    background: #666;
    color: white;
    text-decoration: none;
    font-size: 16px;
    font-family: inherit;
    cursor: pointer;
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

    .edit-btn:hover::after {
    display: none;
    }

    h1 {
        background: repeating-linear-gradient(
               to right,
               #8b5cf6 0%,
               #ec4899 2%,
               #06b6d4 5%,
               #8b5cf6 7%
            );
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
    }

</style>

        <div class="box">
        <h1>{{ $post['title'] }}</h1>
        <p>{{ $post['body'] }}</p>
        
        <div class="box3">
        <a href="{{ route('posts.edit', $post['id']) }}" class="edit-btn">
            <button type="button">Edit</button>
        </a>
        
        <a href="{{ route('posts.index') }}" class="edit-btn">
            <button type="button">Return</button>
        </a>

        <form action="{{ route('posts.destroy', $post['id']) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        </div>
        </div>
@endsection