<x-layout>
    <section class="flex">
        <aside class="bg-black-800 flex-shrink-0 h-screen pt-10 px-4 py-16 text-white w-48 bg-gradient-to-b from-slate-800 to-slate-600">
            <ul>
                <li class="flex my-2">
                    <a href="/dashboard" class="flex-1 border rounded-full px-2 py-1 text-center {{request()->is('dashboard') ? 'text-gray-800 bg-white':'border-white'}}">Dashboard</a>
                </li>
                <li class="flex my-2">
                    <a href="/new-post" class="flex-1 border border-white rounded-full px-2 py-1 text-center {{request()->is('new-post') ? 'text-gray-800 bg-white':'border-white'}}">New Post</a>
                </li>
                <li class="flex my-2">
                    <a href="/new-user" class="flex-1 border border-white rounded-full px-2 py-1 text-center {{request()->is('new-user') ? 'text-gray-800 bg-white':'border-white'}}">New User</a>
                </li>

            </ul>
        </aside>
        <div class="h-full pt-10 mx-12 flex-1">
            {{$slot}}
        </div>
    </section>
</x-layout>
