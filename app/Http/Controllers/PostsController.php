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
            'content' => 'required'
        ]);

        $input = $request->input();


        echo $input['content'];
        die;

        return view('thread.posts', []);
        echo "hej";
        // return redirect()->back();
        // $this->validate($request, [
        //     'title' => 'required',
        //     'content' => 'required',
        //     'category' => 'required'
        // ]);
        // $input = $request->input();

        // $user = auth()->user();
        // $category = $input['category'];

        // $thread = new Thread();
        // $thread->title = $input['title'];
        // $thread->category_id = $category;
        // $thread->user_id = $user->id;
        // $thread->save();

        // $post = new Post();
        // $post->title = $input['title'];
        // $post->content = $input['content'];
        // $post->thread_id = $thread->id;
        // $post->user_id = $user->id;
        // $post->save();

        // return redirect("threads/$category");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = auth()->user();
        $posts = DB::table('posts')->join('users', 'posts.user_id', '=', 'users.id')->where('thread_id', $id)->orderBy('posts.id', 'asc')->get();

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
