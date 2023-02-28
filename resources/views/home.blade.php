<h2>Welcome {{$user->name}}</h2>
<a href="/logout"><button>LOGOUT</button></a>

<main>
    <?php foreach ($categories as $category) : ?>
        <article>
            <a href="/forum/{{$category->name}}">
                <h3>{{$category->name}}</h3>
            </a>
        </article>
    <?php endforeach ?>
</main>
