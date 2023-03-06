@extends('layouts.app')
<main class="flex flex-col gap-4 mx-3 lg:mx-16">
    <h3 class="text-3xl">{{$thread->title}}</h3>
    @foreach ($posts as $post)
        <div class="flex flex-col border-solid border-2 border-black bg-slate-100">
            @if ($loop->first)
            <div class="flex flex-row gap-6 bg-orange-400">
                <p>{{Str::ucfirst($post->name)}}</p>
                <p> {{@substr($post->created_at, 0,16)}}</p>
            </div>
            <div class="p-4">
                <p>{{$post->content}}</p>
            </div>
        </div>
        @continue
        @endif
            <div class="flex flex-row gap-6 bg-slate-300">
                <p>{{Str::ucfirst($post->name)}}</p>
                <p> {{@substr($post->created_at, 0,16)}}</p>
            </div>
            <div class="p-4">
                <p>{{$post->content}}</p>
            </div>
        </div>
    @endforeach


    <form method="post" action="/threads/{{$thread->id}}/posts">
        <input type="hidden" name="title" id="title" value="{{$thread->title}}">
        <input type="hidden" name="thread" id="thread" value="{{$thread->id}}">

        <input type="hidden" name="category" value="{{$category->id}}">

        <label for="content">Enter your reply:</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>


        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">REPLY</button>
    </form>
</main>
