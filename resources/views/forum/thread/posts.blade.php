<main>

    @foreach ($posts as $post)
    <h1>{{$threads}}</h1>
    <p>{{$post->content}}</p>
@endforeach
</main>
