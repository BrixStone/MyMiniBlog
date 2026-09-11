@extends('layouts.app')


@section('content')

<style>
    .box1 {
        margin: 20px;
        padding: 40px;
        
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);

        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 15px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);

        color: white;
    }

    .box1 h1 {
        text-align: center;
        margin-bottom: 35px;
        font-size: 36px;
    }

    .post-form {
        max-width: 600px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 22px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-size: 17px;
        font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        box-sizing: border-box;
        padding: 12px 14px;

        border: 1px solid #ccc;
        border-radius: 6px;

        background: white;
        color: #222;

        font-size: 16px;
        font-family: inherit;
    }

    .form-group textarea {
        min-height: 200px;
        resize: vertical;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #8b5cf6;
        box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.2);
    }

    .submit-container {
        text-align: center;
        margin-top: 30px;
    }

    .submit-btn {
        padding: 12px 30px;
        border: none;
        border-radius: 6px;

        background: #555;
        box-shadow: 0px 4px 6px rgba(206, 205, 205, 0.1);
        color: white;

        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.2s;
    }

    .submit-btn:hover {
        background: #c600a8;
        transform: translateY(-1px);
    }
</style>
<div class="box1">

    <h1>Create a Post</h1>

    <form action="{{ route('posts.store') }}" method="POST" class="post-form">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input
                type="text"
                name="title"
                id="title"
                placeholder="Enter your post title"
            >
        </div>

        <div class="form-group">
            <label for="body">Content</label>
            <textarea
                name="body"
                id="body"
                placeholder="Write your post content here..."
            ></textarea>
        </div>

        <div class="submit-container">
            <button type="submit" class="submit-btn">
                Create Post
            </button>
        </div>

    </form>

</div>

@endsection