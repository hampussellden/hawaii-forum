<main>
    <h2>{{Str::ucfirst($category->name)}}</h2>
@foreach ($threads as $thread)
    <h4>
        <a href="/posts/{{$thread->id}}">
            {{$thread->title}}
        </a>
    </h4>
    @endforeach

        <form method="post" action="/categories/{{$category->id}}/threads">
            <label for="title">Thread Title</label>
            <input type="text" name="title" id="title">

            <label for="content">Post Content</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>

            <input type="hidden" name="category" value="{{$category->id}}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit">Create Thread</button>
        </form>
</main>
