<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body style="font-family: Open Sans, sans-serif">
<header class="px-6 py-4 bg-gray-800">
    <nav class="flex justify-between items-center">
        <div class="flex">
            <img src="/images/laravel.svg.png" width="50" height="52" alt="">
            <img src="/images/logotype.min.svg" width="115" height="40" alt="" class="ml-3">

        </div>
        <div class="mt-8 mt-0 flex items-center text-white">

            @auth
                @admin
                <a href="/dashboard" class="text-xs font-bold uppercase">Dashboard</a>
                @endadmin
                <a href="{{ route('logout.perform') }}" class="text-xs font-bold uppercase ml-2">Log out</a>
                <form method="POST" action="/logout" class="hidden">
                    @csrf
                </form>

            @else
                <a href="/signup" class="text-xs font-bold uppercase">Sign up</a>
                <a href="/login"
                   class="ml-6 font-bold uppercase border border-teal-600 px-4 py-1 rounded-full hover:bg-teal-600 hover:text-white transition hover:duration-300 hover:border-white ease-in-out">Log
                    in</a>
            @endauth
        </div>
    </nav>
</header>
{{$slot}}
<footer id="newsletter"
        class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10">
    <h5 class="text-3xl">Stay in touch with the latest posts</h5>
    <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>
    <div class="mt-10">
        <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
        </div>
    </div>
</footer>
</body>
</html>
