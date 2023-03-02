<main>
    <h3>{{$thread->title}}</h3>
    {{-- <h4>{{$original->title}}</h4>
    <p>{{$original->content}}</p> --}}
    @foreach ($posts as $post)
    <div>
        @if ($loop->first)
        <div style="display:flex; flex-direction: row;">
            <h3>{{$post->title}}</h3>
            <p>{{$post->name}}</p>
        </div>
            <p>{{$post->content}}</p>
        @continue
        @endif
        <div style="display:flex; flex-direction: row;">
            <h4>{{$post->title}}</h4>
            <p>{{$post->name}}</p>
        </div>
        <p>{{$post->content}}</p>
    </div>
    @endforeach
</main>
