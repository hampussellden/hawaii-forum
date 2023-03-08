<h2>Welcome {{$user->name}}!</h2>
<a href="/logout"><button>LOGOUT</button></a>

<main>
    @foreach ($categories as $category)
    <article>
        <a href="/threads/{{$category->id}}">
            <h3>{{Str::ucfirst($category->name)}}</h3>
        </a>
    </article>
    @endforeach
    <article>
        <p>Active threads:</p>
        @foreach ($latestThreads as $latestThread)

        <a href="/posts/{{$latestThread->id}}">{{$latestThread->title}}</a>
    @endforeach
        
    </article>
</main>
