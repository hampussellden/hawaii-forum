<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Thread;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ThreadController extends Controller
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
        return view('thread.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'category' => 'required'
        ]);
        $input = $request->input();

        $user = auth()->user();
        $category = $input['category'];

        $thread = new Thread();
        $thread->title = $input['title'];
        $thread->category_id = $category;
        $thread->user_id = $user->id;
        $thread->save();

        $post = new Post();
        $post->content = $input['content'];
        $post->thread_id = $thread->id;
        $post->user_id = $user->id;
        $post->save();

        return redirect("threads/$category");
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $user = auth()->user();
        $threads = DB::select('select * from threads where category_id = :id', ['id' => $id]);
        return view('forum.threads', [
            'user' => $user,
            'threads' => $threads,
            'category_id' => $id,
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
