<h2>Welcome {{$user->name}}</h2>
<a href="/logout"><button>LOGOUT</button></a>

<main>
@foreach ($categories as $category)
    <article>
        <a href="/forum/<?= Str::of($category->name)->lower(); ?>">
            <h3>{{$category->name}}</h3>
        </a>
    </article>
@endforeach
</main>
