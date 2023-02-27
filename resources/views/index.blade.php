
<p>Hello welcome to Forum</p>
<form method="post" action="/login">    
    <label for="email">Enter email:</label>
    <input type="email" name="email" id="email">

    <label for="password">Enter password:</label>
    <input type="password" name="password" id="password">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit">Login user</button>
</form>

<a href="/register">
    <button>Register user</button>
</a>

@include('errors')