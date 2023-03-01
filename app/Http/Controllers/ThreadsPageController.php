<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ThreadsPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if (Auth::check()) {
            $category = explode('/', $request->path())[1];
            $category_id = DB::select("select id from categories where name = :category", ['category' => $category]);
            $category_id = last($category_id)->id;
            $user = auth()->user();
            $threads = DB::select("select * from threads where category_id = :id", ['id' => $category_id]);
            return view("forum.threads", [
                'user' => $user,
                'threads' => $threads,
            ]);
        }
    }
}
