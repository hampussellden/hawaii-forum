@extends('layouts.app')
<main class="flex flex-col gap-4 mx-3 lg:mx-16">
    <h3 class="text-3xl">{{$thread->title}}</h3>
    @foreach ($posts as $post)
        <div class="flex flex-col border-solid border-2 border-black bg-slate-100">
            @if ($loop->first)
            <div class="flex flex-row gap-6 bg-orange-400">
                <h3>{{$post->title}}</h3>
                <p>From: {{Str::ucfirst($post->name)}}</p>
            </div>
            <div class="p-4">
                <p>{{$post->content}}</p>
            </div>
        </div>
        @continue
        @endif
            <div class="flex flex-row gap-6 bg-slate-300">
                <h4>{{$post->title}}</h4>
                <p>From: {{Str::ucfirst($post->name)}}</p>
            </div>
            <div class="p-4">
                <p>{{$post->content}}</p>
            </div>
        </div>
    @endforeach
</main>
