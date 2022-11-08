<x-settings>

    <main class="max-w-lg mx-auto p-4 rounded-xl border border-gray-500">
        <h1 class="font-bold text-xl text-gray-800">New User</h1>
        <form action="/create/user" method="POST" class="mt-10">
            @csrf

            <div class="mb-6">
                <label for="name" class="block mb-2 uppercase font-bold text-s text-gray-700">Name</label>
                <input id="name"
                       name="name"
                       type="text"
                       class="border border-gray-400 p-2 w-full rounded-xl">
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-s text-gray-700">Email</label>
                <input id="email"
                       name="email"
                       type="text"
                       class="border border-gray-400 p-2 w-full rounded-xl">
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="px-6 py-2 text-center rounded-xl border border-gray-800 hover:bg-gray-300">Create</button>
            </div>
        </form>
    </main>
</x-settings>
