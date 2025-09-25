<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $posts = Post::query()
            ->when($search, function($query, $search) {
                return $query->where('title', 'like', "%{$search}%");
            })
            ->latest()
            ->get();

        return view('initial', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ], [
            'title.required' => 'You must enter a title',
            'description.required' => 'You must enter a description'
        ]);

        Post::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('posts.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        $post->update($validatedData);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
