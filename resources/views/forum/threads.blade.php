<p>here are some threads</p>
<main>
    @foreach ($threads as $thread)
    <h4><a href="/{{$category}}/{{$thread->id}}">{{$thread->title}}</a></h4>
@endforeach
</main>
