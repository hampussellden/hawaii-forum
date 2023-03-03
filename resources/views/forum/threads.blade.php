<p>here are some threads</p>

<main>
    <h2>{{Str::ucfirst($category->name)}}</h2>
@foreach ($threads as $thread)
    <h4>
        <a href="/posts/{{$thread->id}}">
            {{$thread->title}}
        </a>
    </h4>
    @endforeach
   
        <a href="/newthread">
            <button>Create Thread</button>
        </a>

</main>
