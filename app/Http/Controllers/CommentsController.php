<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'comment' => 'required|string',
            'post_id' => 'required|integer',
            'parent_id' => 'nullable|exists:comments,id', // parent_id can be null or must exist in comments table
        ]);


        // Create a new comment record
        $comment = new Comment();
        $comment->name = $validatedData['name'];
        $comment->email = $validatedData['email'];
        $comment->content = $validatedData['comment'];
        $comment->post_id = $validatedData['post_id'];
        if (isset($validatedData['parent_id'])) {
            $comment->parent_id = $validatedData['parent_id']; // Assign parent_id if it exists
        }
        $comment->save();


        return response()->json([
            'success' => true,
            'comment' => $comment,
        ]);
    }



    /**
     * Display the specified resource.
     */
    public function show($slug)


    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $comments = $post->comments()->latest()->get(); // Fetch the related comments

        return view('blog.show', compact('post', 'comments'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
