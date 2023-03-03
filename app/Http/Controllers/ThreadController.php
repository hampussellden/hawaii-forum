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
    public function create(Request $request)
    {
        $input = $request->input();

        $thread = new Thread();
        $post = new Post();

        $user_id = Auth::id();
        $title = $input['title'];
        $content = $input['content'];

        $thread->category_id = 1;
        $post->thread_id = $thread->id;

        $thread->title = $title;
        $post->content = $content;
        $post->user_id = $user_id;
        $post->title = $title;

        $thread->save();
        $post->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
