<main>
    <h3>{{$thread->title}}</h3>
    <h4>{{$original->title}}</h4>
    <p>{{$original->content}}</p>
    @foreach ($posts as $post)
    <div>
        <h4>{{$post->title}}</h4>
        <p>{{$post->content}}</p>
    </div>
    @endforeach
</main>
