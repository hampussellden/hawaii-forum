<form action="/register-user" method="post">

    <label for="username">Choose username:</label>
    <input type="text" name="username" id="username">

    <label for="email">Register with email:</label>
    <input type="email" name="email" id="email">

    <label for="password">Choose password:</label>
    <input type="password" name="password" id="password">
    <label for="password-validate">Retype password:</label>
    <input type="password" name="password-validate" id="password-validate">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit">Register user</button>
</form>
@include('errors')
