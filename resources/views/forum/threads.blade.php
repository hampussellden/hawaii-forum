<p>here are some threads</p>
<main>
    @foreach ($threads as $thread)
    <article>
        <h4>{{$thread->name}}</h4>
    </article>
@endforeach
</main>
