<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Thread;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'thread' => 'required',
            'content' => 'required',
        ]);

        $input = $request->input();

        $user = auth()->user();
        $thread = $input['thread'];

        $post = new Post();
        $post->content = $input['content'];
        $post->thread_id = $thread;
        $post->user_id = $user->id;
        $post->save();

        return redirect("posts/$thread");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = auth()->user();
        $posts = DB::table('posts')->select('users.name', 'posts.content', 'posts.created_at', 'posts.updated_at')->join('users', 'posts.user_id', '=', 'users.id')->where('thread_id', $id)->orderBy('posts.id', 'asc')->get();

        return view('thread.posts', [
            'user' => $user,
            'posts' => $posts,
            'thread' => Thread::where('id', $id)->first(),
            'category' => Category::where('id', $id)->first(),
        ]);
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
