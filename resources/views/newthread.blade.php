<form method="get" action="/threads/create">

<label for="title">Thread Title</label>
<input type="text" name="title" id="title">

<label for="content">Post Content</label>
<textarea name="content" id="content" cols="30" rows="10"></textarea>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<button type="submit">Create Thread</button>
</form>