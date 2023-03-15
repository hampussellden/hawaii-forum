@include('shared.header')
<div class="flex flex-col justify-center items-center">
    <p class="text-4xl m-28">Register as a user</p>
<form action="/register-user" method="post" class="flex flex-col gap-2">
<div>
    <label for="username">Choose username:</label>
    <input class="border border-solid border-blue-500 rounded" type="text" name="username" id="username">
</div>
<div>
    <label for="email">Register with email:</label>
    <input class="border border-solid border-blue-500 rounded" type="email" name="email" id="email">
</div>
<div>
    <label for="password">Choose password:</label>
    <input class="border border-solid border-blue-500 rounded" type="password" name="password" id="password">
</div>
<div>
    <label for="password-validate">Retype password:</label>
    <input class="border border-solid border-blue-500 rounded" type="password" name="password-validate" id="password-validate">
</div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit">Register user</button>
</form>
</div>
@include('errors')
@include('shared.footer')
