<!doctype html>

<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
@livewireStyles

<body style="font-family: Open Sans, sans-serif">
<header class="px-6 py-4 bg-gray-800">
    <nav class="flex justify-between items-center">
        <div class="flex">
            <a href="/" class="flex mr-5">

                <img src="/images/laravel.svg.png" width="50" height="52" alt="">
                <img src="/images/logotype.min.svg" width="115" height="40" alt="" class="ml-3">
                {{--            <x-livewire/>--}}
            </a>

            <a href="/livewire" class="flex">
                <x-livewire/>
            </a>
            <x-timer/>
        </div>

        <div class="my-4 flex items-center text-white">

            @auth
                <h1 class="text-lg mr-6">Welcome back {{ucwords(auth()->user()->name)}}</h1>
                @admin
                <a href="/livewire/dashboard"
                   class="text-sm border border-gray-200 rounded-full px-3 py-2 font-bold hover:bg-gray-700">Dashboard</a>
                @endadmin
                <form method="POST" action="/livewire/logout">
                    @csrf
                    <button class="text-xs font-bold uppercase ml-2" type="submit">Log out</button>
                </form>

            @else
                <a href="/livewire/signup" class="text-xs font-bold uppercase">Sign up</a>
                <a href="/livewire/login"
                   class="ml-6 font-bold uppercase border border-teal-600 px-4 py-1 rounded-full hover:bg-teal-600 hover:text-white transition hover:duration-300 hover:border-white ease-in-out">Log
                    in</a>
            @endauth
        </div>
    </nav>
</header>
{{--@livewire('welcome')--}}
{{$slot}}
<footer id="newsletter"
        class="bg-slate-600 text-center py-16 px-10 text-white">
    <h5 class="text-3xl">Learn more about LiveWire</h5>

</footer>
@livewireScripts
</body>

