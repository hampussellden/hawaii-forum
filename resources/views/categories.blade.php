@include('shared.header')
<nav class="flex flex-row justify-between">
    <h2>Welcome {{$user->name}}!</h2>
    <a href="/logout"><button>LOGOUT</button></a>
</nav>

<main>
    <h3>What do you want to discuss today?</h3>
    <div class="flex flex-wrap gap-2">
        @foreach ($categories as $category)
        <article class="border-solid border-2 border-black bg-slate-200 w-full max-w-sm">
            <a href="/threads/{{$category->id}}">
                <h4>{{Str::ucfirst($category->name)}}</h4>
            </a>
        </article>
        @endforeach
    </div>
    <div>
    <h3>Active threads:</h3>
        @foreach ($latestThreads as $latestThread)
        <article>
            <a href="/posts/{{$latestThread->id}}">
                <h4 class="underline">
                    {{Str::ucfirst($latestThread->title)}}
                </h4>
            </a>
        </article>
        @endforeach
    </div>

    <div class="">
        <form class="p-4 border-solid border-2 border-black bg-slate-300 w-full" method="post" action="/categories">
            <p>I want to start my own category</p>
            <input type="text" id="title" name="name">
            <label for="title">Title</label>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="p-4 border-solid border-2 border-black bg-slate-100" type="submit">Make Categroy</button>
        </form>
    </div>
</main>

@include('shared.footer')
