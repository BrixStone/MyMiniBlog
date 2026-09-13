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

    .errorbox1 {
        background: rgba(255, 255, 255, 0.10);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);

        padding: 20px;
        margin: 20px;
        border-radius: 15px;

        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    }
</style>

<div class="box1">
<h1>Want to Create a New Post?</h1>

<a href="{{ route('posts.create') }}">
    Create New Post
</a>

<hr>
</div>
@forelse($posts as $post)

    <article>
        <div class="box">

        <h2>{{ $post['title'] }}</h2>

        <p>{{ $post['body'] }}</p>

        <div class="box3" style="display: flex; gap: 10px; align-items: center;">

        <a href="{{ route('posts.show', $post['id']) }}">
            View
        </a>

        <br>

        <a href="{{ route('posts.edit', $post['id']) }}">
            Edit
        </a>

        <form
            action="{{ route('posts.destroy', $post['id']) }}"
            method="POST"
        >
            @csrf
            @method('DELETE')

            <button type="submit">
                Delete
            </button>
        </form>
        </div>
        </div>

    </article>

@empty
<div class="errorbox1">
    <p class="error">No posts found.</p>
</div>

@endforelse

@endsection