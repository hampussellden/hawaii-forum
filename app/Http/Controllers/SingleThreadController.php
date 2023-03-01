<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SingleThreadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if (Auth::check()) {

            $threads = explode('/', $request->path())[2];
            print_r($threads);
            $thread_id = DB::select("select id from threads where id = :threads", ['threads' => $threads]);
            print_r($thread_id);

            $user = auth()->user();
            $posts = DB::select("select * from posts where thread_id = :id", ['id' => $thread_id[0]->id]);
            return view("forum.thread.posts", [
                'user' => $user,
                'threads' => $threads,
                'posts' => $posts
            ]);
        }
    }
}
