<div class="flex flex-col justify-center items-center">
    <p class="text-4xl m-28">WU22 Forum</p>
    <form method="post" action="/login" class="flex flex-col">    
        <label for="email">Enter email:</label>
        <input class="border border-black mb-4" type="email" name="email" id="email">
    
        <label for="password">Enter password:</label>
        <input class="border border-black" type="password" name="password" id="password">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="bg-[#ffe4c4]" type="submit">Login user</button>
    </form>
    
    <a class="mt-12"href="/register">
        <button class="">Register user</button>
    </a>
</div>



@include('errors')