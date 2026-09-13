<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Seed the session with an initial post if no posts exist.
     */
    public function seedPosts(): void
    {
        if (!Session::has('posts')) {
            Session::put('posts', [
                1 => [
                    'id' => 1,
                    'title' => 'My Little Mini BLog!',
                    'body' => 'Welcome!? This is my first time doing something like this but welocome to my first ever website!',
                ],
            ]);
        }
    }

    /**
     * Display all posts.
     */
    public function index()
    {
        $this->seedPosts();

        $posts = Session::get('posts', []);

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Display a single post.
     */
    public function show($id)
    {
        $this->seedPosts();

        $posts = Session::get('posts', []);

        if (!isset($posts[$id])) {
            abort(404);
        }

        return view('posts.show', [
            'post' => $posts[$id],
        ]);
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a new post.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $this->seedPosts();

        $posts = Session::get('posts', []);

        // Generate a new ID.
        $id = empty($posts)
            ? 1
            : max(array_keys($posts)) + 1;

        $posts[$id] = [
            'id' => $id,
            'title' => $validated['title'],
            'body' => $validated['body'],
        ];

        Session::put('posts', $posts);

        return redirect()
            ->route('posts.index')
            ->with('status', 'Post created successfully!');
    }

    /**
     * Show the form for editing a post.
     */
    public function edit($id)
    {
        $this->seedPosts();

        $posts = Session::get('posts', []);

        if (!isset($posts[$id])) {
            abort(404);
        }

        return view('posts.edit', [
            'post' => $posts[$id],
        ]);
    }

    /**
     * Update an existing post.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $this->seedPosts();

        $posts = Session::get('posts', []);

        if (!isset($posts[$id])) {
            abort(404);
        }

        $posts[$id]['title'] = $request->title;
        $posts[$id]['body'] = $request->body;

        Session::put('posts', $posts);

        return redirect()
            ->route('posts.show', $id)
            ->with('status', 'Post updated successfully!');
    }

    /**
     * Delete a post.
     */
    public function destroy($id)
    {
        $this->seedPosts();

        $posts = Session::get('posts', []);

        if (!isset($posts[$id])) {
            abort(404);
        }

        unset($posts[$id]);

        Session::put('posts', $posts);

        return redirect()
            ->route('posts.index')
            ->with('status', 'Post deleted successfully!');
    }

    /**
     * API: Display all posts as JSON.
     */
    public function apiIndex()
    {
        $this->seedPosts();

        return response()->json([
            'data' => array_values(
                Session::get('posts', [])
            ),
        ]);
    }

    /**
     * API: Display one post as JSON.
     */
    public function apiShow($id)
    {
        $this->seedPosts();

        $posts = Session::get('posts', []);

        if (!isset($posts[$id])) {
            return response()->json([
                'message' => 'Post not found.',
            ], 404);
        }

        return response()->json([
            'data' => $posts[$id],
        ]);
    }
}
